<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Password extends MY_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model('Password_m', 'model');

		// if (!$this->access->accessFor('admin')) 
		// {
		// 	show_error('Tidak ada akses ke sini');
		// }
	}

	public function index() {
		if ($this->input->is_ajax_request()) 
		{
			$this->load->library('form_validation');

			$this->form_validation->set_error_delimiters('<span class="form-text text-danger">', '</span>');
			$this->form_validation->set_rules($this->model->rulesChangePassword());

			if(!$this->form_validation->run())
			{
				$res = array();

				$res['status'] = 'validate';

				foreach ($this->model->rulesChangePassword() as $value) {
					$res['error'][$value['field']] = form_error($value['field']);
				}

				echo json_encode($res);
			}
			else
			{
				$password = $this->input->post('userPassword', TRUE);

				$res = $this->model->changePassword($password);

				echo json_encode($res);
			}
		}
		else
		{
			$this->layout->setTemplate(1);
			$this->layout->setTitle('UBAH PASSWORD', false)->render('password/index');
		}
		
	}

	/*
     * ------------------------------------------------------
     *  Callback Form Validation
     * ------------------------------------------------------
     */

	public function cek_pass_lama($str)
	{
		if (empty($this->model->cekPassLama($str))) 
		{
			$this->form_validation->set_message(__FUNCTION__, "Password lama salah");
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}

	/* ----------------------   END  ----------------------*/

}
