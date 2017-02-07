<?php
 class EmailtoDB_Controller extends CI_Controller{


function __construct() {

parent::__construct();
 $this->load->helper('url_helper');


}
 
public function index(){
 		
 		

 	}

public function offerletter(){
	$tp=$this->input->post('primarytp');
	$from=$this->input->post('sender');
	$subject=$this->input->post('subject');
	$to=$this->input->post('receivermail');
	$content = $this->input->post('content');
			$this->load->model('EmailtoDB_Model');
		$this->EmailtoDB_Model->insertofferletter($tp,$from,$subject,$to,$content);
redirect("index.php/Page_Controller/loadingpages/admission_officer_student_list");

}

}