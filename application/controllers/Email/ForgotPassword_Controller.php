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
            $value = $this->randomPassword();
            $pwrurl = "http://localhost/Inquiry-Management-System/index.php/reset/".$value.$data['uid'];
            //?q=".$password
            //;  
            $mail->Subject = 'Edulink Login Details';
            $mail->Body = "Dear user,\n\nYou have requested to reset the password. Your username is ".$data['uname']."\n\nTo reset your password, please click the link below. If you cannot click it, please paste it into your web browser's address bar.\n\n" . $pwrurl . "\n\nThanks,\nThe Administration";
            $recipient = $email;
            if($recipient!=""){
            $mail->addAddress($recipient);
            $result = $mail->send();
            if($result==1){
                            $_SESSION["alert2"]="insertsuccess";

                }else{
                            $_SESSION["alert2"]="notsuccess";

                     }

               redirect("index.php/Login_Controller/index");
               

            /*if (!$mail->send()) {
                //return $mail->ErrorInfo;
                print_r("hii");

            } else {
                print json_encode(array("status"=>"success","info"=>"Your message has been sent"));
                
            }*/
            
        }

        }
        

    }

    public function viewResetPw($uid){
        //echo $uid;  
       $userid = "";
        for($j=12;$j<strlen($uid);$j++){
            $userid = $userid.$uid[$j];

        }
        $data = array();
       $data['userid'] = $userid;
      /*  $data = array(
            
            'userid' => $userid);*/
           
        //echo $userid;
        $this->load->view('ResetPasswordView',$data);
    }

    
    function randomPassword() {
       $password_string = 'abcdefghijklmnpqrstuwxyzABCDEFGHJKLMNPQRSTUWXYZ23456789';
        $password = substr(str_shuffle($password_string), 0, 12);
    return $password;
}
    



}

?>