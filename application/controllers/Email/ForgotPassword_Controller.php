<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
require 'PHPMailerAutoload.php';

class ForgotPassword_Controller extends CI_Controller {

     public function sendPassword(){
       $email = $this->input->post('summary1');
        $this->load->model('Login_Model');
       $data = $this->Login_Model->verifyUser($email);
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
        
        
       if($data['status'] == '0'){

        }else{
            $mail->Subject = 'Edulink Login Details';
            $mail->Body = 'Your username is '.$data['uname'].'and password is '.$data['pword'];
            $recipient = $email;
            if($recipient!=""){
            $mail->addAddress($recipient);

            if (!$mail->send()) {
                //return $mail->ErrorInfo;
                print_r("hii");

            } else {
                print json_encode(array("status"=>"success","info"=>"Your message has been sent"));
                
            }
            
        }

        }
        

    }

	



}

?>