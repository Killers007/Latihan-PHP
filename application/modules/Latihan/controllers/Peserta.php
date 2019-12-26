<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends MY_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model('Peserta_m', 'model');

		// if (!$this->access->accessFor('admin')) 
		// {
		// 	show_error('Tidak ada akses ke sini');
		// }
	}

	public function index() {
		if ($this->input->is_ajax_request()) 
		{
			$res = $this->model->getDataGrid($this->input->get(), 'renderDatatable', array(NULL));

			foreach ($res['data'] as $key => $value) {
				foreach ($value as $keys => $values) {
					$res['data'][$key]->pesertaGelarDepan = ($res['data'][$key]->pesertaGelarDepan != null)?$res['data'][$key]->pesertaGelarDepan:'';
					$res['data'][$key]->pesertaGelarBelakang = ($res['data'][$key]->pesertaGelarBelakang != null)?$res['data'][$key]->pesertaGelarBelakang:'';
					$res['data'][$key]->pesertaNoHp = ($res['data'][$key]->pesertaNoHp != null)?$res['data'][$key]->pesertaNoHp:'';
					$res['data'][$key]->pesertaJabatan = ($res['data'][$key]->pesertaJabatan != null)?$res['data'][$key]->pesertaJabatan:'';
				}
			}

			echo json_encode($res);
		}
		else
		{
			$data['selectAgama'] = $this->model->selectAgama();
			$this->layout->setTemplate(1);
			$this->layout->setTitle('Data peserta', false)->render('peserta/index', $data);
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
					$res['error'][$value['field']] = form_error($value['field']);
				}

				echo json_encode($res);

			}
			else
			{
				$this->load->library('uploads');
				$imageName = $this->uploads->uploadImage('pesertaFoto')->imageName;

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

		$this->db->select('pesertaUsername, pesertaNama, pesertaTanggalLahir');
		$data = $this->db->get('diklat_m_peserta');
		
		$field = [
			'pesertaUsername' => 'NIP',
			'pesertaNama' => 'Nama', 
			'pesertaTanggalLahir' => 'Tanggal Lahir',
		];

		$this->excel->generateExcel($data->result_array(), 'Data peserta', $field);
	}

	/*
     * ------------------------------------------------------
     *  Callback Form Validation
     * ------------------------------------------------------
     */
    
    public function cek_username($str)
    {
    	if (!empty($this->getDataById($str))) 
    	{
    		$this->form_validation->set_message(__FUNCTION__, "NIP $str sudah digunakan");
    		return FALSE;
    	}
    	else
    	{
    		return TRUE;
    	}
    }

    function getDataById($id)
    {
    	$this->db->where('userUsername', $id);

        return $this->db->get('diklat_m_user')->row();
    }

    /* ----------------------   END  ----------------------*/

}
