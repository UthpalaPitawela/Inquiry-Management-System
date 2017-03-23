<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Profile_controller extends CI_Controller{
	function __construct(){
		parent::__construct();

		//Load the model of targets
		$this->load->model('profile_model');
		
	}

	public function index()
	{
		$user_ID = $_SESSION["user_ID"];
		//echo $user_ID;
		 $data['posts'] = $this->profile_model->getData($user_ID);
		 $this->load->view('profile_view',$data);
		//$this->load->view('profile_view');
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
	            ?>
	            <script type="text/javascript">
	            	$.alert.open('info', 'Lorem ipsum dolor sit amet');
	            </script>
	            <?php
	        }
	        
	    }
	    $this->load->view('profile_view',$photo);

        //redirect("index.php/profile_controller/index");
	}

	public function getuserData()
	{
		$user_ID = $_SESSION("user_ID");
		$data['posts'] = $this->profile_model->getData($user_ID);
		$this->load->view('profile_view',$data);
	}

	public function changeDetails()
	{
		//$user_ID = $_SESSION("user_ID");
		//get form data to an array named $data
		
			$id =  $this->input->post('id');
			$email =  $this->input->post('username');
			$dob =  $this->input->post('password');
			$tpnumber = $this->input->post('TP');
			

		//transferring data to model
		
		$res = $this->profile_model->changeDetails($id,$email, $dob, $tpnumber);

		if($res==1){
            $_SESSION["alert1"]="insertsuccess";

        }else{
            $_SESSION["alert1"]="notsuccess";

        }


		redirect("index.php/profile_controller");
	}
	


}




?>