<?php

/**
 * Model For Storing Messages Sent From Website
 *
 * @author satish
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class WebsiteMessageManager extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function saveMessage(array $messageInfo) {
        $this->db->insert('messages', $messageInfo);
        return $this->db->insert_id();
    }

}



