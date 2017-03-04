<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class AddStudentAcc_controller extends CI_Controller{
	function __construct(){
		parent::__construct();

		//Load the model of manage_inquiries
		$this->load->model('AddStudentAcc_model');
		$this->load->model("Student_Data_Model");
		
	}

	public function index()
	{
		  $user_Id= $_SESSION["user_ID"];


		$data['admissionstudent'] = $this->Student_Data_Model->get_Student_Data($user_Id);
   
        // $this->load->view('Admission_Officer_Student_list',$data);


		$this->load->view('addStudentAcc_view',$data);


	}

	public function addstudent()
	{
		//get form data to an array named $data
		$data = array(
			'user_name' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'firstname' => $this->input->post('firstname'),
			'lastname' => $this->input->post('lastname'),
			'email' => $this->input->post('email'),
			'dob' => $this->input->post('dob'),
			'tpnumber' => $this->input->post('contact'));

		//transferring data to model
		$this->AddStudentAcc_model->insertdata($data);

		redirect("AddStudentAcc_controller/index");
	}

	public function addstudentforadmissionofficer($Contactno,$emmail){
		
		
echo "<script type='text/javascript'>
	alert(".$emmail.");
</script>

";
//		redirect('index.php/ManageInquiries_controller/completedforadmissionofficer');

		$Contactno=urldecode($Contactno); 
		$emmail=urldecode($emmail); 

		$this->AddStudentAcc_model->insertdatabyadmissionofficer($Contactno);


		 $this->load->library('../controllers/Email/EmailtoDB_Controller.php');

		?>
		
		<?php


		 $content='<p><span style="font-size: 18px; font-weight: bold;">Congratulations  '.$emmail.' !</span></p><p>Your Account for <span style="font-weight: bold; font-size: 14px; background-color: rgb(206, 198, 206);">Edulink</span> has been created and now you can login to <span style="text-decoration: underline;">enter your exam results to prove the validity of the data you provided</span>.<br><br><span style="font-weight: bold;">Login details:</span></p><p><span style="font-weight: bold;">Username: </span>'.$Contactno.'</p><p><span style="font-weight: bold;">Password: &nbsp; </span>edulink@123</p><p>You can change your password once you log in to your account.<br>Feel free to contact us in any case of need.<br>Thanks.</p>';

		 $this->EmailtoDB_Controller->send("Your EDULINK Account Created",$emmail,$content);

	}

}


?>