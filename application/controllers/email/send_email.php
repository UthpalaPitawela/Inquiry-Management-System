<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
require 'PHPMailerAutoload.php';

class Send_email extends CI_Controller {

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
            

        if($recipient!=""){

            $mail->addAddress($recipient);

            if (!$mail->send()) {
                return $mail->ErrorInfo;
            }else{
                print json_encode(array("status"=>"success","info"=>"Your message has been sent"));
                
            }
            
        }else{
            $this->load->model('Campaign_model','campaign_model');
            $result = $this->campaign_model->select_bulkEmail($campaign_id);
            $sent = array('campaign'=>$campaign);
            
            foreach ($result as $row) {
                $mail->addAddress($row->Email);
                
                if (!$mail->send()) {
                    $sent['error'] = "Mailer Error : ". $mail->ErrorInfo ;
                    $sent[$row->r_id] = '0';
                    break; //Abandon sending
                } else {
                    $sent[$row->r_id] = '1';
                }
                // Clear all addresses and attachments for next loop
                $mail->clearAddresses();
                $mail->clearAttachments(); 
            } 
            print json_encode($sent);

        }
       

        
	}



}

?>