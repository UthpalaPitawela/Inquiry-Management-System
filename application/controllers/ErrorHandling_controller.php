<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class ErrorHandling_controller extends CI_Controller{
	function __construct(){
		parent::__construct();

		//Load the model of manage_inquiries
		
	}

	public function push404()
	{
		 
        // $this->load->view('Admission_Officer_Student_list',$data);


		$this->load->view('error_page_404');


	}


}


?>