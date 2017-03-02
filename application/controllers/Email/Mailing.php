<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
require 'PHPMailerAutoload.php';

class Mailing extends CI_Controller {

	public function send(){ 
       $campaign = $this->input->post('camp');
       $campaign_id = $this->input->post('id');
       $recipient = $this->input->post('recp');
       $subject = $this->input->post('subj');
       $message = $this->input->post('message');
       /*
       $campaign = 'camp1';
       $campaign_id = '1';
       $recipient = '';
       $subject = "regarding lecs";
       $message = "lectures have been postponed"; */

        $mail = new PHPMailer;
        $mail->SMTPDebug = 0;                  
        $mail->isSMTP();                                   
        $mail->Host = 'smtp.gmail.com;';  
        $mail->SMTPAuth = true;
        $mail->SMTPKeepAlive = true; // SMTP connection will not close after each email sent, reduces SMTP overhead                             
        $mail->Username = 'edulinkims@gmail.com';              
        $mail->Password = 'edulinkims@123';                       
        $mail->SMTPSecure = 'tls';                        
        $mail->Port = 25;

        $mail->setFrom('edulinkims@gmail.com', 'Edulink');
        
        $mail->Subject = $subject;
        $mail->Body = $message;
            

        if(!$mail->send()) {
          echo 'Message could not be sent.';
          echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
          echo 'Message has been sent';
        }
       

        
	}



}

?>





<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                              

$mail->isSMTP();                                      
$mail->Host = 'smtp.gmail.com;';  
$mail->SMTPAuth = true;                             
$mail->Username = '';                 // SMTP username
$mail->Password = '';                 // SMTP password
$mail->SMTPSecure = 'tls';                           
$mail->Port = 587;                                    

$mail->setFrom('from@example.com', 'Mailer');
$mail->addAddress('asyouwish055@gmail.com', 'Joe User');     // Add a recipient
$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}