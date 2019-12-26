<?php
class Access {

    private $ci;
    function __construct() {
        $this->ci = & get_instance();
    }

    function accessFor($privilages = 'admin')
    {
        if ($privilages == $this->ci->session->user['role']) 
        {
            return true;
        }
        else
        {
            return false;
        }
    }

}
