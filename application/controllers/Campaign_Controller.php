<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campaign_Controller extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();

	    $this->load->library('javascript');
	    $this->load->library('javascript/jquery');                  
	    $this->load->model('Campaign_model');
	}

	public function index(){
		$this->data['campaigns'] = $this->Campaign_model->get_campaigns();
		$this->load->view('campaigns_view', $this->data);
	}

	public function get_campaignDetails(){
		$id = $this->input->post('id');
		$this->data['students'] = $this->Campaign_model->get_campaignStudents($id);
		print json_encode($this->data);
	}

	public function evaluate_campaign(){


	 		$campaign_name = $this->input->post('campaign_name');
	 		$date = $this->input->post('inquiry_date');
	 		$type = $this->input->post('inquiry_type');
	 		$course = $this->input->post('course');
	 		$status = $this->input->post('inquiry_status');

	 		if ($type!=="Select Type" || $course!=="Select Course" || $status!=="Select Status"){
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
			}
						
			$insert_selectionData = $this->campaign_model->insert_selectionInput($selection);


			
			if($insert_selectionData){
				print json_encode(array("status"=>"success","info"=>"Campaign created successfully..","campaign"=>$campaign_name));
			}

			

			   
	}

	public function send_campaign(){
		$this->load->view('send_campaign_view');
	}
	
}

?>
