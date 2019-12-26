<?php

class Welcome_m extends MY_Model {

	private $table	= 'kabupaten';
	private $key	= 'id_kab';

	public function rulesReset() {
        $errorRequired = array(
        	'required' => 'Ketentuan dan syarat wajib di centang'
        );

        $rules = array(
            array('field' => 'password', 'label' => 'Password', 'rules' => 'required'),
            array('field' => 'repassword', 'label' => 'Konfirmasi Password', 'rules' => 'required|matches[password]'),
        );

        return $rules;
    }

}
