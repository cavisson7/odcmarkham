<?php
/***************************************************
satish               *
 /***************************************************/


class SMSServices {
    
    public static function getSMSBodyForUserOnMessageSubmission($senderName){
        $body = 'Dear '.$senderName.', thanks for showing your interest with us!. We will revert to your query soon. If your query is urgent please call on +91-905-294-4880 or mail us at odc.markham@gmail.com. Thanks odcmarkham Team.';
        return $body;
    }
    
    public static function getBodyForMessageSendingAdmin($adminName,$senderName,$senderMobile){
        $body = 'Dear '.$adminName.', A user named '.$senderName.' has submitted a message on site. Please login to your admin panel to view the same. For immediate contact to user please call on '.$senderMobile.'. Thanks odcmarkham Team.';
        return $body;
    }
    
    
}