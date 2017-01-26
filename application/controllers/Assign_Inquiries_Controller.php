<?php
class Assign_Inquiries_Controller extends CI_Controller{
	function __construct(){
		parent::__construct();

		//Load the model of assign_inquiries
		$this->load->model('Assign_Inquiries_Model');

		
	}

	function index(){
		$data['result'] = $this->Assign_Inquiries_Model->getUsers();
		$data['inquiries'] = $this->Assign_Inquiries_Model->getInquiries();
		$data['view_pending'] = $this->Assign_Inquiries_Model->viewPending();
		$data['view_following'] = $this->Assign_Inquiries_Model->viewFollowing();
		//print_r($data);
		$this->load->view('Assign_Inquiries',$data);
	}

	function assignInquiries(){
		$counsellorname = $this->input->get('counsellorname');
		$data = $this->input->get('result');
		$data = json_decode("$data",true);
		$this->Assign_Inquiries_Model->updateInquiries($counsellorname,$data);
		
	}


}



?>