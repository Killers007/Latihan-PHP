<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends MY_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model('Pegawai_m', 'model');

		if (!$this->access->accessFor('admin')) 
		{
			show_error('Tidak ada akses ke sini');
		}
	}

	public function index() {
		if ($this->input->is_ajax_request()) 
		{
			$res = $this->model->getDataGrid($this->input->get(), 'renderDatatable', array(NULL));

			echo json_encode($res);
		}
		else
		{
			$data['selectProvinsi'] = $this->model->selectProvinsi();
			$this->layout->setTemplate(1);
			$this->layout->setTitle('Data Kabupaten', false)->render('pegawai/index', $data);
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
