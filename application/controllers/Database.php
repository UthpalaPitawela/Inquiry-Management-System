<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Database extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();

	    $this->load->library('javascript');
	    $this->load->library('javascript/jquery'); 
	   	$this->load->helper('url');                    
	    $this->load->model('Database_Model');
	}

	public function index(){
		$this->data['students'] = $this->Database_Model->get_students();		
		$this->load->view('database_view',$this->data);
		//$this->load->view('bulkUpload_view',$this->data);
	}

	public function bulk_input(){
		
		if(isset($_POST["create_bulk"]))
	 	{	

	 		$bulk_name = $this->input->post('bulk_name');
	 		$bulk_date = $this->input->post('bulk_date');
	 		$check_list = $this->input->post('check_list');
	 		
	 		
	 		$firstRow      = true;
	 		$columnArray    = array();
	 		
	 		if($bulk_name!=NULL and $bulk_date!=NULL)
	 		{	
	 			
	 			// check for bulk input
				$filename=$_FILES["file"]["tmp_name"];
	      		if($_FILES["file"]["size"] > 0)
	        	{
	          		$file = fopen($filename, "r");
	          		
		            while (($importdata = fgetcsv($file, 10000, ",")) !== FALSE)
			           {

			           		if($firstRow) {
						        foreach($importdata as $columnName) {
						            $columnArray[] = $columnName;
						        }

						        $firstRow = false;

						       

						    } else { 
						    	$data = array();  // array of data to be sent to the database
						    	for($i = 0; $i < count($columnArray) ; $i++){
						    		$data[$columnArray[$i]] = $importdata[$i];
						        }

						        $data['bulk_name'] = $bulk_name;
						        $data['bulk_date'] = $bulk_date;
						        $data['Inquiry'] = 'Bulk';

						        
						       

			           			$insert_bulkData = $this->Database_Model->insert_bulkInput($data); 


						    }
			           }                     
		            fclose($file); 

		            $this->data['students'] = $this->Database_Model->get_students();
		            $_SESSION["alert"]="uploadSuccess";
		            $this->load->view('database_view',$this->data);
		            
				}else{
					$this->data['students'] = $this->Database_Model->get_students();
					$_SESSION["alert"]="uploadFail";
					$this->load->view('database_view',$this->data);
					
		    	} 
		    }  
		}
	}


}


?>