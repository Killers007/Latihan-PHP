<?php
/**
 * Description of MY_Controller
 *
 * @author mhmdzaien
 * @property $notification Notification
 */
class MY_Controller extends CI_Controller{

   
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library(array('session','layout'));
    }
}
