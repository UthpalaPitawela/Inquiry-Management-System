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
		//get form data to an array named $data
		$data = array(
			'email' => $this->input->post('username'),
			'dob' => $this->input->post('password'),
			'tpnumber' => $this->input->post('firstname'));
			

		//transferring data to model
		$this->profile_model->changeDetails($data);

		redirect("index.php/profile_controller");
	}
	


}




?>