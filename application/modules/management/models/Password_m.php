<?php

class Password_m extends MY_Model {

	private $table	= 'diklat_m_user';
	private $key	= 'userUsername';
	private $username 	= '';

	function __construct()
	{
		parent::__construct();

		$this->username = $this->session->user['user'];
	}

	public function rulesChangePassword() {

		$rules = array(
			array('field' => 'userPasswordLama', 'label' => 'Password Lama', 'rules' => 'required|callback_cek_pass_lama'),
			array('field' => 'userPassword', 'label' => 'Password Baru', 'rules' => 'required'),
			array('field' => 'userPasswordVerify', 'label' => 'Ulangi Password', 'rules' => 'required|matches[userPassword]'),
		);

		return $rules;
	}

	function changePassword($password)
	{
		$data['userPassword'] = md5($password);

		$this->db->where('userUsername', $this->username);
		$this->db->update('diklat_m_user', $data);

		$num = $this->db->affected_rows();

		if ($num) 
		{
    		return ['status' => 'success', 'message' => 'Password berhasil diperbaharui'];
		}
		else
		{
    		return ['status' => 'error', 'message' => 'Password tidak berubah'];
		}
	}

	function cekPassLama($pass)
	{
		$this->db->where('userPassword', md5($pass));
		$this->db->where('userUsername', $this->username);
		$res = $this->db->get('diklat_m_user')->row();

		return $res;
	}



}
