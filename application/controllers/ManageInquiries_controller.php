<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class ManageInquiries_controller extends CI_Controller{
	function __construct(){
		parent::__construct();

		//Load the model of manage_inquiries
		$this->load->model('ManageInquiries_model');
		 $this->load->model('Tag_Model');

		
	}

	public function index()
	{

		$this->data['following'] = $this->ManageInquiries_model->getAllFollowing();
		$this->data['posts'] = $this->ManageInquiries_model->getPostsHigh();
		
		//$this->data['posts'] = $this->manageInquiries_model->getPostsHigh();
		//$this->load->view('manageInquiries_view', $this->data);

		$this->data['posts1'] = $this->ManageInquiries_model->getPostsMedium();
		$this->data['posts2'] = $this->ManageInquiries_model->getPostsLow();
		$this->data['posts3'] = $this->ManageInquiries_model->getPending();
		$this->data['posts4'] = $this->ManageInquiries_model->getCompleted();
		$this->load->view('manageInquiries_view', $this->data);
	}

	public function tagindex($tagid,$tag){

		$_SESSION["tagsearch"]=$tag;
		$this->data['following'] = $this->ManageInquiries_model->getAllFollowing();
		$this->data['posts'] = $this->ManageInquiries_model->getPostsHigh();
		
		//$this->data['posts'] = $this->manageInquiries_model->getPostsHigh();
		//$this->load->view('manageInquiries_view', $this->data);

		$this->data['posts1'] = $this->ManageInquiries_model->getPostsMedium();
		$this->data['posts2'] = $this->ManageInquiries_model->getPostsLow();
		$this->data['posts3'] = $this->ManageInquiries_model->getPending();
		$this->data['posts4'] = $this->ManageInquiries_model->getCompleted();

		$this->data["tagstudent"]=$this->Tag_Model->getTagStudents($tagid);

		$this->load->view('manageInquiries_view', $this->data);

	}
	public function programmeindex($programme){

		if($programme==1){
			$programme="BSC(Hons) Computing";
		}elseif($programme==2){
			$programme="BA(Hons) Business Studies";
		}elseif($programme==3){
			$programme="BA(Hons) Business & Marketing";
		}elseif($programme==4){
			$programme="BA(Hons) International Business";
		}elseif($programme==5){
			$programme="BA(Hons) Accounting & Finance";
		}elseif($programme==6){
			$programme="Higher National Diploma in Business";
		}elseif($programme==7){
			$programme="Higher National Diploma in Computer Science";
		}elseif($programme==8){
			$programme="Foundation";
		}elseif($programme==9){
			$programme="Other";
		}elseif($programme==10){
			$programme="MBA";
		}

		$_SESSION["programmestudents"]=$programme;
		$this->data['following'] = $this->ManageInquiries_model->getAllFollowing();
		$this->data['posts'] = $this->ManageInquiries_model->getPostsHigh();
		
		//$this->data['posts'] = $this->manageInquiries_model->getPostsHigh();
		//$this->load->view('manageInquiries_view', $this->data);

		$this->data['posts1'] = $this->ManageInquiries_model->getPostsMedium();
		$this->data['posts2'] = $this->ManageInquiries_model->getPostsLow();
		$this->data['posts3'] = $this->ManageInquiries_model->getPending();
		$this->data['posts4'] = $this->ManageInquiries_model->getCompleted();

		$this->data["programmestudentsdata"]=$this->ManageInquiries_model->getProgrammeStudents($programme);

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
	alert("Your changes have been succesfully saved!");
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
	redirect("index.php/ManageInquiries_controller/index");
	}
	public function viewSummary($rid)
	{
		$data['summary']= $this->ManageInquiries_model->viewSummary($rid);
		$data['details'] = $this->ManageInquiries_model->viewStudentDetails($rid);
		//print_r($rid);
		$this->load->view('Summary_Timeline_View',$data);

	}





	   public function searchbyName(){
   	$skey = $this->input->post('skey');
$noresult="No Result";
 //  	echo "<script>".$skey."=encodeURI(".$skey.")</script>";
   	//echo "<script>alert(".$skey.")</script>";
   //	echo "<script>".$skey."=decodeURI(".$skey.")</script>";


//   	$searchkey = $this->input->post('search');
	$searchresult = $this->ManageInquiries_model->searchStudent($skey);


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
//	 	$tpnumber=urlencode($tpnumber);

if($status=="Pending"){

?>
<tr>
<td>
<?php
echo "<li><a href=".$base."index.php/EditRecordsPending_controller/index/".$str_id."><span class='fa fa-user'></span>&nbsp $name</a></li>";
	 	
	 	?>
</td>
</tr>

<?php
}elseif($status=="Following"){

?>
<tr>
<td>
<?php
echo "<li><a href=".$base."index.php/EditRecords_controller/index/".$str_id."><span class='fa fa-user'></span>&nbsp $name</a></li>";
	 	
	 	?>
</td>
</tr>

<?php
}elseif($status=="Completed"){
?>
<tr>
<td>
<?php
echo "<li><a href=".$base."index.php/ManageInquiries_controller/viewSummary/".$str_id."><span class='fa fa-user'></span>&nbsp $name</a></li>";	 	
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


//   	$searchkey = $this->input->post('search');
	$searchresult = $this->ManageInquiries_model->searchStudentbyNO($skey);


?>
<table >

<?php

foreach($searchresult as $sch){
	 	$base=base_url();
	 

?>

<?php
$name=$sch->Fname." ".$sch->Lname;
$str_id=$sch->r_id;
$status=$sch->Status;
//	 	$tpnumber=urlencode($tpnumber);

if($status=="Pending"){

?>
<tr>
<td>
<?php
echo "<li><a href=".$base."index.php/EditRecordsPending_controller/index/".$str_id."><span class='fa fa-user'></span>&nbsp $name</a></li>";
	 	
	 	?>
</td>
</tr>

<?php
}elseif($status=="Following"){

?>
<tr>
<td>
<?php
echo "<li><a href=".$base."index.php/EditRecords_controller/index/".$str_id."><span class='fa fa-user'></span>&nbsp $name</a></li>";
	 	
	 	?>
</td>
</tr>

<?php
}elseif($status=="Completed"){
?>
<tr>
<td>
<?php
echo "<li><a href=".$base."index.php/ManageInquiries_controller/viewSummary/".$str_id."><span class='fa fa-user'></span>&nbsp $name</a></li>";	 	
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