<?php

class Welcome_m extends MY_Model {

	public function rules() {

		$rules = array(
			array('field' => 'nama', 'label' => 'Nama', 'rules' => 'required'),
			array('field' => 'nim', 'label' => 'NIM', 'rules' => "required"),
			array('field' => 'ttl', 'label' => 'TTL', 'rules' => 'required'),
		);

		return $rules;
	}

	function renderDatatable($nim = NULL)
	{
		if($nim != NULL)
		{
			$this->db->where('nim', $nim);
		}

		$this->db->order_by('ttl', 'asc');
		return $this->db->get('test');
	}

	function deleteData($id)
	{
		$this->db->where('nim', $id);
		return $this->db->delete('test');
	}

	function replaceData($id)
	{
		$data = $this->input->post(NULL, TRUE);

		if ($id == NULL) 
		{
			$this->db->insert('test', $data);

			return array(
				'status' => true,
				'message' => 'Data berhasil ditambahkan',
			);
		}
		else
		{
			$this->db->where('nim', $id);
			$this->db->update('test', $data);

			return array(
				'status' => true,
				'message' => 'Data berhasil diperbaharui',
			);
		}
	}
}
