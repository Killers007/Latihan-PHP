<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends MY_Controller {

    private $callErrorUpload = null;


	public function __construct() {
		parent::__construct();

		$this->load->model('Upload_m', 'model');

	}

	public function index() {

		if ($this->input->is_ajax_request()) 
		{
			$res = $this->model->fastUnrealFillter()->getDataGrid($this->input->get(), 'renderDatatable', array(NULL));

			echo json_encode($res);
		}
		else
		{
			$this->layout->setTemplate(1);
			$this->layout->setTitle('Data Provinsi', false)->render('upload/index');
		}
		
	}

	function replaceData($id = null)
	{
		if ($this->input->is_ajax_request()) 
		{
			$this->load->library('form_validation');


            $config['upload_path'] = './assets/upload/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            $imageName = null;
            if(!$this->upload->do_upload('foto'))
            {
                $this->callErrorUpload = $this->upload->display_errors();
            }
            else
            {
                $image = $this->upload->data();
                $imageName = $image['file_name'];
            }

			$this->form_validation->set_error_delimiters('<span class="help-block text-danger">', '</span>');
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

		$data = $this->db->get('provinsi');
		
		$field = [
			'id_prov' => 'ID',
			'nama_prov' => 'Nama', 
			'foto' => 'Foto',
		];

		$this->excel->generateExcel($data->result_array(), 'anjay', $field);
	}

	 /*
     * ------------------------------------------------------
     *  Callback Form Validation
     * ------------------------------------------------------
     */
    
 
    public function cek_extensi()
    {
        if ($this->callErrorUpload != NULL) 
        {
            $this->form_validation->set_message(__FUNCTION__, $this->callErrorUpload);
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }


    /* ----------------------   END  ----------------------*/


}
