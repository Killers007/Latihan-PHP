<?php

defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . "/third_party/LogView/vendor/autoload.php";

use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;
use GuzzleHttp\Psr7\Request;

use DebugBar\DebugBar;
use DebugBar\OpenHandler;
use DebugBar\Storage\FileStorage;
use DebugBar\StandardDebugBar;


class Log extends MY_Controller
{

    private $logViewer;
    const SESSION = "SimpleSAMLSimari=e44fcc85372e06300a08ad3b8c875317; simari_session_akademik=rd8mqmk1t264rfnpo8448sdu31p85no8;";
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Diklat_m', 'model');
        $this->logViewer = new \CILogViewer\CILogViewer();
    }

    public function index()
    {
        echo $this->logViewer->showLogs();
        return;
    }

    function query()
    {
        $this->db->like('juhdi', 'value');
        $this->model->rulesBiodata();

        echo $this->db->get_compiled_select();
    }

    /**
     * Anjay mamang
     * @param      string  $query  Kisama
     * @return     [type]  [description]
     */
    function sql($query = '')
    {
        $data = $this->db->query("select * from diklat_m_user")->result();

        echo "<pre>";
        for ($i = 0; $i < 99; $i++) {
            echo "<pre>";
            print_r($data[$i]);
            echo "</pre>";
        }
        echo "</pre>";
        
    }

    function blade()
    {
        $data = array(
            'title' => 'Blade template engine for Codeigniter 3.0+',
            'content' => 'Blade template engine for Codeigniter',
            'test' => [1, 2, 3, 4, 5, 6, 7, 8, 9]
        );

        r($data);

        $this->blade->render('welcome_messages', $data);
    }

    function goutte($nim)
    {
        $data = ['allow_redirects' => false, 'cookies' => true, 'verify' => false];

        $client = new Client();

        $client->setServerParameters(["HTTP_USER_AGENT" => "TOR/69.0 (KaliLinux NT 6.1; rv:2.0.1) Gecko/20100101 Onanymous/4.0.1 Killers"]);
        $client->setServerParameters(["HTTP_COOKIE" => self::SESSION]);

        $crawler = $client->xmlHttpRequest('GET', 'https://akademik.ulm.ac.id/mahasiswa/detail/' . $nim);

        echo $crawler->filter('.box-body')->html();
    }

    function loginSimari()
    {
        $client = new Client();

        // $filename = tempnam(APPPATH.'/logs/error/', 'file-cookies');
        // $jar = new FileCookieJar('anjay', true);
        // $client->setGuzzleCookieJar($jar);

        $client->setServerParameters(["HTTP_USER_AGENT" => "TOR/69.0 (KaliLinux NT 6.1; rv:2.0.1) Gecko/20100101 Onanymous/4.0.1 Killers"]);

        $crawler = $client->xmlHttpRequest('GET', 'https://simari.ulm.ac.id/login/module.php/core/loginuserpass.php');
        $form = $crawler->selectButton('Login')->form();

        $auth = $form['AuthState']->getValue();

        $crawler = $client->submit($form, array('username' => '1611016210011', 'password' => '1611016210011', 'AuthState' => $auth));

        // if ($crawler->filter('.alert-danger')->html() == 'Incorrect username or password') 
        // {
        // 	# code...
        // }
        // else
        // {

        $sub = $crawler->selectButton('Submit')->form();
        $subs = $sub['SAMLResponse']->getValue();

        $crawler = $client->submit($sub, array('SAMLResponse' => $subs, 'RelayState' => 'https://simari.ulm.ac.id/saml'));

        // $crawler = $client->request('GET', 'https://portal.ulm.ac.id/saml/?StartFrom=simari');

        // $sub = $crawler->selectButton('Submit')->form();
        // $subs = $sub['SAMLResponse']->getValue();

        // $crawler = $client->submit($sub, array('SAMLResponse' => $subs, 'RelayState' => 'https://simari.ulm.ac.id/saml'));

        // $lnk = 'https://portal.ulm.ac.id/saml/?StartFrom=simari';$crawler->selectLink('Kunjungi Situs')->link();
        // $crawler = $client->click($lnk);

        echo $crawler->filter('html')->html();
        // 
        // $data = [];
        // $cookie = '';
        // foreach ($client->getCookieJar()->all() as $key => $value) {
        // 	$data[] = [$value->getName(), $value->getValue()];
        // 	$cookie .= "{$value->getName()}={$value->getValue()}; ";
        // }

        // $client->setServerParameters(["HTTP_USER_AGENT" => "TOR/69.0 (KaliLinux NT 6.1; rv:2.0.1) Gecko/20100101 Onanymous/4.0.1 Siapp"]);
        // $client->setServerParameters(["HTTP_COOKIE" => $cookie]);

        // $crawler = $client->xmlHttpRequest('GET', 'https://portal.ulm.ac.id/');

        // $sub = $crawler->selectButton('Submit')->form();
        // $subs = $sub['SAMLResponse']->getValue();

        // $crawler = $client->submit($sub, array('SAMLResponse' => $subs, 'RelayState' => 'https://simari.ulm.ac.id/saml'));

        // echo $crawler->filter('html')->html();
        // }

    }

    function test()
    {
        echo "<pre>";
        print_r($_SERVER);
        echo "</pre>";
    }

    function php()
    {
        // $this->output->enable_profiler(FALSE);
        // $this->config->load('profiler', TRUE);
        // $path = $this->config->item('cache_path', 'profiler');
        // $cache_path = ($path === '') ? APPPATH.'cache/debugbar/' : $path;
        // $debugbar = new DebugBar();
        // $debugbar->setStorage(new FileStorage($cache_path));
        // $openHandler = new OpenHandler($debugbar);
        // $data = $openHandler->handle(NULL, FALSE, FALSE);

        // $this->output
        // ->set_content_type('application/json')
        // ->set_output($data);


        $debugbar = new StandardDebugBar();
        $debugbarRenderer = $debugbar->getJavascriptRenderer();

        $debugbar["messages"]->addMessage("hello world!");

        echo "<html><head> {$debugbarRenderer->renderHead()}</head><body> {$debugbarRenderer->render()}</body></html>";
    }
}
