<?php
 class Page_Controller extends CI_Controller{


function __construct() {

parent::__construct();
$this->load->model("Results_model");
$this->load->model("Student_Data_Model");
 $this->load->helper('url_helper');

    $this->load->model("Login_Model");


}
 	public function index(){
 		
 		

 	}


    public function loadingpages(){
        $page=$this->uri->segment(3);
        $user_Id= $_SESSION["user_ID"];


        if($page=='uploadresults'){
      
 

        
         $data['current_results'] = $this->Results_model->load_results($user_Id);
         $this->load->view('uploadresults',$data);
}elseif ($page=='contact') {

    $this->load->view('contact');
}elseif ($page=='home') {


$data['programme'] = $this->Login_Model->getCourses($user_Id);

                    $this->load->view('home',$data);

}elseif ($page=='logout') {

    $this->load->view('login_view');

}elseif($page=='student_profile'){
   

         $data['profile_data'] = $this->Student_Data_Model->get_User_Data($user_Id);
         $this->load->view('student_profile_data',$data);

}elseif($page=='admission_officer'){
   
        $this->load->view('admission_officer');
}elseif($page=='admission_officer_student_list'){

       $data['admissionstudent'] = $this->Student_Data_Model->get_Student_Data($user_Id);
   
        $this->load->view('Admission_Officer_Student_list',$data);
}elseif($page=='managerhome'){

    $this->load->view('manager_profile');

}elseif($page=='mailview'){

 $this->load->view('mailview',true);

}

             }

 	public function validate_user(){
 		//$username = $this->input->post('username');
    	//$password = $this->input->post('password');


    	//if ($result) {
    	//	$this->load->view('home');
            //echo "eeeee";
        	/*$data = array(
            	'is_logged' => true,
            	'username' => $this->input->post('username')
        	);  

        	$this->session->set_userdata($data);*/

//    	} else {
  //  		echo "vwrv";
        	/*$this->form_validation->set_message('validate_user', $this->lang->line('error_login'));
        return false;*/
    //}
 	}
 }
?>