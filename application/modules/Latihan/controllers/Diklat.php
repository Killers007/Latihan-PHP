<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Diklat extends MY_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model('Diklat_m', 'model');

		// if (!$this->access->accessFor('admin')) 
		// {
		// 	show_error('Tidak ada akses ke sini');
		// }
	}

	public function index() 
	{
		if ($this->input->is_ajax_request()) 
		{
			if ($this->input->post('status') == 'getPengajar') 
			{
				$diklatId = $this->input->post('mengajarDiklatId', TRUE);
				$res = $this->model->getPengajar($diklatId);

				echo json_encode($res);
			}
			else
			{
				$res = $this->model->getDataGrid($this->input->get(), 'renderDatatable', array(NULL));

				echo json_encode($res);
			}
		}
		else
		{
			$data['selectPengajar'] = $this->model->selectPengajar();
			$this->layout->setTemplate(1);
			$this->layout->setTitle('MANAGEMENT DIKLAT', false)->render('diklat/index', $data);
		}
		
	}

	public function jadwal($diklatId = null, $jadwalId = null) 
	{
		$this->cekDiklat($diklatId);
		
		if ($this->input->is_ajax_request()) 
		{
			if ($this->input->post()) 
			{
				$this->load->library('form_validation');

				$this->form_validation->set_error_delimiters('<span class="form-text text-danger">', '</span>');
				$this->form_validation->set_rules($this->model->rulesJadwal());

				if(!$this->form_validation->run())
				{
					$res = array();

					$res['status'] = false;

					foreach ($this->model->rulesJadwal() as $value) {

						$res['error'][$value['field']] = form_error($value['field']);
					}

					echo json_encode($res);

				}
				else
				{
					$data = $this->model->replaceDataJadwal($diklatId, $jadwalId);

					echo json_encode($data);
				}
			}
			else
			{
				$res = $this->model->getDataGrid($this->input->get(), 'renderDatatableJadwal', array('jadwalDiklatId' => $diklatId));

				echo json_encode($res);
			}
		}
		else
		{
			$data['dataDiklat'] = $this->model->getDataById($diklatId);
			$this->layout->setTemplate(1);
			$this->layout->setTitle('JADWAL DIKLAT', false)->render('diklat/jadwal_v', $data);
		}
	}

	public function materi($diklatId = null, $materriId = null) 
	{
		$this->cekDiklat($diklatId);

		if ($this->input->is_ajax_request()) 
		{
			if ($this->input->post()) 
			{
				$this->load->library('form_validation');

				$this->form_validation->set_error_delimiters('<span class="form-text text-danger">', '</span>');
				$this->form_validation->set_rules($this->model->rulesMateri());

				if(!$this->form_validation->run())
				{
					$res = array();

					$res['status'] = false;

					foreach ($this->model->rulesMateri() as $value) {

						$res['error'][$value['field']] = form_error($value['field']);
					}

					echo json_encode($res);

				}
				else
				{
					$data = $this->model->replaceDataMateri($diklatId, $materriId);

					echo json_encode($data);
				}
			}
			else
			{
				$res = $this->model->getDataGrid($this->input->get(), 'renderDatatableMateri', array('materiDiklatId' => $diklatId));

				echo json_encode($res);
			}
		}
		else
		{
			$data['dataDiklat'] = $this->model->getDataById($diklatId);
			$this->layout->setTemplate(1);
			$this->layout->setTitle('MATERI DIKLAT', false)->render('diklat/materi_v', $data);
		}
	}

	public function cetak_absensi($diklatId =  3)
	{
		if (!$this->input->is_ajax_request()) 
		{
			$data['detailDiklat'] = $this->model->getDataById($diklatId);
			$data['dataPeserta'] = $this->model->getPeserta($diklatId);

			if (empty($data['detailDiklat'])) {
				show_error('Diklat Tidak Tersedia', 404, 'WTF LAH');
			}

			echo $this->load->view('diklat/cetak_absensi_v', $data, true);
		}
	}

	function export_excel($diklatId =  3)
	{

		$this->load->library('excel');

		$diklat = $this->model->getDataById($diklatId);
		$data = $this->model->getPeserta($diklatId);
		if (empty($diklat)) {
			show_error('Diklat Tidak Tersedia', 404, 'WTF LAH');
		}

		$field = [
			'pesertaNama' => 'Nama',
			'pesertaNik' => 'NIK', 
			'pesertaTanggalLahir' => 'Tempat, Tanggal Lahir',
			'pesertaAlamat' => 'Alamat', 
			'pesertaPangkatGolongan' => 'Pangkat / Golongan', 
			'pesertaInstansi' => 'Instansi', 
			'pesertaJabatan' => 'Jabatan', 
			'pesertaNoHp' => 'No Hp', 
		];

		$arr = [];
		foreach ($data as $key => $value) {
			$arr[$key] = (array)$value;
			$arr[$key]['pesertaTanggalLahir'] = $value->pesertaTempatLahir.', '.date_convert($value->pesertaTanggalLahir)->default;
			$arr[$key]['pesertaNoHp'] = '+62 '.$value->pesertaNoHp;
			$arr[$key]['pesertaNama'] = $value->pesertaGelarDepan.' '.$value->pesertaNama.' '.$value->pesertaGelarBelakang;
		}

		// echo "<pre>";
		// print_r($arr);
		// echo "</pre>";exit;

		$this->excel->generateExcel($arr, $diklat->diklatNama, $field);
	}

	public function word($diklatId =  null)
	{
		if (!$this->input->is_ajax_request()) 
		{
			$this->load->helper('time');
			$diklat = $this->model->getDataById($diklatId);
			$data = $this->model->getPeserta($diklatId);

			if (empty($diklat)) {
				show_error('Diklat Tidak Tersedia', 404, 'WTF LAH');
			}

			$this->load->library('word');
			$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('assets/Sertifikat.docx');

			foreach ($data as $key => $value) {
				$replacements[] = array(
					'namadiklat' => $diklat->diklatNama,
					'tanggal_mulai' => date_convert($diklat->diklatTanggalMulai)->default,
					'tanggal_selesai' => date_convert($diklat->diklatTanggalSelesai)->default,
					'tanggal_sekarang' => date_convert()->default,
					'tahun' => date_convert($diklat->diklatTanggalSelesai)->year,
					'nama' => $value->pesertaGelarDepan.' '.$value->pesertaNama.' '.$value->pesertaGelarBelakang,
					'nip' => $value->pesertaNik,
					'tempat' => $value->pesertaTempatLahir,
					'tanggal_lahir' => date_convert($value->pesertaTanggalLahir)->default,
					'pangkat' => $value->pesertaPangkatGolongan,
					'jabatan' => $value->pesertaJabatan,
					'instansi' => $value->pesertaInstansi,
					'kualifikasi' => $value->nilaiKeterangan,
					'no_depan' => $diklat->diklatNoDepan,
					'no_belakang' => $diklat->diklatNoBelakang,
					'nama_gubernur' => 'Drs. H. MUHAMMAD NISPUANI, M.AP',
					// 'jam_pelatihan' => $diklat->diklatJamPelatihan,
					'jam_pelatihan' => $diklat->jam_pelatihan,
					'gelar' => 'Pembina Utama Madya',
					'nip_gub' => '19611201 198603 1 023',
				);
			}

			$templateProcessor->cloneBlock('CLONEME', 0, true, false, $replacements);

			$temp_name=tempnam(sys_get_temp_dir(),'PHPWord');
			$templateProcessor->saveAs($temp_name);
			ob_end_clean();

			$filename = $diklat->diklatNama.'.docx';
			header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
			header('Cache-Control: max-age=0'); 
			header('Content-Disposition: attachment;filename="'.$filename.'"'); 
			readfile($temp_name);
			unlink($temp_name);

		}
	}

	public function wordBack($diklatId = null)
	{
		$this->load->helper('time');
		$diklat = $this->model->getDataById($diklatId);
		$data = $this->model->getMateri($diklatId);

		if (empty($diklat)) {
			show_error('Diklat Tidak Tersedia', 404, 'WTF LAH');
		}
		
		$this->load->library('word');

		$baru = new \PhpOffice\PhpWord\TemplateProcessor('assets/BelakangSertifikat.docx');
		$total_jam = 0;
		foreach ($data as $key => $value) {
			$replacements[] = array(
				'no' => $key+1,
				'materi' => $value->materiNama,
				'jam' => $value->materiJam,
			);
			$total_jam += $value->materiJam;
		}
		$baru->setValue('${total}', $total_jam);
		$baru->setValue('${nama_gubernur}','Drs. H. MUHAMMAD NISPUANI, M.AP');
		$baru->setValue('${tanggal_sekarang}', date_convert(date('Y-m-d'))->default);
		$baru->setValue('${gelar}', 'Pembina Utama Madya');
		$baru->setValue('${nip}', '19611201 198603 1 023');

		$baru->cloneBlock('CLONEME', 0, true, false, $replacements);



		$temp_name=tempnam(sys_get_temp_dir(),'PHPWords');
		$baru->saveAs($temp_name);
		ob_end_clean();

		$filename = 'BACKCOVER_'.$diklat->diklatNama.'.docx';
		header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
		header('Cache-Control: max-age=0'); 
		header('Content-Disposition: attachment;filename="'.$filename.'"'); 
		readfile($temp_name);
		unlink($temp_name);

	}

	public function cloneWord($diklatId =  3)
	{
		if (!$this->input->is_ajax_request()) 
		{
			$data['detailDiklat'] = $this->model->getDataById($diklatId);
			$data['dataPeserta'] = $this->model->getPeserta($diklatId);

			$this->load->library('word');
			$document =  new \PhpOffice\PhpWord\TemplateProcessor('assets/duplicateRow.docx');//$this->word->loadTemplate('assets/duplicateRow.docx');

			$datas = [];
			// foreach ($res as $key => $value) {
			// 	foreach ($value as $keys => $values) {
			// 		$datas[$keys][] = $values;
			// 	}
			// }
			$datas['nim'][0] = '1611';
			$datas['semester'][0] = '1611';
			$datas['ipk'][0] = '1611';

			$document->setValue('{var2}','IPK');
			$document->cloneRow('TBL1', $datas);

			$temp_name=tempnam(sys_get_temp_dir(),'PHPWord');
			$document->saveAs($temp_name);
			ob_end_clean();

			$filename='1.docx';
			header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
			header('Cache-Control: max-age=0'); 
			header('Content-Disposition: attachment;filename="'.$filename.'"'); 
			readfile($temp_name);
			unlink($temp_name);

		}
	}

	public function pendaftaran($diklatId = null, $pesertaNik = null) {
		if ($this->input->is_ajax_request()) 
		{
			if ($this->input->post('status') == 'sendMessage') 
			{
				$message = $this->input->post('message', TRUE);
				$id = $this->input->post('id', TRUE);

				$data = $this->model->saveMessage($id, $message);

				echo json_encode($data);
			}
			else if ($this->input->post('status') == 'readMessage') 
			{
				$id = $this->input->post('id', TRUE);

				$data = $this->model->readMessage($id);

				foreach ($data as $key => $value) {
					$data[$key]->notifSend = timeAgo(date('Y-m-d H:i:s', strtotime($value->notifSend)));
				}

				echo json_encode($data);
			}
			else if ($this->input->post('status') == 'broadcastEmail') 
			{
				$data = $this->input->post('data');

				$data = $this->model->broadcastEmail($diklatId, $data);

				echo json_encode($data);

				// if (isset($data['dataEmail'])) 
				// {
				// 	$this->load->library('emails');
				// 	foreach ($data['dataEmail'] as $key => $value) 
				// 	{
				// 		$this->emails->sendEmail($value[0], $value[1], $value[2]);
				// 	}
				// }
			}
			else if ($this->input->post('status') == 'sendEmail') 
			{
				$data = ($this->input->post('data'))?$this->input->post('data'):[];
			
				$this->load->library('emails');
				foreach ($data as $value) 
				{
					echo $this->emails->sendEmail($value[0], $value[1], $value[2], true);
				}
			}
			else if ($this->input->post()) 
			{
				$status = $this->input->post('status', TRUE);

				if ($status == 1) {
					$data = $this->model->verifikasi($diklatId, $pesertaNik);
				}else
					$data = $this->model->tolak($diklatId, $pesertaNik);

				echo json_encode($data);
			}
			else
			{
				$res = $this->model->getDataGrid($this->input->get(), 'renderDatatablePeserta', array('jadwalDiklatId' => $diklatId));

				echo json_encode($res);
			}
		}
		else
		{
			$this->cekDiklat($diklatId);

			$data['dataDiklat'] = $this->model->getDataById($diklatId);
			$data['dataPeserta'] = $this->model->getPeserta($diklatId);

			$disabled = $this->model->cekTanggalPendaftaran($diklatId);
			$data['disabled'] = ($disabled == 0)?'disabled':'';

			$this->layout->setTemplate(1);
			$this->layout->setTitle('VERIFIKASI PESERTA', false)->render('diklat/pendaftaran_v', $data);
		}
	}

	public function nilai($diklatId = null) 
	{
		$this->cekDiklat($diklatId);
		if ($this->input->is_ajax_request()) 
		{
			if ($this->input->post()) 
			{
				$data = $this->input->post(null, TRUE);
				$data = $this->model->simpanNilai($diklatId, $data);

				echo json_encode($data);
			}
			else
			{
				$res = $this->model->getDataGrid($this->input->get(), 'renderDatatableNilai', array('pendaftaranDiklatId' => $diklatId));

				echo json_encode($res);
			}
		}
		else
		{
			$disabled = $this->model->cekTanggalPendaftaran($diklatId);
			$data['disabled'] = ($disabled == 0)?'disabled':'';
			$data['dataDiklat'] = $this->model->getDataById($diklatId);

			$this->layout->setTemplate(1);

			$this->layout->setTitle('ISI NILAI', false)->render('diklat/isi_nilai_v', $data);
		}
	}

	function replaceData($id = null)
	{
		if ($this->input->is_ajax_request()) 
		{
			$this->load->library('form_validation');

			$this->form_validation->set_error_delimiters('<span class="form-text text-danger">', '</span>');
			$this->form_validation->set_rules($this->model->rules($id));

			if(!$this->form_validation->run())
			{
				$res = array();

				$res['status'] = false;

				foreach ($this->model->rules() as $value) {

					if ($value['field'] == 'diklatPengajar[]') {
						$res['error']['diklatPengajar'] = form_error($value['field']);
					}
					else
					{
						$res['error'][$value['field']] = form_error($value['field']);
					}

				}

				echo json_encode($res);

			}
			else
			{
				$data = $this->model->replaceData($id);

				echo json_encode($data);
			}
		}
	}

	function cekDiklat($diklatId)
	{
		if (!$this->model->getDataById($diklatId)) 
		{
			show_error('Diklat tidak ditemukan');
		}
	}

	function deleteData($id = null)
	{
		if ($this->input->is_ajax_request()) 
		{
			$data = $this->model->deleteData($id);

			echo json_encode($data);
		}
	}

	function deleteDataJadwal($id = null)
	{
		if ($this->input->is_ajax_request()) 
		{
			$data = $this->model->deleteDataJadwal($id);

			echo json_encode($data);
		}
	}

	function deleteDataMateri($id = null)
	{
		if ($this->input->is_ajax_request()) 
		{
			$data = $this->model->deleteDataMateri($id);

			echo json_encode($data);
		}
	}

	
	/*
     * ------------------------------------------------------
     *  Callback Form Validation
     * ------------------------------------------------------
     */

  //   public function cek_pendaftaran($str)
  //   {
		// $tanggalPendaftaran	 = explode(' - ', $this->input->post('tanggalPendaftaran', true));

  //   	if (date('Y-m-d', strtotime($tanggalPendaftaran[0])) > date('Y-m-d')) 
  //   	{
  //   		$this->form_validation->set_message(__FUNCTION__, "Tanggal $tanggalPendaftaran[0] kurang dari tanggal sekarang");
  //   		return FALSE;
  //   	}
  //   	else
  //   	{
  //   		return TRUE;
  //   	}
  //   }

	/* ----------------------   END  ----------------------*/

}
