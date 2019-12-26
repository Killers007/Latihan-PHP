<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends MY_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model('Peserta_m', 'model');

		if (!$this->access->accessFor('peserta')) 
		{
			show_error('Tidak ada akses ke sini');
		}

	}

	public function index() 
	{

		if ($this->input->is_ajax_request()) 
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
				$this->load->library('uploads');
				$imageName = $this->uploads->uploadImage('pesertaFoto')->imageName;

				$data = $this->model->replaceData($imageName);

				echo json_encode($data);
			}
		}
		else
		{
			$data['profile'] = $this->model->getProfile();
			$data['emailNotif'] = $this->model->getEmailNotif();
			$data['subTitle'] = 'Biodata';
			$data['selectAgama'] = $this->model->selectAgama();

			$this->layout->setTemplate(0);
			$this->layout->setTitle('Dashboard', false)->render('updateBiodata_v', $data);
		}
		
	}

	public function ubah_password() 
	{

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
			$data['profile'] = $this->model->getProfile();
			$data['subTitle'] = 'Ubah Password';
			$data['emailNotif'] = $this->model->getEmailNotif();

			$this->layout->setTemplate(0);
			$this->layout->setTitle('Dashboard', false)->render('changePassword_v', $data);
		}
		
	}

	public function setting_notifikasi() 
	{

		if ($this->input->is_ajax_request()) 
		{
			$data = $this->input->post(NULL, TRUE);
			$data = $this->model->saveNotif($data);

			echo json_encode($data);
		}
		else
		{
			$data['profile'] = $this->model->getProfile();
			$data['subTitle'] = 'Setting Notifikasi';
			$data['emailNotif'] = $this->model->getEmailNotif();

			$this->layout->setTemplate(0);
			$this->layout->setTitle('Dashboard', false)->render('settingNotifikasi_v', $data);
		}
		
	}

	public function notifikasi() 
	{

		if ($this->input->is_ajax_request()) 
		{
			$data = $this->input->post('content', TRUE);
			$data = $this->model->sendMessage($data);

			echo json_encode($data);
		}
		else
		{
			$data['profile'] = $this->model->getProfile();
			$data['subTitle'] = 'Semua Notifikasi';
			$data['notifikasiData'] = $this->model->readMessage();
			$data['emailNotif'] = $this->model->getEmailNotif();


			$this->layout->setTemplate(0);
			$this->layout->setTitle('Dashboard', false)->render('readNotifikasi_v', $data);
		}
		
	}

	public function email() 
	{

		if ($this->input->is_ajax_request()) 
		{
			$data = $this->input->post(NULL, TRUE);
			$data = $this->model->saveNotif($data);

			echo json_encode($data);
		}
		else
		{
			$this->model->setReadEmail();
			$this->load->helper('time');
			$data['subTitle'] = 'Email';
			$data['notifikasiData'] = $this->model->readMessage();
			
			$data['getEmail'] = $this->model->getEmail();
			$data['emailNotif'] = $this->model->getEmailNotif();
			$data['profile'] = $this->model->getProfile();


			$this->layout->setTemplate(0);
			$this->layout->setTitle('Dashboard', false)->render('emailRead', $data);
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
