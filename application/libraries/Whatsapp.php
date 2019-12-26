<?php
class Whatsapp {

    private $ci;
    function __construct() {
        $this->ci = & get_instance();

    }

    function sendMessage($phone = '85391860735', $text = 'Kosong')
    {
        $this->ci->load->helper('simple_dom');
        $html = $this->getCurl("https://eu92.chat-api.com/instance86194/sendMessage?token=ligprar9sgxs4zas", array('phone' => '62'.$phone, 'body' => urldecode($text)));
        echo $phone;return str_get_html($html);
    }

    function getCurl($url = '', $data = array(), $post = true)
    {

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);
    
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            "User-Agent: TOR/69.0 (KaliLinux NT 6.1; rv:2.0.1) Gecko/20100101 Onanymous/4.0.1 Killers",
            "Accept: application/json, text/javascript, */*; q=0.01",
            "Accept-Language: en-us,en;q=0.5",
            "Accept-Encoding: gzip, deflate",
            "Connection: keep-alive",
            "X-Requested-With: XMLHttpRequest",
            // "Cookie: $file[0]",
            "Remote-address: 192.168.1.1",
        ));
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);

        if ($post) 
        {
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
        }
        else
        {
            curl_setopt($curl, CURLOPT_POST, 0);
        }

        $exec = curl_exec($curl);

        return $exec;
    }

}
