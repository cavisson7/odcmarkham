<?php

/***************************************************
satish                   *
/***************************************************/

class SMSSender
{
    const BASE_URL = '';
    const USER_NAME = '';
    const API_KEY = '';
    const SENDER_ID = '';
    const SMS_TYPE = 'TRANS';
    const FINAL_URL_PRE = self::BASE_URL.'username='.self::USER_NAME.'&apikey='.self::API_KEY.'&sendername='.self::SENDER_ID.'&numbers=';
    const FINAL_URL_POST = '&smstype='.self::SMS_TYPE;
    
    
    public function sendSMS($mobile,$message){
        $ch = curl_init();
        $url = self::FINAL_URL_PRE.$mobile."&message=".urlencode($message).self::FINAL_URL_POST;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $deliveryStatus = curl_exec($ch);
        curl_close($ch);
        self::logThisSMSTransaction($deliveryStatus, $mobile, $message, self::SENDER_ID);
    }
    
    public static function logThisSMSTransaction($deliveryStatus,$mobile,$message,$senderId){
        $CI =& get_instance();
        $form_data = array(
            'sms_number' => $mobile,
            'sms_content' => $message,
            'sms_sender_id' => $senderId,
            'sms_delivery_status' => $deliveryStatus,
            'sms_date' => date("Y-m-d H:i:s")
        );
        $CI->load->database();
        $CI->db->insert('sent_sms_log', $form_data);
    }
}