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
			
	 		$campaign_name = $this->input->post('name');
	 		$date = $this->input->post('date');
	 		$type = $this->input->post('type');
	 		$status = $this->input->post('status'); 
			
			/*
			$campaign_name = "camp14";
	 		$date = "2016-17-31";
	 		$type = "Walk-in";
	 		$status = ''; */


	 		// create new campaign
			$campaign = array ('campaign_name' => $campaign_name, 'date'=> $date, 'inquiry'=>$type, 'status'=> $status);
			$this->Campaign_model->insert_newCampaign($campaign);

			// get id of the new campaign
			$id = $this->Campaign_model->get_id($campaign_name); 
			//$id = "61";
			$updated = $this->Campaign_model->update_id($id,$campaign);
			if($updated){
				print json_encode(array("status"=>"success","info"=>"Campaign created successfully..","id"=>$id));
			}else{
				print json_encode(array("status"=>"fail","info"=>"No such selection found. Try Agian"));
			}
			
			   
	}



	public function send_campaign($id){
		$this->data['campaign'] = $this->Campaign_model->get_camp($id);
		$this->load->view('send_campaign_view',$this->data);
	}
	
}

?>
