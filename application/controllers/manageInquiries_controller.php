<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class manageInquiries_controller extends CI_Controller{
	function __construct(){
		parent::__construct();

		//Load the model of manage_inquiries
		$this->load->model('manageInquiries_model');
		
	}

	public function index()
	{
		$this->data['posts'] = $this->manageInquiries_model->getPostsHigh();
		$this->load->view('manageInquiries_view', $this->data);

		$this->data['posts1'] = $this->manageInquiries_model->getPostsMedium();
		$this->load->view('manageInquiries_view', $this->data);
	}

}


?>