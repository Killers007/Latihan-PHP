<?php

class Upload_m extends MY_Model {

	private $table	= 'provinsi';
	private $key	= 'id_prov';

	public function rules($edit = null) {

		$rules = array(
			array('field' => 'nama_prov', 'label' => 'Provinsi', 'rules' => 'required'),
		);

		if ($edit != null) 
		{
			if (empty($_FILES['foto']['name'])) 
			{
				$rules[] = array('field' => 'foto', 'label' => 'Foto', 'rules' => '');
			}
			else
			{
				$rules[] = array('field' => 'foto', 'label' => 'Foto', 'rules' => 'callback_cek_extensi');
			}
		}
		else
		{
			$rules[] = array('field' => 'foto', 'label' => 'Foto', 'rules' => 'callback_cek_extensi');
		}

		return $rules;
	}

	function renderDatatable($nim = NULL)
	{
		if($nim != NULL)
		{
			$this->db->where($this->key, $nim);
		}

		// $this->db->order_by('ttl', 'asc');
		return $this->db->get($this->table);
	}

	/**
     * Ambil 1 data
     * @return object [description]
     */
    public function getDataById($id){

        $this->db->where($this->key, $id);

        return $this->db->get($this->table)->row();
    } 

    function deleteImage($id){

        $data = $this->getDataById($id);
        
        $imageLocation = 'assets/upload/'.$data->foto;

        if (file_exists($imageLocation)) {
            unlink($imageLocation);
        }
    }

	function deleteData($id)
	{
        $this->deleteImage($id);

		$this->db->where($this->key, $id);
		return $this->db->delete($this->table);
	}

	function replaceData($id, $imageName = null)
	{
		$data = $this->input->post(NULL, TRUE);

		if ($imageName != null) {

            
            $data['foto'] = $imageName;
        }

		if ($id == NULL) 
		{
			$this->db->insert($this->table, $data);

			return array(
				'status' => true,
				'message' => 'Data berhasil ditambahkan',
			);
		}
		else
		{
            $this->deleteImage($id);
			$this->db->where($this->key, $id);
			$this->db->update($this->table, $data);

			return array(
				'status' => true,
				'message' => 'Data berhasil diperbaharui',
			);
		}
	}
}
