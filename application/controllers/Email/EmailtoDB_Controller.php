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
		//redirect("AddStudentAcc_controller/index");
//redirect("index.php/Page_Controller/loadingpages/admission_officer_student_list");

}


public function send($subject,$to,$content){ 




	
       $recipient ="randhajapvt@gmail.com";
       $subject = 'subj';
       $message = 'message';
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

<script type="text/javascript">
	alert("kk");
</script>

<?php
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {

    echo 'Message has been sent';

    redirect("index.php/Page_Controller/loadingpages/admission_officer_student_list");

}














        
	}


}



