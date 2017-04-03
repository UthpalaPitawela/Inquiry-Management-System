<?php
class Web_Inquiries_Controller extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Web_Inquiries_Model');

		
	}

	function index(){
		$data['result'] = $this->Web_Inquiries_Model->getUsers();
		$data['inquiries'] = $this->Web_Inquiries_Model->getInquiries();
		$this->load->view('Web_Inquiries',$data);
	}

	function assignInquiries(){
		$counsellorname = $this->input->get('counsellorname');
		$data = $this->input->get('result');
		$data = json_decode("$data",true);
		$this->Web_Inquiries_Model->updateInquiries($counsellorname,$data);
		
	}
}



?>