<?php
require 'PHPMailerAutoload.php';
 class EmailtoDB_Controller extends CI_Controller{


function __construct() {

parent::__construct();
 $this->load->helper('url_helper');


}
 
public function index(){
 		
 		

 	}

public function offerletter(){

	$tp=$this->input->post('primarytp');
	$from=$this->input->post('sender');
	$subject=$this->input->post('subject');
	$to=$this->input->post('receivermail');
	$content = $this->input->post('content');
	
		$this->load->model('EmailtoDB_Model');
		$this->EmailtoDB_Model->insertofferletter($tp,$from,$subject,$to,$content);
		$this->send($subject,$to,$content);
		  redirect("index.php/Page_Controller/loadingpages/admission_officer_student_list");

		//redirect("AddStudentAcc_controller/index");
//redirect("index.php/Page_Controller/loadingpages/admission_officer_student_list");

}











	public function addstudentforadmissionofficer($Contactno,$email){
		
		
 
		$this->load->model('AddStudentAcc_model');


//		redirect('index.php/ManageInquiries_controller/completedforadmissionofficer');

		$Contactno=urldecode($Contactno); 
		$email=urldecode($email); 
?>

<?php
		$this->AddStudentAcc_model->insertdatabyadmissionofficer($Contactno);


		?>
		
		<?php


		 $content='<p><span style="font-size: 18px; font-weight: bold;">Congratulations  '.$email.' !</span></p><p>Your Account for <span style="font-weight: bold; font-size: 14px; background-color: rgb(206, 198, 206);">Edulink</span> has been created and now you can login to <span style="text-decoration: underline;">enter your exam results to prove the validity of the data you provided</span>.<br><br><span style="font-weight: bold;">Login details:</span></p><p><span style="font-weight: bold;">Username: </span>'.$Contactno.'</p><p><span style="font-weight: bold;">Password: &nbsp; </span>edulink@123</p><p>You can change your password once you log in to your account.<br>Feel free to contact us in any case of need.<br>Thanks.</p>';

		 $this->send("Your EDULINK Account Created",$email,$content);

	}



	public function Resend_addstudentforadmissionofficer($Contactno,$email){
		
		
 
//		$this->load->model('AddStudentAcc_model');


//		redirect('index.php/ManageInquiries_controller/completedforadmissionofficer');

		$Contactno=urldecode($Contactno); 
		$email=urldecode($email); 

//		$this->AddStudentAcc_model->insertdatabyadmissionofficer($Contactno);


		?>
		
		<?php

//$baseurl=echo base_url();
		 $content='<p><span style="font-size: 18px; font-weight: bold;">Congratulations  '.$email.' !</span></p><p>Your Account for <span style="font-weight: bold; font-size: 14px; background-color: rgb(206, 198, 206);">Edulink</span> has been created and now you can login to <span style="text-decoration: underline;">enter your exam results to prove the validity of the data you provided</span>.<br><br><span style="font-weight: bold;">Login details:</span></p><p><span style="font-weight: bold;">Username: </span>'.$Contactno.'</p><p><span style="font-weight: bold;">Password: &nbsp; </span>edulink@123</p>
		 <p>You can login to EDULINK using following link </p>
		 <p>You can change your password once you log in to your account.<br>Feel free to contact us in any case of need.<br>Thanks.</p>';

		 $this->send("Reminder: Your EDULINK Account Created",$email,$content);

	}











public function send($subject,$to,$content){ 



	
       /*
       $campaign = 'camp1';
       $campaign_id = '1';
       $recipient = '';
       $subject = "regarding lecs";
       $message = "lectures have been postponed"; */

      



$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                              

$mail->isSMTP();                                      
$mail->Host = 'smtp.gmail.com;';  
$mail->SMTPAuth = true;                             
$mail->Username = 'edulinkims@gmail.com';                 // SMTP username
$mail->Password = 'edulinkims@123';                 // SMTP password
$mail->SMTPSecure = 'tls';                           
$mail->Port = 587;                                    

$mail->setFrom('edulinkims@gmail.com', 'Edulink');    // Add a recipient
$mail->addAddress($to);               // Name is optional


//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body    = $content;
?>


<?php
if(!$mail->send()) {
    echo 'False';
  //  echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {

    echo 'True';

  
}














        
	}


}



