<?php
 class Student_Data_Controller extends CI_Controller{


function __construct() {

parent::__construct();
$this->load->model("Results_model");
$this->load->model("Student_Data_Model");
 $this->load->helper('url_helper');


}
 	public function index(){
 		
 		

 	}


    public function loadingdetails(){
        $student_id=$this->uri->segment(3);
        
   
 $s_data['current_results'] = $this->Results_model->load_results($student_id);
 $s_data['profile_data'] = $this->Student_Data_Model->get_User_Data($student_id);

 print $this->load->view('studentfor_admission_officer',$s_data,true);


   }

 }
?>