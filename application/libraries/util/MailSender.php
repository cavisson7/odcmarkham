<?php
/**
 * Description of MailSender
 *
 * @author satish
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class MailSender {
    public static function sendMail($from,$fromName,$to,$subject,$message){
        $CI =& get_instance();
        $CI->load->library('email');
        $CI->email->from($from, $fromName);
        $CI->email->to($to);
        $CI->email->subject($subject);
        $CI->email->message($message);
        $CI->email->send();
    }
}
