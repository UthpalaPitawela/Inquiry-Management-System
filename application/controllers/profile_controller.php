<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class profile_controller extends CI_Controller{
	function __construct(){
		parent::__construct();

		//Load the model of targets
		$this->load->model('profile_model');
		
	}

	public function index()
	{
		
		$this->load->view('profile_view');
	}

	public function uploadpropic()
	{
		$done = $this->profile_model->addpropic();
		//echo "success";


	    $user = $_SESSION["user_id"];
	    $sql = "SELECT * from `user` where `u_id` ='$user'"; 
	    $res = $this->db->query($sql);
	    if (mysqli_num_rows($res)==1){
	        while ($row = mysqli_fetch_assoc($res)){
	            $photo = $row["profilepicture"];
	        }
	        
	    }
	    $this->load->view('profile_view',$photo);

		if($done){
        redirect("profile_controller/index");
    	}
	}

	


}




?>