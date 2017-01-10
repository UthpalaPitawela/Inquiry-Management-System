<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Database extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();

	    $this->load->library('javascript');
	    $this->load->library('javascript/jquery'); 
	   	$this->load->helper('url');                    
	    $this->load->model('Database_Model','db_model');
	}

	public function index(){
		$this->load->view('database_view');
	}

	public function bulk_input(){
		if(isset($_POST["create_bulk"]))
	 	{	

	 		$bulk_name = $this->input->post('bulk_name');
	 		$bulk_date = $this->input->post('bulk_date');
	 		
	 		if($bulk_name!=NULL and $bulk_date!=NULL)
	 		{	
	 			
	 			// check for bulk input
				$filename=$_FILES["file"]["tmp_name"];
	      		if($_FILES["file"]["size"] > 0)
	        	{
	          		$file = fopen($filename, "r");
	          		
		            while (($importdata = fgetcsv($file, 10000, ",")) !== FALSE)
			           {
			                $data = array(
			                      'name' => $importdata[0],
			                      'email' =>$importdata[1],
			                      'phone_number' => $importdata[2],
			                      'bulk_name' => $bulk_name,
			                      'date' => $bulk_date,
							                      );


			           		$insert_bulkData = $this->db_model->insert_bulkInput($data);
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
}


?>