<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shoutout extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->load->library('javascript');
	  	$this->load->library('form_validation');
	  	$this->load->helper('url');                    
	    $this->load->model('Campaign_model','campaign_model');
	}

	public function index(){
		$this->load->view('shoutout_view');
	}


	public function evaluate_campaign(){
	 if(isset($_POST["evaluate"]))
	  {
	      $filename=$_FILES["file"]["tmp_name"];
	      if($_FILES["file"]["size"] > 0)
	        {
	          $file = fopen($filename, "r");
	           while (($importdata = fgetcsv($file, 10000, ",")) !== FALSE)
		           {
		                  $data = array(
		                  	  'campaign_id' => $importdata[0],
		                      'name' => $importdata[1],
		                      'email' =>$importdata[2],
		                      'phone_number' => $importdata[3],
		                      'inquiry_date' => $this->input->post('inquiry_date'),
							  'type' => $this->input->post('inquiry_type'),
							  'course' => $this->input->post('course'),
							  'status' => $this->input->post('inquiry_status'),
						                      );
		           $insert_data = $this->campaign_model->insert_campaign($data);
		           }                    
	          fclose($file);
			$this->session->set_flashdata('message', 'Data inserted successfully..');
			redirect('shoutout/index');
	      }else{
			$this->session->set_flashdata('message', 'Something went wrong..');
			redirect('shoutout/index');
	    }
	  }
	 }

	

}
