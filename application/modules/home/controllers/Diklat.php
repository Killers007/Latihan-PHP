<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Diklat extends MY_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model('Diklat_m', 'model');
		$this->load->model('peserta/Peserta_m', 'modelPeserta');


	}

	public function index($diklatId = null) {
		if ($this->input->is_ajax_request()) 
		{
			if ($this->input->post('status') == 'getPengajar') 
			{
				$diklatId = $this->input->post('mengajarDiklatId', TRUE);
				$res = $this->model->getPengajar($diklatId);

				echo json_encode($res);	
			}
			else if ($this->input->post('status') == 'sendPendaftaran') 
			{
				$diklatId = $this->input->post('diklatId', TRUE);
				$res = $this->model->sendPendaftaran($diklatId);

				echo json_encode($res);	

				$this->output->enable_profiler(TRUE);
				$this->console->warning($data);
			}
			else if ($this->input->post()) 
			{
				$this->load->library('form_validation');
				
				$this->form_validation->set_error_delimiters('<span class="form-text text-danger">', '</span>');
				$this->form_validation->set_rules($this->model->rulesBiodata());

				if(!$this->form_validation->run())
				{
					$res = array();

					$res['status'] = false;

					foreach ($this->model->rulesBiodata() as $value) {
						$res['error'][$value['field']] = form_error($value['field']);
					}

					echo json_encode($res);

				}
				else
				{
					$data = $this->model->replaceData($diklatId);

					echo json_encode($data);
				}
			}
			else
			{
				$res = $this->model->getDataGrid($this->input->get(), 'renderDatatable', array(NULL));

				echo json_encode($res);
			}
		}
		else
		{

			$data['profile'] = $this->modelPeserta->getProfile();
			$data['selectAgama'] = $this->model->selectAgama();
			$this->layout->setTemplate(0);
			$this->layout->setTitle('PENDAFTARAN DIKLAT BPSDMD', false)->render('diklat/index', $data);
			
			// $this->console->exception(new Exception('test exception'));
			// $this->console->debug('Debug message');
			// $this->console->info('Info message');
			// $this->console->warning('Warning message');
			// $this->console->error('Error message', $data);
			// $this->console->error('Error message', $data);
			// $this->console->error('Error message', $data);
			$this->console->warning($data);
			// $this->console->error('Error message', $data);
			$this->output->enable_profiler(TRUE);
			// r($this);
			// echo "<pre>";
			// print_r($this);
			// echo "</pre>";

		}
		
	}

	function jadwal($diklatId = null)
	{
		$this->cek($diklatId);

		if ($this->input->is_ajax_request()) 
		{
			$data = $this->model->deleteData($id);

			echo json_encode($data);
		}
		else
		{
			$data['dataJadwal'] = $this->model->getJadwal($diklatId);
			$data['detailDiklat'] = $this->model->getDiklat($diklatId);

			$this->layout->setTemplate(0);
			$this->layout->setTitle('Jadwal Pelatihan DIKLAT', false)->render('diklat/jadwal_v', $data);
		}
	}

	function kegiatan_diklat()
	{
		$data['dataJadwal'] = $this->model->getJadwalKegiatan();

		$this->layout->setTemplate(0);
		$this->layout->setTitle('Jadwal Kegiatan DIKLAT', false)->render('diklat/jadwal_kegiatan_v', $data);
	}

	function cek($diklatId)
	{
		$this->db->where('diklatId', $diklatId);
		$num = $this->db->get('diklat_m_diklat')->num_rows();

		if ($num == 0) 
		{
			show_error('Diklat tidak tersedia', 404);
		}
		else
		{
			return true;
		}
	}

	function excel()
	{
		$this->load->library('excel');

		$this->db->select('pegawaiUsername, pegawaiNama, pegawaiTanggalLahir');
		$data = $this->db->get('diklat_m_pegawai');
		
		$field = [
			'pegawaiUsername' => 'NIP',
			'pegawaiNama' => 'Nama', 
			'pegawaiTanggalLahir' => 'Tanggal Lahir',
		];

		$this->excel->generateExcel($data->result_array(), 'Data Pegawai', $field);
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
