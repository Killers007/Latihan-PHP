<?php
class Emails {

    private $ci;
    function __construct() {
        $this->ci = & get_instance();
    }

    function sendEmail($to = 'gjuhdi@gmail.com', $msg= 'NULL', $subject = 'footer', $debug = false)
    {
        // $msg = $this->ci->load->view('email/forgot_password', array(), true);
        $email = 'flashzone06@gmail.com';

        $this->ci->load->library('email');

        $config['protocol'] = "smtp";
        $config['smtp_host'] =  "ssl://smtp.gmail.com";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = $email; 
        $config['smtp_pass'] = 'juhdi123';
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";

        $this->ci->email->initialize($config);

        $this->ci->load->library('email'); // Note: no $config param needed
        $this->ci->email->from($email, 'BPSDMD PROV KALSEL');
        $this->ci->email->to($to);
        $this->ci->email->subject($subject);
        $this->ci->email->message($msg);
        
        if($this->ci->email->send()){
            $res = array(
                'status' => 'success',
                'message' => 'Email send successfully'
            );

        }else{
            $res = array(
                'status' => 'error',
                'message' => $this->ci->email->print_debugger()
            );

        }

        if ($debug) {
            echo json_encode($res);
        }
    }

    function sendResetpassword($to = 'gjuhdi@gmail.com', $link = null, $subject = 'Reset', $debug = false)
    {
        $msg = "Silahkan klik link di sini untuk reset passowrd $link";
        $msg = $this->ci->load->view('email/forgot_password', array('link' => $link), true);
        $email = 'flashzone06@gmail.com';

        $this->ci->load->library('email');

        $config['protocol'] = "smtp";
        $config['smtp_host'] =  "ssl://smtp.gmail.com";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = $email; 
        $config['smtp_pass'] = 'juhdi123';
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";

        $this->ci->email->initialize($config);

        $this->ci->load->library('email'); // Note: no $config param needed
        $this->ci->email->from($email, 'BPSDMD PROV KALSEL');
        $this->ci->email->to($to);
        $this->ci->email->subject($subject);
        $this->ci->email->message($msg);
        
        if($this->ci->email->send()){
            $res = array(
                'status' => 'success',
                'message' => 'Email send successfully',
                'to' => $to
            );

        }else{
            $res = array(
                'status' => 'error',
                'message' => $this->ci->email->print_debugger()
            );

        }

        if ($debug) {
            return json_encode($res);
        }
    }

}
