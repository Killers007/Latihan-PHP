<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// require_once APPPATH . "/third_party/PHPWord.php";
require_once APPPATH . "/third_party/PHPWord/vendor/autoload.php";
use PhpOffice\PhpWord;
use PhpOffice\PhpWord\Settings;
Settings::loadConfig();
// use PhpOffice\PhpWord\PhpWord;

class Word {

    public function __construct() {
        // parent::__construct();

    }

}
