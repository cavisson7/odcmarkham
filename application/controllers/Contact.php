<?php

/**
 * Controller For Contact Us Page
 *
 * @author satish kumar
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('WebsiteMessageManager');
        $this->load->library('services/MailServices');
        $this->load->library('util/MailSender');
        $this->load->library('services/SMSServices');
        $this->load->library('util/SMSSender');
    }

    public function index() {
       # $locationInfo['cities'] = $this->LocationManagement->getAllActiveCities();
        $this->load->view('contact');
    }

    public function sendMessage() {
        $this->form_validation->set_rules('name', 'Your Name', 'trim|required', array('required' => 'Your Name Is Required.'));
        $this->form_validation->set_rules('mobile', 'Your Contact Number', 'trim|required|min_length[10]|max_length[10]|numeric', array('required' => 'Your Contact Number Is Required.'));
        $this->form_validation->set_rules('subject', 'Message Subject', 'trim|required', array('required' => 'Message Subject Is Required.'));
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $messageInfo = array(
                'msg_subject' => $this->input->post('subject'),
                'msg_sender_name' => $this->input->post('name'),
                'msg_sender_mail' => $this->input->post('email'),
                'msg_sender_mobile' => $this->input->post('mobile'),
                'msg_content' => $this->input->post('message'),
                'msg_datetime' => date("Y-m-d H:i:s")
            );
            if ($this->WebsiteMessageManager->saveMessage($messageInfo)) {
                $this->mailsender->sendMail("odc.markham@gmail.com","Odcmarkham Team",$this->input->post('email'),"Thanks For Contacting Us",$this->mailservices->getBodyForUserOnContactFormSubmission($this->input->post('name')));
                $this->smssender->sendSMS($this->input->post('mobile'),$this->smsservices->getSMSBodyForUserOnMessageSubmission($this->input->post('name')));
                $this->session->set_flashdata('successMessage', 'Your Message Has Been Sent Successfully.');
                redirect(current_url());
            } else {
                $this->session->set_flashdata('errorMessage', 'Some Error Occurred While Sending Message. Try Again Later.');
                redirect(current_url());
            }
        }
    }

}
