<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shoutout extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();

	    $this->load->library('javascript');
	    $this->load->library('javascript/jquery'); 
	   	$this->load->helper('url');                    
	    $this->load->model('Campaign_model','campaign_model');
	}

	public function index(){
		$this->load->view('shoutout_view');
	}

	public function evaluate_campaign(){
		if(isset($_POST["evaluate"]))
	 	{	
	 		$campaign_name = $this->input->post('campaign_name');
	 		$date = $this->input->post('inquiry_date');
	 		$type = $this->input->post('inquiry_type');
	 		$course = $this->input->post('course');
	 		$status = $this->input->post('inquiry_status');

	 		if($campaign_name!=NULL and $date!=NULL)
	 		{
				if($type!="Select Type" or $course!="Select Course" or $status!="Select Status"){
						$campaign = array ('campaign_name' => $campaign_name, 'date'=> $date);
						$id = $this->campaign_model->get_id($campaign);

						$selection = array('id'=>$id);
						if($type!="Select Type"){
							$selection['type']=$type;
						}
						if($course!="Select Course"){
							$selection['course']=$course;
						}
						if($status!="Select Status"){
							$selection['status']=$status;
						}
						
						$insert_selectionData = $this->campaign_model->insert_selectionInput($selection);
						if($insert_selectionData){
							$this->session->set_flashdata('message', 'Campaign created successfully..');
							redirect('shoutout/index');
						}else{
							$this->session->set_flashdata('message', 'No students with such selection..');
							redirect('shoutout/index');
						}
						
			    }else{
					    $this->session->set_flashdata('message', 'Something went wrong..');
						redirect('shoutout/index');
			    }
			}else{
					echo "<script>
					alert('Enter Camapign Name');
					window.location.href='/CodeIgniter/index.php/shoutout/index';
					</script>";
			}
		}
	
	

	}
}

?>
