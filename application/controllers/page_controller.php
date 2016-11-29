<?php
 class Page_Controller extends CI_Controller{


function __construct() {

parent::__construct();
$this->load->model("Results_model");
 $this->load->helper('url_helper');


}
 	public function index(){
 		
 		

 	}

    public function loadingpages(){
        $page=$this->uri->segment(3);
        if($page=='uploadresults'){
      
 $user_Id=1001;

        
         $data['current_results'] = $this->Results_model->load_results($user_Id);
         $this->load->view('uploadresults',$data);
}elseif ($page=='contact') {
    
    $this->load->view('contact');
}elseif ($page=='home') {

    $this->load->view('home');
}elseif ($page=='logout') {

    $this->load->view('login_view');
}elseif($page=='student_profile'){
    $this->load->view('student_profile');
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