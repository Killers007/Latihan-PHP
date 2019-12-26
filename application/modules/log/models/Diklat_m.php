<?php

class Diklat_m extends MY_Model {

	private $table	= 'diklat_m_diklat';
	private $key	= 'diklatId';
	private $nik 	= '';

	function __construct()
	{
		parent::__construct();

		$this->nik = $this->session->user['user'];
	}

	/**
	 * Rules biodata untuk form validation
	 * @author Ahmad Juhdi <email@email.com>
	 *
	 * @return void
	 */
	public function rulesBiodata() {

		$rules = array(
			array('field' => 'pesertaNama', 'label' => 'Nama', 'rules' => 'required|trim'),
			array('field' => 'pesertaJabatan', 'label' => 'Jabatan', 'rules' => 'required'),
			array('field' => 'pesertaInstansi', 'label' => 'Instansi', 'rules' => 'required'),
			array('field' => 'pesertaAgama', 'label' => 'Agama', 'rules' => 'required'),
			array('field' => 'pesertaPangkatGolongan', 'label' => 'Pangkat / Golongan', 'rules' => 'required'),
			array('field' => 'pesertaPendidikanTerakhir', 'label' => 'Pendidikan Terakhir', 'rules' => 'required'),
			array('field' => 'pesertaNoHp', 'label' => 'No Hp', 'rules' => 'numeric|required'),
			array('field' => 'pesertaEmail', 'label' => 'Email', 'rules' => 'valid_email|required'),
			array('field' => 'pesertaTempatLahir', 'label' => 'Tempat Lahir', 'rules' => 'required'),
			array('field' => 'pesertaTanggalLahir', 'label' => 'Tanggal Lahir', 'rules' => 'required'),
			array('field' => 'pesertaAlamat', 'label' => 'Alamat Rumah', 'rules' => 'required'),
			array('field' => 'pesertaAlamatKantor', 'label' => 'Alamat Kantor', 'rules' => 'required'),
		);

		return $rules;
	}

	function replaceData($diklatId = null)
	{
		$id = $this->session->user['user'];
		
		$data = $this->input->post(NULL, TRUE);
		$data['pesertaTanggalLahir'] = date('Y-m-d', strtotime($data['pesertaTanggalLahir'])); 

        $this->db->trans_begin();

        $this->db->where('pesertaNik', $id);
        $this->db->update('diklat_m_peserta', $data);

        if ($this->db->trans_status()) 
        {

        	$this->db->trans_commit();

        	$pendaftaran['pendaftaranDiklatId'] = $diklatId;
			$pendaftaran['pendaftaranPesertaId'] = $this->nik;

			$this->db->insert('diklat_t_pendaftaran', $pendaftaran);
			return ['status' => 'success', 'message' => 'Pendaftaran berhasil'];

        }
        else
        {
        	$this->db->trans_rollback();

        	return ['status' => 'error', 'message' => 'Data gagal diperbaharui'];

        }
	}

	function selectProvinsi()
	{
		$out = [];
		$res = $this->db->get('provinsi')->result();

		foreach ($res as $key => $value) {
			$out[$value->id_prov] = $value->nama_prov;
		}

		return $out;
	}

	function selectAgama()
	{
		$out = [];
		$res = $this->db->get('diklat_r_agama')->result();

		$out[''] = '-- Pilih Agama --';

		foreach ($res as $key => $value) {
			$out[$value->agamaId] = $value->agamaNama;
		}

		return $out;
	}

	function renderDatatable($nim = NULL)
	{
		$pesertaOnly = '';

		if ($this->session->user['role'] == 'peserta') 
		{
			$pesertaOnly = "and pendaftaranPesertaId = '{$this->nik}'";
		}
		$this->db->select('*');
		$this->db->select('IF(diklatTanggalPendaftaran <= DATE(NOW()) && diklatTanggalAkhirPendaftaran >= DATE(NOW()), 1, 0) as diklatStatus');
		$this->db->select('(SELECT COUNT(*) FROM diklat_t_pendaftaran WHERE pendaftaranDiklatId = diklatId and pendaftaranIsAcc = 1) as diklatJumlah');
		$this->db->select('(SELECT COUNT(*) FROM diklat_t_pendaftaran WHERE pendaftaranDiklatId = diklatId) as diklatJumPendaftar');

		$this->db->select("(SELECT COUNT(*) FROM diklat_t_pendaftaran WHERE pendaftaranDiklatId = diklatId $pesertaOnly) as diklatIsDaftar", 'left');
		$this->db->select("(SELECT COUNT(*) FROM diklat_t_pendaftaran WHERE pendaftaranDiklatId = diklatId $pesertaOnly and pendaftaranIsAcc = '1') as diklatIsAcc", 'left');

		return $this->db->get($this->table);
	}

	function getPengajar($diklatId)
	{
		$res = [];

		$this->db->where('mengajarDiklatId', $diklatId);
		$this->db->join('diklat_m_pengajar', 'pengajarNip = mengajarNIP');

		$res['pengajar'] = $this->db->get('diklat_t_mengajar')->result();

		$this->db->where('pendaftaranDiklatId', $diklatId);
		$this->db->join('diklat_m_peserta', 'pesertaNik = pendaftaranPesertaId');
		$res['pendaftar'] = $this->db->get('diklat_t_pendaftaran')->result();

		return $res;
	}

