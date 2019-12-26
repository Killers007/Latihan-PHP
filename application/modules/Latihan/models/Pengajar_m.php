<?php

class Pengajar_m extends MY_Model {

	private $table	= 'diklat_m_pengajar';
	private $key	= 'pengajarNip';

	public function rules($update = null) {

		$rules = array(
			array('field' => 'pengajarNama', 'label' => 'Nama', 'rules' => 'required|trim'),
			array('field' => 'pengajarJabatan', 'label' => 'Jabatan', 'rules' => 'required'),
			array('field' => 'pengajarInstansi', 'label' => 'Instansi', 'rules' => 'required'),
			array('field' => 'pengajarAgama', 'label' => 'Agama', 'rules' => 'required|numeric'),
			array('field' => 'pengajarPangkatGolongan', 'label' => 'Pangkat / Golongan', 'rules' => 'required'),
			array('field' => 'pengajarPendidikanTerakhir', 'label' => 'Pendidikan Terakhir', 'rules' => 'required'),
			array('field' => 'pengajarNoHp', 'label' => 'No Hp', 'rules' => 'numeric'),
			array('field' => 'pengajarEmail', 'label' => 'Email', 'rules' => 'valid_email'),
		);

		if ($update == null) 
		{
			$rules[] = array('field' => 'pengajarNip', 'label' => 'NIP', 'rules' => 'required|callback_cek_username|trim');
		}
		else
		{
			$rules[] = array('field' => 'pengajarNip', 'label' => 'NIP', 'rules' => 'required|trim');
		}

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

	function selectAgama()
	{
		$out = [];
		$res = $this->db->get('diklat_r_agama')->result();

		$out[''] = '-- Pilih Agama --';

		foreach ($res as $key => $value) {
			$out[$value->agamaId] = $value->agamaNama;
		}

		return $out;
	}

	function renderDatatable($nim = NULL)
	{
		if($nim != NULL)
		{
			$this->db->where($this->key, $nim);
		}

		// $this->db->select('id_kab, nama_kab, nama_prov, kabupaten.id_prov');
		$this->db->join('diklat_r_agama', 'agamaId = pengajarAgama');
		return $this->db->get($this->table);
	}

	function deleteData($id)
	{
		$this->db->trans_begin();
		$this->deleteImage($id);
		$this->db->where($this->key, $id);
		$this->db->delete($this->table);

		if ($this->db->trans_status()) 
		{
			$this->db->trans_commit();

			return ['status' => 'success', 'message' => 'Data berhasil dihapus'];
		}
		else
		{
			$this->db->trans_rollback();

			return ['status' => 'error', 'message' => 'Data gagal dihapus'];

		}

	}

	function deleteImage($id)
	{
		// $this->load->helper('file');

        $data = $this->getDataById($id);
        $imageLocation = 'assets/upload/images/'.$data->pengajarFoto;

        // delete_files($imageLocation);

        if (file_exists($imageLocation) && $data->pengajarFoto != null) {
            unlink($imageLocation);
        }
    }

	function replaceData($id = null, $imageName = null)
	{
		$data = $this->input->post(NULL, TRUE);
		$data['pengajarTanggalLahir'] = date('Y-m-d', strtotime($data['pengajarTanggalLahir'])); 

        if ($imageName != null && $id != null) {
			$this->deleteImage($id);
        }
		
		if ($imageName != null) {
            $data['pengajarFoto'] = $imageName;
        }

		if ($id == NULL) 
		{
			$this->db->trans_begin();
			$this->db->insert($this->table, $data);

			if ($this->db->trans_status()) 
			{
				$this->db->trans_commit();

				return ['status' => 'success', 'message' => 'Data berhasil ditambahkan'];
			}
			else
			{
				$this->db->trans_rollback();

				return ['status' => 'error', 'message' => 'Data gagal ditambahkan'];

			}
		}
		else
		{
			$this->db->trans_begin();

			$this->db->where($this->key, $id);
			$this->db->update($this->table, $data);

			if ($this->db->trans_status()) 
			{

				$this->db->trans_commit();

				return ['status' => 'success', 'message' => 'Data berhasil diperbaharui'];
			}
			else
			{
				$this->db->trans_rollback();

				return ['status' => 'error', 'message' => 'Data gagal diperbaharui'];

			}
		}
	}

	/**
     * Ambil 1 data
     * @return object [description]
     */
    public function getDataById($id){

        $this->db->where($this->key, $id);

        return $this->db->get($this->table)->row();
    } 
}
