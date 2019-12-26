<?php

class Provinsi_m extends MY_Model {

	private $table	= 'provinsi';
	private $key	= 'id_prov';

	public function rules() {

		$rules = array(
			array('field' => 'nama_prov', 'label' => 'Provinsi', 'rules' => 'required'),
		);

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

	function deleteData($id)
	{
		$this->db->where($this->key, $id);
		return $this->db->delete($this->table);
	}

	function replaceData($id)
	{
		$data = $this->input->post(NULL, TRUE);

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
			$this->db->where($this->key, $id);
			$this->db->update($this->table, $data);

			return array(
				'status' => true,
				'message' => 'Data berhasil diperbaharui',
			);
		}
	}
}
