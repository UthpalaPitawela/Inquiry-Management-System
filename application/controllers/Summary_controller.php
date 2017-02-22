<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Summary_controller extends CI_Controller{
	function __construct(){
		parent::__construct();

		//Load the model of manage_inquiries
		$this->load->model('Summary_model');
		
	}

	public function summary($r_id)
	{
		$id = urldecode($r_id);
		$this->load->view('summary_view',$id);
	}

	 
	
	//Updating the call summary
	public function updateCallSummary()
	{

		$call = $this->input->post('summary1');
		$regid = $this->input->post('regid');
		$date = $this->input->post('date');
		$call_count = $this->input->post('call_count');
			

		$this->Summary_model->updateCallSummary($call,$regid,$date,$call_count);
		redirect("index.php/EditRecords_controller/index/$regid");
	}

	public function updateSmsSummary()
	{

		$sms = $this->input->post('sms1');
		$regid = $this->input->post('regid');
		$date = $this->input->post('date');
		$sms_count = $this->input->post('sms_count');
			

		$this->Summary_model->updateSmsSummary($sms,$regid,$date,$sms_count);
		redirect("index.php/EditRecords_controller/index/$regid");
	}

	public function updateEmailSummary()
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

		$other = $this->input->post('other');
		$regid = $this->input->post('regid');
		$date = $this->input->post('date');
		//$email_count = $this->input->post('email_count');
			

		$this->Summary_model->updateOtherSummary($other,$regid,$date);
		redirect("index.php/EditRecords_controller/index/$regid");
	}
}

?>