<?php
class Layout {
    private $ci;
    function __construct() {
        $this->ci = & get_instance();

        date_default_timezone_set('Asia/Kuala_Lumpur');

        $this->ci->load->helper('time');
    }
    public $header = 'template/header';
    public $sidebar = 'template/sidebar';
    public $footer = 'template/footer';
    public $info = 'template/infoHeader';

    public $title = 'SI Pendaftaran DIKLAT BPSDMD';

    private $templateActive = 1;

    private function getTemplate()
    {
        if ($this->templateActive == 1) {
            $this->header = 'template/sidebarColor/header';
            $this->sidebar = 'template/sidebarColor/sidebar';
            $this->footer = 'template/sidebarColor/footer';
        }
    }

    function setTemplate($num = NULL)
    {
        $this->templateActive = $num;

        return $this;
    }
    
    function render($view,$data = null,$menu = NULL){
        $this->getTemplate();

        $data['templateActive'] = $this->templateActive;
        $data['sidebar'] = $this->sidebar;
        $data['infoHeader'] = $this->info;

        $data['infoNotif'] = $this->readMessage();
        $data['infoNotifUnread'] = $this->unreadMessage();

        $data['title'] = $this->title;
        $data['menu'] = $this->cekUser();

        $this->ci->load->view($this->header, $data);
        $this->ci->load->view($view);
        $this->ci->load->view($this->footer);
    }
    
    function renderPartial($view,$data = null){
        $this->ci->load->view($view,$data);
    }

    function setTitle($title, $combine = false)
    {
        if ($combine) 
        {
            $this->title .= '| '.$title;
        }
        else
        {
            $this->title = $title;
        }

        return $this;
    }

    function readMessage()
    {
        $this->ci->db->order_by('notifSend', 'desc');
        $this->ci->db->where('notifTo', $this->ci->session->user['user']);
        return $this->ci->db->get('diklat_t_notif')->result();
    }

    function unreadMessage()
    {
        $this->ci->db->where('notifTo', $this->ci->session->user['user']);
        $this->ci->db->where('notifRead', 0);
        return $this->ci->db->get('diklat_t_notif')->num_rows();
    }

    function cekUser()
    {
        if($this->ci->uri->segment(1) == 'home') 
        {
            // if ($this->ci->session->user['role'] == 'peserta') 
            // {
            //     return array_merge($this->menuDefault(), $this->menuPeserta());
            // }

            return $this->menuDefault();
        }
        else if ($this->ci->session->user['role'] == 'admin') 
        {
            return $this->menuAdmin();
        }
        else if ($this->ci->session->user['role'] == 'pegawai') 
        {
            return $this->menuPegawai();
        }
        else if ($this->ci->session->user['role'] == 'peserta') 
        {
            return array_merge($this->menuDefault());
        }
        else
        {
            show_error('Tidak ada akses ke sini');
        }
    }

    private function menuAdmin()
    {
        return array(
            array(
                'label' => 'Dashboard',
                'modules' => 'management',
                'icon' => 'fa fa-tachometer-alt',
                'url' => 'management/management',
            ),
            array(
                'label' => 'Manajemen DIKLAT',
                'modules' => 'diklat',
                'icon' => 'fa fa-coins',
                'url' => 'management/diklat',
            ),
            array(
                'label' => 'Master',
                'icon' => 'socicon-buffer',
                'child' => [
                    array(
                        'label' => 'Pegawai',
                        'modules' => 'pegawai',
                        'icon' => 'fa fa-user-tie',
                        'url' => 'management/pegawai',
                    ),
                    array(
                        'label' => 'Pengajar',
                        'modules' => 'pengajar',
                        'icon' => 'fa fa-user-graduate',
                        'url' => 'management/pengajar',
                    ),
                    array(
                        'label' => 'Peserta',
                        'modules' => 'peserta',
                        'icon' => 'fa fa-users',
                        'url' => 'management/peserta',
                    ),
                    
                ],
            ),
            array(
                'label' => 'Ubah Password',
                'modules' => 'password',
                'icon' => 'fa fa-key',
                'url' => 'management/password',
            ),
            // array(
            //     'label' => 'Provinsi',
            //     'modules' => 'provinsi',
            //     'icon' => 'socicon-buffer',
            //     'url' => 'admin/provinsi',
            // ),
            // array(
            //     'label' => 'Kabupaten',
            //     'modules' => 'kabupaten',
            //     'icon' => 'fa fa-spinner',
            //     'url' => 'admin/kabupaten',
            // ),
            // array(
            //     'label' => 'Uploads',
            //     'modules' => 'upload',
            //     'icon' => 'la la-adjust',
            //     'url' => 'admin/upload',
            // ),
        );
    }

    private function menuPegawai()
    {
        return array(
            array(
                'label' => 'Dashboard',
                'modules' => 'management',
                'icon' => 'fa fa-tachometer-alt',
                'url' => 'management/management',
            ),
            array(
                'label' => 'Master',
                'icon' => 'socicon-buffer',
                'child' => [
                    array(
                        'label' => 'Pengajar',
                        'modules' => 'pengajar',
                        'icon' => 'fa fa-user-graduate',
                        'url' => 'management/pengajar',
                    ),
                    array(
                        'label' => 'Peserta',
                        'modules' => 'peserta',
                        'icon' => 'fa fa-users',
                        'url' => 'management/peserta',
                    ),
                    
                ],
            ),
            array(
                'label' => 'Manajemen DIKLAT',
                'modules' => 'diklat',
                'icon' => 'fa fa-coins',
                'url' => 'management/diklat',
            ),
            array(
                'label' => 'Ubah Password',
                'modules' => 'password',
                'icon' => 'fa fa-key',
                'url' => 'management/password',
            ),
        );
    }

    private function menuDefault()
    {
        return array(
            // array(
            //     'label' => 'Home',
            //     'icon' => 'socicon-bufferSS',
            //     'child' => [
            //         array(
            //             'label' => 'DIKLAT',
            //             'modules' => 'diklat',
            //             'icon' => '',
            //             'url' => 'home/diklat',
            //         ),
            //         array(
            //             'label' => 'Jadwal Kegiatan',
            //             'modules' => 'diklat',
            //             'icon' => '',
            //             'url' => 'home/diklat/kegiatan_diklat',
            //         ),
            //     ],
            // ),
            array(
                'label' => 'DIKLAT',
                'modules' => 'diklat',
                'icon' => '',
                'url' => 'home/diklat',
            ),
            array(
                'label' => 'Jadwal Kegiatan',
                'modules' => 'diklat',
                'icon' => '',
                'url' => 'home/diklat/kegiatan_diklat',
            ),
        );
    }

    function console_log($data)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";exit;
    }
}
