<?php

/**
 * Home Page Controller Of The Website
 *
 * @author Satish
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Xray extends CI_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public static function index() {
        $this->load->view("Services/xray");
    }

}
