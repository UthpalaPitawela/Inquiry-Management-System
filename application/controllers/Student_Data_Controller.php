<?php
 class Student_Data_Controller extends CI_Controller{


function __construct() {

parent::__construct();
$this->load->model("Results_model");
$this->load->model("Student_Data_Model");
 $this->load->helper('url_helper');


}
 	public function index(){
 		
 		

 	}


    public function loadingdetails($student_id){

        //$student_id=$this->uri->segment(3);
$student_id=urldecode($student_id);     
 $s_data['current_results'] = $this->Results_model->load_results($student_id);
 $s_data['profile_data'] = $this->Student_Data_Model->get_individual_Student_Data($student_id);
 $s_data['admissionstudent'] = $this->Student_Data_Model->get_Student_Data($student_id);

$this->load->view('studentfor_admission_officer',$s_data);


   }

   public function loadingdetailsformanager($student_id){

        //$student_id=$this->uri->segment(3);
$student_id=urldecode($student_id);     
 $s_data['current_results'] = $this->Results_model->load_results($student_id);
 $s_data['profile_data'] = $this->Student_Data_Model->get_individual_Student_Data($student_id);
 $s_data['admissionstudent'] = $this->Student_Data_Model->get_Student_Data($student_id);

 $this->load->view('studentfor_manager',$s_data);


   }


   public function searchStudentformanager($skey){
   	
 //  	echo "<script>".$skey."=encodeURI(".$skey.")</script>";
   	//echo "<script>alert(".$skey.")</script>";
   //	echo "<script>".$skey."=decodeURI(".$skey.")</script>";


//   	$searchkey = $this->input->post('search');
	$searchresult = $this->Student_Data_Model->searchStudent($skey);


?>
<table class="table datatable">

<?php

foreach($searchresult as $sch){
	 	$base=base_url();
	 

?>
<tr>
<?php
$email=$sch->email;
	 	$email=urlencode($email);

?>
<td>
<?php
echo "<li><a id='studentmanager' href=".$base."index.php/Student_Data_Controller/loadingdetailsformanager/".$email."><span class='fa fa-user'></span>&nbsp $sch->firstname</a></li>";
	 	
	 	?>
</td>
</tr>
<?php
}
?>
	
</table>
	 	



<?php           

        


   }





   public function searchStudent($skey){
   	
 //  	echo "<script>".$skey."=encodeURI(".$skey.")</script>";
   	//echo "<script>alert(".$skey.")</script>";
   //	echo "<script>".$skey."=decodeURI(".$skey.")</script>";


//   	$searchkey = $this->input->post('search');
	$searchresult = $this->Student_Data_Model->searchStudent($skey);


?>
<table class="table datatable">

<?php

foreach($searchresult as $sch){
	 	$base=base_url();
	 

?>
<tr>
<?php
$email=$sch->email;
	 	$email=urlencode($email);

?>
<td>
<?php
echo "<li><a href=".$base."index.php/Student_Data_Controller/loadingdetails/".$email."><span class='fa fa-user'></span>&nbsp $sch->firstname</a></li>";
	 	
	 	?>
</td>
</tr>
<?php
}
?>
	
</table>
	 	



<?php           

        


   }

 }
?>