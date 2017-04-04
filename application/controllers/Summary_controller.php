<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Summary_controller extends CI_Controller{
	function __construct(){
		parent::__construct();

		//Load the model of manage_inquiries
		$this->load->model('Summary_model');
		$this->load->model('Inquirybutton_model');
		
	}

	public function summary($r_id)
	{
		$id = urldecode($r_id);
		$this->load->view('summary_view',$id);
	}

	 
	
	//Updating the call summary
	public function updateCallSummary()
	{

		$regid = $this->input->post('regid');
        $this->Inquirybutton_model->following($regid);

		$call = $this->input->post('summary1');
		//$regid = $this->input->post('regid');
		$date = $this->input->post('date');
		$call_count = $this->input->post('call_count');
			

		$res1 = $this->Summary_model->updateCallSummary($call,$regid,$date,$call_count);

		if($res1==1){
            $_SESSION["alert3"]="insertsuccess";

        }else{
            $_SESSION["alert3"]="notsuccess";

        }
		redirect("index.php/ManageInquiries_controller#tab-second");
	}

	public function updateCallSummary2()
	{

		$regid = $this->input->post('regid');
        $this->Inquirybutton_model->following($regid);

		$call = $this->input->post('summary1');
		//$regid = $this->input->post('regid');
		$date = $this->input->post('date');
		$call_count = $this->input->post('call_count');
			

		$res1 = $this->Summary_model->updateCallSummary($call,$regid,$date,$call_count);

		if($res1==1){
            $_SESSION["alert3"]="insertsuccess";

        }else{
            $_SESSION["alert3"]="notsuccess";

        }
		redirect("index.php/ManageInquiriesCoun_controller");
	}

	public function updateCallSummary1()
	{

		$call = $this->input->post('summary1');
		$regid = $this->input->post('regid');
		$date = $this->input->post('date');
		$call_count = $this->input->post('call_count');
			

		$res1 = $this->Summary_model->updateCallSummary($call,$regid,$date,$call_count);

		if($res1==1){
            $_SESSION["alert3"]="insertsuccess";

        }else{
            $_SESSION["alert3"]="notsuccess";

        }
		redirect("index.php/EditRecords_controller/index/$regid");
	}

	public function updateSmsSummary()
	{

		$sms = $this->input->post('sms1');
		$regid = $this->input->post('regid');
		$date = $this->input->post('date');
		$sms_count = $this->input->post('sms_count');
			

		$res2=$this->Summary_model->updateSmsSummary($sms,$regid,$date,$sms_count);

		if($res2==1){
            $_SESSION["alert4"]="insertsuccess";

        }else{
            $_SESSION["alert4"]="notsuccess";

        }

		redirect("index.php/ManageInquiries_controller");
	}

	public function updateSmsSummary2()
	{

		$sms = $this->input->post('sms1');
		$regid = $this->input->post('regid');
		$date = $this->input->post('date');
		$sms_count = $this->input->post('sms_count');
			

		$res2=$this->Summary_model->updateSmsSummary($sms,$regid,$date,$sms_count);

		if($res2==1){
            $_SESSION["alert4"]="insertsuccess";

        }else{
            $_SESSION["alert4"]="notsuccess";

        }

		redirect("index.php/ManageInquiriesCoun_controller");
	}

	public function updateSmsSummary1()
	{

		$sms = $this->input->post('sms1');
		$regid = $this->input->post('regid');
		$date = $this->input->post('date');
		$sms_count = $this->input->post('sms_count');
			

		$res2=$this->Summary_model->updateSmsSummary($sms,$regid,$date,$sms_count);

		if($res2==1){
            $_SESSION["alert4"]="insertsuccess";

        }else{
            $_SESSION["alert4"]="notsuccess";

        }
		

		redirect("index.php/EditRecords_controller/index/$regid");
	}
 
	public function updateEmailSummary()
	{

		$regid = $this->input->post('regid');
        $this->Inquirybutton_model->following($regid);

		$email = $this->input->post('email1');
		//$regid = $this->input->post('regid');
		$date = $this->input->post('date');
		$email_count = $this->input->post('email_count');
			

		$this->Summary_model->updateEmailSummary($email,$regid,$date,$email_count);
		redirect("index.php/ManageInquiries_controller#tab-second");
	}

	public function updateEmailSummary2()
	{

		$regid = $this->input->post('regid');
        $this->Inquirybutton_model->following($regid);

		$email = $this->input->post('email1');
		//$regid = $this->input->post('regid');
		$date = $this->input->post('date');
		$email_count = $this->input->post('email_count');
			

		$this->Summary_model->updateEmailSummary($email,$regid,$date,$email_count);
		redirect("index.php/ManageInquiriesCoun_controller#tab-second");
	}

	public function updateEmailSummary1()
	{

		$email = $this->input->post('email1');
		$regid = $this->input->post('regid');
		$date = $this->input->post('date');
		$email_count = $this->input->post('email_count');
			

		$this->Summary_model->updateEmailSummary($email,$regid,$date,$email_count);
		redirect("index.php/EditRecords_controller/index/$regid");
	}

	public function updateOtherSummary()
	{

		$regid = $this->input->post('regid');
        $this->Inquirybutton_model->following($regid);

		$other = $this->input->post('other');
		//$regid = $this->input->post('regid');
		$date = $this->input->post('date');
		//$email_count = $this->input->post('email_count');
			

		$res3 = $this->Summary_model->updateOtherSummary($other,$regid,$date);

		if($res3==1){
            $_SESSION["alert5"]="insertsuccess";

        }else{
            $_SESSION["alert5"]="notsuccess";

        }
		redirect("index.php/ManageInquiries_controller#tab-second");
	}

	public function updateOtherSummary2()
	{

		$regid = $this->input->post('regid');
        $this->Inquirybutton_model->following($regid);

		$other = $this->input->post('other');
		//$regid = $this->input->post('regid');
		$date = $this->input->post('date');
		//$email_count = $this->input->post('email_count');
			

		$res = $this->Summary_model->updateOtherSummary($other,$regid,$date);

		if($res3==1){
            $_SESSION["alert5"]="insertsuccess";

        }else{
            $_SESSION["alert5"]="notsuccess";

        }

		redirect("index.php/ManageInquiriesCoun_controller#tab-second");
	}

	public function updateOtherSummary1()
	{

		$other = $this->input->post('other');
		$regid = $this->input->post('regid');
		$date = $this->input->post('date');
		//$email_count = $this->input->post('email_count');
			

		$res = $this->Summary_model->updateOtherSummary($other,$regid,$date);

		if($res3==1){
            $_SESSION["alert5"]="insertsuccess";

        }else{
            $_SESSION["alert5"]="notsuccess";

        }

		redirect("index.php/EditRecords_controller/index/$regid");
	}
}

?>