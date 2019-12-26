<?php

class Peserta_m extends MY_Model {

	private $table	= 'diklat_m_peserta';
	private $key	= 'pesertaNik';
	private $nik 	= '';

	function __construct()
	{
		parent::__construct();

		$this->nik = $this->session->user['user'];
	}

	public function rulesChangePassword() {

		$rules = array(
			array('field' => 'userPasswordLama', 'label' => 'Password Lama', 'rules' => 'required|callback_cek_pass_lama'),
			array('field' => 'userPassword', 'label' => 'Password Baru', 'rules' => 'required'),
			array('field' => 'userPasswordVerify', 'label' => 'Ulangi Password', 'rules' => 'required|matches[userPassword]'),
		);

		return $rules;
	}

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

	function getProfile()
	{
		$this->db->where($this->key, $this->nik);
		$res = $this->db->get($this->table)->row();

		if (empty($res)) 
		{
			$res = (object)array(
				'pesertaNama' => null,
				'pesertaJabatan' => null,
				'pesertaInstansi' => null,
				'pesertaAgama' => null,
				'pesertaPangkatGolongan' => null,
				'pesertaPendidikanTerakhir' => null,
				'pesertaNoHp' => null,
				'pesertaEmail' => null,
				'pesertaTempatLahir' => null,
				'pesertaTanggalLahir' => null,
				'pesertaAlamat' => null,
				'pesertaAlamatKantor' => null,
			);
		}
		
		return $res;
	}

	function getEmail()
	{
		$this->db->order_by('bctDate', 'desc');
		$this->db->join('diklat_m_pegawai', 'pegawaiUsername = bctSender', 'left');
		$this->db->join('diklat_m_diklat', 'diklatId = bctDiklatId');
		$this->db->where('bctReceiver', $this->session->user['user']);
		$res = $this->db->get('diklat_t_broadcast_email')->result();
		
		return $res;
	}

	function getEmailNotif()
	{
		$this->db->where('bctRead', 0);
		$this->db->where('bctReceiver', $this->session->user['user']);
		$res = $this->db->get('diklat_t_broadcast_email')->num_rows();
		
		return $res;
	}

	function setReadEmail()
	{
		$this->db->where('bctReceiver', $this->session->user['user']);
		$res = $this->db->update('diklat_t_broadcast_email', ['bctRead' => 1]);
		
		return $res;
	}

	function readMessage()
    {
        $this->db->where('notifTo', $this->nik);
        $this->db->update('diklat_t_notif', ['notifRead' => 1]);

        $this->db->order_by('notifSend', 'asc');

        $this->db->group_start();
		$this->db->where('notifFrom', $this->session->user['user']);
		$this->db->group_end();

		$this->db->or_group_start();
		$this->db->where('notifTo', $this->session->user['user']);
		$this->db->group_end();

        // $this->db->join('diklat_m_peserta', 'pesertaNik = notifFrom', 'left');
        $this->db->join('diklat_m_pegawai', 'pegawaiUsername = notifFrom', 'left');
		$this->db->order_by('notifSend', 'asc');
        
        return $this->db->get('diklat_t_notif')->result();
    }

	function saveNotif($data)
	{
		$this->db->where('pesertaNik', $this->nik);

		$data['pesertaEmailNotif'] = isset($data['pesertaEmailNotif']);
		$data['pesertaWaNotif'] = isset($data['pesertaWaNotif']);
		$data['pesertaSystemNotif'] = isset($data['pesertaSystemNotif']);
		
		$this->db->update('diklat_m_peserta', $data);
		
		return ['status' => 'success', 'message' => 'Notifikasi berhasil diperbaharui'];
	}

	function sendMessage($content)
	{
		$data['notifFrom'] = $this->nik;
		$data['notifContent'] = $content;
		
		$this->db->insert('diklat_t_notif', $data);
		
		return ['status' => 'success', 'message' => 'Pesan berhasil dikirim'];
	}

	function changePassword($password)
	{
		$data['userPassword'] = md5($password);

		$this->db->where('userUsername', $this->nik);
		$this->db->update('diklat_m_user', $data);

		$num = $this->db->affected_rows();

		if ($num) 
		{
    		return ['status' => 'success', 'message' => 'Password berhasil diperbaharui'];
		}
		else
		{
    		return ['status' => 'error', 'message' => 'Password tidak diperbaharui'];
		}
	}

	function cekPassLama($pass)
	{
		$this->db->where('userPassword', md5($pass));
		$this->db->where('userUsername', $this->nik);
		$res = $this->db->get('diklat_m_user')->row();

		return $res;
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

	function deleteImage($id)
	{
        $data = $this->getDataById($id);
        $imageLocation = 'assets/upload/images/'.$data->pesertaFoto;

        if (file_exists($imageLocation) && $data->pesertaFoto != null) {
            unlink($imageLocation);
        }
    }

	function replaceData($imageName = null)
	{
		$id = $this->session->user['user'];
		
		$data = $this->input->post(NULL, TRUE);
		$data['pesertaTanggalLahir'] = date('Y-m-d', strtotime($data['pesertaTanggalLahir'])); 

        if ($imageName != null && $id != null) {
			$this->deleteImage($id);
        }
		
        if ($imageName != null) {
        	$data['pesertaFoto'] = $imageName;
        }

        $this->db->trans_begin();

        $this->db->where($this->key, $id);
        $this->db->update($this->table, $data);

        if ($this->db->trans_status()) 
        {

        	$session['user'] = $id;
        	$session['role'] = 'peserta';
        	$session['nama'] = $data['pesertaNama'];

        	$this->session->set_userdata('user', $session);

        	$this->db->trans_commit();

        	return ['status' => 'success', 'message' => 'Data berhasil diperbaharui'];
        }
        else
        {
        	$this->db->trans_rollback();

        	return ['status' => 'error', 'message' => 'Data gagal diperbaharui'];

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