	function getJadwal($diklatId)
	{
		$this->db->order_by('jadwalTanggal', 'asc');
		$this->db->order_by('jadwalWaktuMulai', 'asc');

		// $this->db->select('*');
		$this->db->select("CONCAT('\'' , ELT(0.5 + RAND() * 8, 'fc-event-success fc-event-solid-primary', 'fc-event-primary', 'fc-event-success', 'fc-event-danger', 'fc-event-brand', 'fc-event-info', 'fc-event-warning', 'fc-event-solid-info fc-event-light'), '\'') as className");
		$this->db->select("CONCAT('\'' , jadwalMateriPelajaran, '\'') as title");
		$this->db->select("CONCAT('\'' , jadwalPenyaji, '\'') as description");
		$this->db->select("CONCAT('\'' , jadwalTanggal, '\'' ,'+\'', 'T', jadwalWaktuMulai, '\'') as start");
		$this->db->select("CONCAT('\'' , jadwalTanggal, '\'' ,'+\'', 'T', jadwalWaktuSelesai, '\'') as end");

		$this->db->where('jadwalDiklatId', $diklatId);
		$res = $this->db->get('diklat_t_jadwal')->result();

		return $res;
	}

	function getTotal()
	{
		$this->db->where('pendaftaranIsAcc', 1);
		$data['totalPeserta'] = $this->db->get('diklat_t_pendaftaran')->num_rows();

		$this->db->where('DATE(pendaftaranTanggal) = DATE(NOW())');
		$data['totalPendaftar'] = $this->db->get('diklat_t_pendaftaran')->num_rows();

		$this->db->where('pendaftaranIsAcc', 1);
		$this->db->where('DATE(pendaftaranTanggal) = DATE(NOW())');
		$data['totalPendaftarValid'] = $this->db->get('diklat_t_pendaftaran')->num_rows();

		$this->db->where('pendaftaranIsAcc', 0);
		$this->db->where('DATE(pendaftaranTanggal) = DATE(NOW())');
		$data['totalPendaftarInValid'] = $this->db->get('diklat_t_pendaftaran')->num_rows();

		return (object)$data;
	}

	function getJadwalKegiatan()
	{
		$this->db->select("CONCAT('\'' , ELT(0.5 + RAND() * 8, 'fc-event-success fc-event-solid-primary', 'fc-event-primary fc-event-solid-success', 'fc-event-success fc-event-solid-success', 'fc-event-danger fc-event-solid-primary', 'fc-event-brand fc-event-solid-info', 'fc-event-info fc-event-solid-warning', 'fc-event-warning fc-event-solid-danger', 'fc-event-solid-info fc-event-light'), '\'') as className");
		$this->db->select("CONCAT('\'' , diklatNama, '\'') as title");
		$this->db->select("CONCAT('\'' , diklatKeterangan, '\'') as description");
		$this->db->select("CONCAT('\'' , diklatTanggalMulai, '\'') as start");
		$this->db->select("CONCAT('\'' , diklatTanggalSelesai, '\'') as end");

		$res = $this->db->get('diklat_m_diklat')->result();

		return $res;
	}

	function getDiklat($diklatId)
	{
		$this->db->where('diklatId', $diklatId);
		return $this->db->get('diklat_m_diklat')->row();
	}

	function sendPendaftaran($diklatId)
	{
		$this->db->where('pendaftaranDiklatId', $diklatId);
		$this->db->where('pendaftaranPesertaId', $this->nik);
		$num = $this->db->get('diklat_t_pendaftaran')->num_rows();

		$this->db->where('pesertaNik', $this->nik);
		$this->db->group_start();
		$this->db->where('pesertaAgama', '');
		$this->db->or_where('pesertaAlamat', '');
		$this->db->or_where('pesertaTanggalLahir', '');
		$this->db->or_where('pesertaTempatLahir', '');
		$this->db->or_where('pesertaPangkatGolongan', '');
		$this->db->or_where('pesertaJabatan', '');
		$this->db->or_where('pesertaInstansi', '');
		$this->db->or_where('pesertaNoHp', '');
		$this->db->or_where('pesertaAlamatKantor', '');
		$this->db->group_end();
		$numBiodata = $this->db->get('diklat_m_peserta')->num_rows();

		if ($num) 
		{
			return ['status' => 'error', 'message' => 'Anda Sudah Terdaftar'];
		}
		else if ($numBiodata)
		{
			return ['status' => 'error', 'message' => 'Lengkapi Biodata Terlebih Dahulu'];
		}
		else
		{
			$data['pendaftaranDiklatId'] = $diklatId;
			$data['pendaftaranPesertaId'] = $this->nik;

			$this->db->insert('diklat_t_pendaftaran', $data);
			return ['status' => 'success', 'message' => 'Pendaftaran berhasil'];
		}
	}

	function deleteData($id)
	{
		$this->db->trans_begin();
		$this->db->where($this->key, $id);
		$this->db->delete($this->table);

		if ($this->db->trans_status()) 
		{
			$this->db->trans_commit();

			return ['status' => 'success', 'message' => 'Data berhasil dihapus'];
		}
		else
		{
			$this->db->trans_rollback();

			return ['status' => 'error', 'message' => 'Data gagal dihapus'];

		}

	}

	/**
     * Ambil 1 data
     * @return object [description]
     */
    public function getDataById($id){

        $this->db->where($this->key, $id);

        return $this->db->get($this->table)->row();
    } 
}
