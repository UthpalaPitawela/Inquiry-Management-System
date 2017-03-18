<?php
 class Tag_Controller extends CI_Controller{


function __construct() {

parent::__construct();

$this->load->model("Tag_Model");
 $this->load->helper('url_helper');


}
 	public function index(){
 		
 		

 	}
public function addTag(){
	 $tag_id=$this->uri->segment(3);
	  $userID=$this->uri->segment(4);

	  $searchresult = $this->Tag_Model->AddTag($tag_id,$userID);
	  if($searchresult){
	   redirect("index.php/EditRecords_controller/index/$userID");

	  }else{
	  	echo"baa";

	  }


}
public function removetag(){
	
	$rid = $this->input->post('rid');

   $tagid=$this->input->post('tagid');
   	$searchresult = $this->Tag_Model->RemoveTag($rid,$tagid);
//   	echo "done";
                         redirect("index.php/EditRecords_controller/index/$rid");


}

public function addnewTag(){

	 	$newtag = $this->input->post('newtag');

   $userID=$this->input->post('userID');
$searchresult = $this->Tag_Model->AddNewTag($newtag,$userID);
}

   public function searchTag(){
   	$skey = $this->input->post('skey');

   $userID=$this->input->post('userID');

 //  	echo "<script>".$skey."=encodeURI(".$skey.")</script>";
   	//echo "<script>alert(".$skey.")</script>";
   //	echo "<script>".$skey."=decodeURI(".$skey.")</script>";


//   	$searchkey = $this->input->post('search');
	$searchresult = $this->Tag_Model->SearchTag($skey);


?>
<table >

<?php

foreach($searchresult as $sch){
	 	$base=base_url();
	 

?>
<tr>
<?php
$tag=$sch->tag;
$tag_id=$sch->tag_id;
//	 	$tpnumber=urlencode($tpnumber);

?>
<td>
<?php
echo "<li><a href=".$base."index.php/Tag_Controller/addTag/".$tag_id."/".$userID."><span class='fa fa-tag'></span>&nbsp $sch->tag</a></li>";
	 	
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