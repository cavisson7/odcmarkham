<?php

/**
 * About Us Page Controller Of The Website
 *
 * @author Satish
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public static function index() {
        $this->load->view("services");
    }
}
