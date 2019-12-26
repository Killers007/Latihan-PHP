<?php

class Biodata_m extends MY_Model {

	private $table	= 'diklat_m_pegawai';
	private $key	= 'pegawaiUsername';

	public function rules($update = null) {

		$rules = array(
			array('field' => 'pegawaiNama', 'label' => 'Nama', 'rules' => 'required|trim'),
			array('field' => 'pegawaiJabatan', 'label' => 'Jabatan', 'rules' => 'required'),
			array('field' => 'pegawaiInstansi', 'label' => 'Instansi', 'rules' => 'required'),
			array('field' => 'pegawaiAgama', 'label' => 'Agama', 'rules' => 'required'),
			array('field' => 'pegawaiPangkatGolongan', 'label' => 'Pangkat / Golongan', 'rules' => 'required'),
			array('field' => 'pegawaiPendidikanTerakhir', 'label' => 'Pendidikan Terakhir', 'rules' => 'required'),
			array('field' => 'pegawaiNoHp', 'label' => 'No Hp', 'rules' => 'numeric'),
			array('field' => 'pegawaiEmail', 'label' => 'Email', 'rules' => 'valid_email'),
		);

		if ($update == null) 
		{
			$rules[] = array('field' => 'pegawaiUsername', 'label' => 'NIP', 'rules' => 'required|callback_cek_username|trim');
		}
		else
		{
			$rules[] = array('field' => 'pegawaiUsername', 'label' => 'NIP', 'rules' => 'required|trim');
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
		$this->db->join('diklat_r_agama', 'agamaId = pegawaiAgama');
		return $this->db->get($this->table);
	}

	function resetPass($nip)
	{
		$data['userPassword'] = md5($nip);

		$this->db->where('userUsername', $nip);
		$this->db->update('diklat_m_user', $data);

		return ['status' => 'success', 'message' => 'Password berhasil direset'];
	}

	function deleteData($id)
	{
		$this->db->trans_begin();
		$this->deleteImage($id);
		$this->db->where($this->key, $id);
		$this->db->delete($this->table);

		$this->db->where('userUsername', $id);
		$this->db->delete('diklat_m_user');

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
        $imageLocation = 'assets/upload/images/'.$data->pegawaiFoto;

        // delete_files($imageLocation);

        if (file_exists($imageLocation) && $data->pegawaiFoto != null) {
            unlink($imageLocation);
        }
    }

	function replaceData($id = null, $imageName = null)
	{
		$data = $this->input->post(NULL, TRUE);
		$data['pegawaiTanggalLahir'] = date('Y-m-d', strtotime($data['pegawaiTanggalLahir'])); 

        if ($imageName != null && $id != null) {
			$this->deleteImage($id);
        }
		
		if ($imageName != null) {
            $data['pegawaiFoto'] = $imageName;
        }

		$formData['userUsername'] = $data['pegawaiUsername'];
		$formData['userPassword'] = md5($data['pegawaiUsername']);
		$formData['userIdrole'] = 2;

		if ($id == NULL) 
		{
			$this->db->trans_begin();
			$this->db->insert($this->table, $data);

			$this->db->insert('diklat_m_user', $formData);

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

			unset($formData['userPassword']);

			$this->db->where('userUsername', $id);
			$this->db->update('diklat_m_user', $formData);

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
