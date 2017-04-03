<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class ManageInquiriesCoun_controller extends CI_Controller{
	function __construct(){
		parent::__construct();

		//Load the model of manage_inquiries
		$this->load->model('ManageInquiriesCoun_model');
		$this->load->model('Tag_Model');	
	}

	public function index()
	{
		$counsellorname = $_SESSION["first_username"]." ".$_SESSION["last_username"];
		$this->data['posts'] = $this->ManageInquiriesCoun_model->getPostsHigh($counsellorname);
		$this->data['following'] = $this->ManageInquiriesCoun_model->getAllFollowing($counsellorname);
		//$this->data['posts'] = $this->manageInquiries_model->getPostsHigh();
		//$this->load->view('manageInquiries_view', $this->data);

		$this->data['posts1'] = $this->ManageInquiriesCoun_model->getPostsMedium($counsellorname);
		$this->data['posts2'] = $this->ManageInquiriesCoun_model->getPostsLow($counsellorname);
		$this->data['posts3'] = $this->ManageInquiriesCoun_model->getPending($counsellorname);
		$this->data['posts4'] = $this->ManageInquiriesCoun_model->getCompleted($counsellorname);
		$this->load->view('manageInquiriesCoun_view', $this->data);
	}

	public function tagindex($tagid,$tag){
$_SESSION["tagsearch"]=$tag;
		
		$counsellorname = $_SESSION["first_username"]." ".$_SESSION["last_username"];
		$this->data['posts'] = $this->ManageInquiriesCoun_model->getPostsHigh($counsellorname);
		$this->data['following'] = $this->ManageInquiriesCoun_model->getAllFollowing($counsellorname);
		//$this->data['posts'] = $this->manageInquiries_model->getPostsHigh();
		//$this->load->view('manageInquiries_view', $this->data);

		$this->data['posts1'] = $this->ManageInquiriesCoun_model->getPostsMedium($counsellorname);
		$this->data['posts2'] = $this->ManageInquiriesCoun_model->getPostsLow($counsellorname);
		$this->data['posts3'] = $this->ManageInquiriesCoun_model->getPending($counsellorname);
		$this->data['posts4'] = $this->ManageInquiriesCoun_model->getCompleted($counsellorname);

		$this->data["tagstudent"]=$this->Tag_Model->getTagStudentsCoun($tagid,$counsellorname);

		$this->load->view('manageInquiriesCoun_view', $this->data);

	}

	// public function completedforadmissionofficer(){

	// 	$this->data['posts4'] = $this->ManageInquiries_model->getCompletedforadmissionofficer();
	// 	$this->load->view('completedforadmissionofficer', $this->data);	
	// }

	//Making the pending entry editable
	public function updateChanges(){

		$id = $this->input->post('rid');
		$data = array(
			
			'Fname' => $this->input->post('Fname'),
			'Lname' => $this->input->post('Lname'),
			'Email' => $this->input->post('Email'),
			'Intake' => $this->input->post('Intake'),
			'Pdate' => $this->input->post('Pdate'));
	//		'CounsellorName' => $this->input->post('CounsellorName'));

		//Transfering data to model
		$this->ManageInquiriesCoun_model->updateChanges($data,$id);

		//Go back to index after inserting
	redirect("index.php/ManageInquiriesCoun_controller/index");
	}





	   public function searchbyName(){
   	$skey = $this->input->post('skey');
$noresult="No Result";
 //  	echo "<script>".$skey."=encodeURI(".$skey.")</script>";
   	//echo "<script>alert(".$skey.")</script>";
   //	echo "<script>".$skey."=decodeURI(".$skey.")</script>";
$counsellorname = $_SESSION["first_username"]." ".$_SESSION["last_username"];

//   	$searchkey = $this->input->post('search');

	$searchresult = $this->ManageInquiriesCoun_model->searchStudent($skey);


?>
<table >

<?php

foreach($searchresult as $sch){
	 	$base=base_url();
	 
$noresult="No Result";
?>

<?php
$name=$sch->Fname." ".$sch->Lname;
$str_id=$sch->r_id;
$status=$sch->Status;
$coun=$sch->CounsellorName;
//	 	$tpnumber=urlencode($tpnumber);

if($status=="Pending" && $coun==$counsellorname){

?>
<tr>
<td>
<?php
echo "<li><a href=".$base."index.php/EditRecordsPending_controller/index/".$str_id."><span class='fa fa-user'></span>&nbsp $name</a></li>";
	 	
	 	?>
</td>
</tr>

<?php
}elseif($status=="Following" && $coun==$counsellorname){

?>
<tr>
<td>
<?php
echo "<li><a href=".$base."index.php/EditRecords_controller/index/".$str_id."><span class='fa fa-user'></span>&nbsp $name</a></li>";
	 	
	 	?>
</td>
</tr>

<?php
}elseif($status=="Completed" && $coun==$counsellorname){
?>
<tr>
<td>
<?php
echo "<li><a href=".$base."index.php/ManageInquiries_Controller/viewSummary/".$str_id."><span class='fa fa-user'></span>&nbsp $name</a></li>";	 	
	 	?>
</td>
</tr>

<?php


}
}
?>
	
</table>
	 	



<?php           

        


   }



	   public function searchbyNo(){
   	$skey = $this->input->post('skey');

 //  	echo "<script>".$skey."=encodeURI(".$skey.")</script>";
   	//echo "<script>alert(".$skey.")</script>";
   //	echo "<script>".$skey."=decodeURI(".$skey.")</script>";
$counsellorname = $_SESSION["first_username"]." ".$_SESSION["last_username"];

//   	$searchkey = $this->input->post('search');
	$searchresult = $this->ManageInquiriesCoun_model->searchStudentbyNO($skey);
$noresult="No Result";

?>
<table >

<?php

foreach($searchresult as $sch){
	 	$base=base_url();
	 
$noresult="No Result";
?>

<?php
$name=$sch->Fname." ".$sch->Lname;
$str_id=$sch->r_id;
$status=$sch->Status;
$coun=$sch->CounsellorName;

//	 	$tpnumber=urlencode($tpnumber);

if($status=="Pending" && $coun==$counsellorname){

?>
<tr>
<td>
<?php
echo "<li><a href=".$base."index.php/EditRecordsPending_controller/index/".$str_id."><span class='fa fa-user'></span>&nbsp $name</a></li>";
	 	
	 	?>
</td>
</tr>

<?php
}elseif($status=="Following" && $coun==$counsellorname){

?>
<tr>
<td>
<?php
echo "<li><a href=".$base."index.php/EditRecords_controller/index/".$str_id."><span class='fa fa-user'></span>&nbsp $name</a></li>";
	 	
	 	?>
</td>
</tr>

<?php
}elseif($status=="Completed" && $coun==$counsellorname){
?>
<tr>
<td>
<?php
echo "<li><a href=".$base."index.php/ManageInquiries_Controller/viewSummary/".$str_id."><span class='fa fa-user'></span>&nbsp $name</a></li>";	 	
	 	?>
</td>
</tr>

<?php


}
}
?>
	
</table>
	 	



<?php           

        


   }


}

?>