<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends MY_Controller {

	private $idNip;

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
			if ($this->input->post('status') == 'reset') 
			{
				$res = $this->model->resetPass($this->input->post('nip'));

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
			$data['selectAgama'] = $this->model->selectAgama();
			$this->layout->setTemplate(1);
			$this->layout->setTitle('Data Pegawai', false)->render('pegawai/index', $data);
		}
		
	}

	function replaceData($id = null)
	{
		$this->idNip = $id;
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
					$res['error'][$value['field']] = form_error($value['field']);
				}

				echo json_encode($res);

			}
			else
			{
				$this->load->library('uploads');
				$imageName = $this->uploads->uploadImage('pegawaiFoto')->imageName;

				$data = $this->model->replaceData($id, $imageName);

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
    
    public function cek_username($str)
    {
    	if (!empty($this->getDataById($str)) && $this->idNip != $str) 
    	{
    		$this->form_validation->set_message(__FUNCTION__, "NIP $str sudah digunakan");
    		return FALSE;
    	}
    	else
    	{
    		return TRUE;
    	}
    }

    public function getDataById($id){

        $this->db->where('userUsername', $id);

        return $this->db->get('diklat_m_user')->row();
    } 

    /* ----------------------   END  ----------------------*/

}
