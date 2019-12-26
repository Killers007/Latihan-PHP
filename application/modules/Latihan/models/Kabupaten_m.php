<?php

class Kabupaten_m extends MY_Model {

	private $table	= 'kabupaten';
	private $key	= 'id_kab';

	public function rules() {

		$rules = array(
			array('field' => 'nama_kab', 'label' => 'Nama Kabupaten', 'rules' => 'required'),
			array('field' => 'id_prov', 'label' => 'ID Provinsi', 'rules' => 'required'),
		);

		return $rules;
	}

	function selectProvinsi()
	{
		$out = [];
		$res = $this->db->get('provinsi')->result();

		foreach ($res as $key => $value) {
			$out[$value->id_prov] = $value->nama_prov;
		}

		return $out;
	}

	function renderDatatable($nim = NULL)
	{
		if($nim != NULL)
		{
			$this->db->where($this->key, $nim);
		}

		$this->db->select('id_kab, nama_kab, nama_prov, kabupaten.id_prov');
		$this->db->join('provinsi', 'provinsi.id_prov = kabupaten.id_prov');
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
