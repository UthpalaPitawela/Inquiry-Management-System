<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class ManageInquiries_controller extends CI_Controller{
	function __construct(){
		parent::__construct();

		//Load the model of manage_inquiries
		$this->load->model('ManageInquiries_model');
		
	}

	public function index()
	{
		$this->data['posts'] = $this->ManageInquiries_model->getPostsHigh();
		//$this->data['posts'] = $this->manageInquiries_model->getPostsHigh();
		//$this->load->view('manageInquiries_view', $this->data);

		$this->data['posts1'] = $this->ManageInquiries_model->getPostsMedium();
		$this->data['posts2'] = $this->ManageInquiries_model->getPostsLow();
		$this->data['posts3'] = $this->ManageInquiries_model->getPending();
		$this->data['posts4'] = $this->ManageInquiries_model->getCompleted();
		$this->load->view('manageInquiries_view', $this->data);
	}

	public function completedforadmissionofficer(){

		$this->data['posts4'] = $this->ManageInquiries_model->getCompletedforadmissionofficer();
		$this->load->view('completedforadmissionofficer', $this->data);	
	}

	//Making the pending entry editable
	public function updateChanges(){
?>

<script type="text/javascript">
	alert("haha");
</script>

<?php
		$id = $this->input->post('rid');
		$data = array(
			
			'Fname' => $this->input->post('Fname'),
			'Lname' => $this->input->post('Lname'),
			'Email' => $this->input->post('Email'),
			'Intake' => $this->input->post('Intake'),
			'Pdate' => $this->input->post('Pdate'),
			'CounsellorName' => $this->input->post('CounsellorName'));

		//Transfering data to model
		$this->ManageInquiries_model->updateChanges($data,$id);

		//Go back to index after inserting
	redirect("index.php/ManageInquiries_controller");
	}
}

?>