<?php
class Uploads {

    private $ci;
    private $imageLocation = './assets/upload/images/';

    function __construct() {
        $this->ci = & get_instance();
    }

    function uploadImage($uploadName)
    {
        $config['upload_path'] = $this->imageLocation;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['encrypt_name'] = TRUE;

        $this->ci->load->library('upload', $config);

        if(!$this->ci->upload->do_upload($uploadName))
        {
            return (object)array('status' => 'error', 'message' =>  $this->ci->upload->display_errors(), 'imageName' => null);
        }
        else
        {
            $image = $this->ci->upload->data();
            $imageName = $image['file_name'];
            $this->compressImage($imageName);

            return (object)array('status' => 'error', 'message' =>  'Berhasil menambahkan foto', 'imageName' => $imageName);
        }
    }

    function compressImage($imageName)
    {
        $config['image_library']    = 'gd2';
        $config['source_image']     = $this->imageLocation.$imageName;
        $config['new_image']        = $this->imageLocation.$imageName;
        $config['create_thumb']     = FALSE;
        $config['maintain_ratio']   = TRUE;
        $config['quality']          = '100%';
        $config['width']            = 500;
        $config['height']           = 500;

        $this->ci->load->library('image_lib', $config);
        $this->ci->image_lib->resize();
        $this->ci->image_lib->clear();
    }

}
