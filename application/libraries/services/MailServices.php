<?php
/**
 * All Services Regarding Mail Bodies and Header For A Mail
 *
 * @author satish
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class MailServices {
    
    /*
     * Function To Return Body For Subscriber On Successfull Subscription
     */
    public static function getBodyForSuccessfulSubscriptionForUser($to){
        $body = "<html><head><title>Thanks For Subscribing Our Newsletter</title></head><body>";
        $body .= "<p>Dear <b>".$to."</b></p>";
        $body .= "<p>Thanks for showing your interest with us! We have received and confirmed your subscription request successfully.<br>";
        $body .= "You will be notified every time we release a newsletter or post a blog.</p>";
        $body .= "<p>You can also write us at <b>odc.markham@gmail.com</b>.</p>";
        $body .= "<p>This is a system generated E-Mail, so do not reply.</p>";
        $body .= "<img src='http://www.odcmarkham.com/assets/img/logo.png' width='90em;height:30em;'>";
        $body .= "<h4>Thanks & Regards</h4>";
        $body .= "Odcmarkham Team<br>";
        $body .= "Call Us:905-294-4880<br>";
        $body .= "Write To Us At: <a href='mailto:odc.markham@gmail.com>odc.markham@gmail.com</a><br>";
        $body .= "For More Info: <a href='http://www.odcmarkham.com' target='_blank'>Click Here</a>";
        return $body;
    }
    
    /*
     * Function To Return Body For Admin On Successfull Subscription By Any User For Intimation
     */
    public static function getBodyForSuccessfulSubscriptionForAdmin($adminName,$subscriberMail){
        $body = "<html><head><title>New Subscription On Website</title></head><body>";
        $body .= "<p>Dear <b>".$adminName."</b></p>";
        $body .= "<p>A user with mail ".$subscriberMail." has newly subscribed for newsletter updates on website.<br>";
        $body .= "He/She will be notified each time a new blog is posted on site.</p>";
        $body .= "<p>For any kind of action please login to your admin panel.</b>.</p>";
        $body .= "<p>This is a system generated E-Mail, so do not reply.</p>";
        $body .= "<img src='http://www.odcmarkham.com/assets/img/logo.png' width='50em'>";
        $body .= "<h4>Thanks & Regards</h4>";
        $body .= "odcmarkham Team<br>";
        $body .= "Call Us: +91- 905-294-4880<br>";
        $body .= "Write To Us At: <a href='odc.markham@gmail.com?Subject=Regarding Query/Feedback/Suggestion'>odc.markham@gmail.com</a><br>";
        $body .= "For More Info: <a href='http://www.odcmarkham.com' target='_blank'>Click Here</a>";
        return $body;
    }
    
    /*
     * Returns Body For User's Mail Body On Contact Form Submission
     */
    public static function getBodyForUserOnContactFormSubmission($user){
        $body = "<html><head><title>Thanks For Contacting Us</title></head><body>";
        $body .= "<p>Dear <b>".$user."</b></p>";
        $body .= "<p>Thanks for showing your interest with us! We are reviewing your query and will get back to you shortly.<br>";
        $body .= "Meanwhile if your query is urgent you can call us on +91-905-294-4880.</p>";
        $body .= "<p>You can also write us at <b>odc.markham@gmail.com</b>.</p>";
        $body .= "<p>This is a system generated E-Mail, so do not reply.</p>";
        $body .= "<img src='http://www.odcmarkham.com/assets/img/logo.png' width='50em'>";
        $body .= "<h4>Thanks & Regards</h4>";
        $body .= "Odcmarkham Team<br>";
        $body .= "Call Us: +91-905-294-4880<br>";
        $body .= "Write To Us At: <a href='odc.markham@gmail.com?Subject=Regarding Your Query/Feedback/Suggestion'>odc.markham@gmail.com</a><br>";
        $body .= "For More Info: <a href='http://www.odcmarkham.com' target='_blank'>Click Here</a>";
        return $body;
    }
    
    /*
     * Returns Body For Admin Mail Body On Contact Form Submission By A User
     */
    public static function getBodyForAdminOnContactFormSubmission($adminName, $userName, $userEmail, $userMobile, $messageSubject, $messageContents){
        $body = "<html><head><title>".$userName." Tried Contacting From Website</title></head><body>";
        $body .= "<p>Dear Admin <b>".$adminName."</b></p>";
        $body .= "<p>A new message has been submitted by a user named ".$userName."<br>";
        $body .= "User has been sent a revert back mail and SMS. Please login to admin panel or see user's submissions below to review the query.</p>";
        $body .= "<p>For immediate contact to user call on <b>".$userMobile."</b> or write to him/her at <b>".$userEmail."</b>.</p>";
        $body .= "<p>The submission of the user is as below:</p>";
        $body .= "<b>Subject : </b><b><i>".$messageSubject."</i></b><br>";
        $body .= "<b>Message : </b><b><i>".$messageContents."</i></b>";
        $body .= "<p>This is a system generated E-Mail, so do not reply.</p>";
        $body .= "<img src='http://www.odcmarkham.com/assets/img/logo.png' width='50em'>";
        $body .= "<h4>Thanks & Regards</h4>";
        $body .= "Odcmarkham Team<br>";
        $body .= "Call To User At: ".$userMobile."<br>";
        $body .= "Reply To User At: <a href='".$userEmail."?Subject=Query/Interest Reply From Odcmarkham'>".$userEmail."</a><br>";
        return $body;
    }
        
    /*
     * Returns Mail Header For Normal Case
     */
    public static function getMailHederForNormalCase(){
        $headers  = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: Odcmarkham <no-reply@ghoombikes.com>' . "\r\n";
        $headers .= 'Reply-To: <no-reply@ghoombikes.com>' . "\r\n";
        return $headers;
    }
}
