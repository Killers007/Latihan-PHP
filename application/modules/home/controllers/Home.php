<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model('Welcome_m', 'model');

	}

	function cetak()
	{
		$this->load->view('cetak_absensi_v');
	}

	public function index() {

		if ($this->input->is_ajax_request()) 
		{
			$res = $this->model->getDataGrid($this->input->get(), 'renderDatatable', array(NULL));

			echo json_encode($res);
		}
		else
		{
			redirect(base_url('home/diklat'));
			$data['selectProvinsi'] = $this->model->selectProvinsi();
			$this->layout->setTemplate(0);
			$this->layout->setTitle('Data Kabupaten', false)->render('index', $data);
		}
		
	}

	public function reset()
	{
		$token = $this->input->get('token', TRUE);
		$uid = $this->input->get('uid', TRUE);

		if ($token == null) 
		{
			show_error('Harap masukkan token');
		}

		$this->db->where('pesertaTokenPassword', $token);
		$this->db->where('pesertaNik', $uid);
		$res = $this->db->get('diklat_m_peserta')->row();

		if (!$this->input->is_ajax_request()) 
		{
			if (!empty($res)) 
			{
				$this->load->view('reset_password_v');
			}
			else
			{
				show_error('Token dan User ID yang anda masukkan tidak valid');
			}

		}
		else
		{
			$this->load->library('form_validation');

			$this->form_validation->set_error_delimiters('<span class="form-text text-danger">', '</span>');
			$this->form_validation->set_rules($this->model->rulesReset());

			if(!$this->form_validation->run())
			{
				$res = array();

				$res['status'] = 'validate';

				foreach ($this->model->rulesReset() as $value) {
					$res['error'][$value['field']] = form_error($value['field']);
				}

				echo json_encode($res);

			}
			else
			{
				$data['userPassword'] = md5($this->input->post('password', TRUE));

				$this->db->where('userUsername', $uid);
				$this->db->update('diklat_m_user', $data);

				$this->db->where('pesertaNik', $uid);
				$this->db->update('diklat_m_peserta', ['pesertaTokenPassword' => NULL]);

				$this->db->where('pesertaNik', $uid);
				$status = $this->db->get('diklat_m_peserta')->row();

				$session['user'] = $uid;
				$session['role'] = 'peserta';
				$session['nama'] = $status->pesertaNama;

				$this->session->set_userdata('user', $session);

				echo json_encode(['status' => 'success', 'password berhasil diganti', 'redirect' => base_url('peserta')]);
			}
		}
	}

	function replaceData($id = null)
	{
		if ($this->input->is_ajax_request()) 
		{
			$this->load->library('form_validation');

			$this->form_validation->set_error_delimiters('<span class="form-text text-danger">', '</span>');
			$this->form_validation->set_rules($this->model->rules());

			if(!$this->form_validation->run())
			{
				$res = array();

				$res['status'] = false;

				foreach ($this->model->rules() as $value) {
					$res['error'][$value['field']] = form_error($value['field']);
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

	function deleteData($id = null)
	{
		if ($this->input->is_ajax_request()) 
		{
			$data = $this->model->deleteData($id);

			echo json_encode($data);
		}
	}

	function excel()
	{
		$this->load->library('excel');

		$data = $this->db->get('test');
		
		$field = [
			'nim' => 'NIM',
			'nama' => 'Nama', 
			'ttl' => 'Tempat tanggal lahir',
		];

		$this->excel->generateExcel($data->result_array(), 'juhdi', $field);
	}

}
