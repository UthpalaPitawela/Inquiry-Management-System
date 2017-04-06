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

	$tag_id = $this->input->post('tid');
	$userID = $this->input->post('userID');
	 //$tag_id=$this->uri->segment(3);
	  //$userID=$this->uri->segment(4);

	  $searchresult = $this->Tag_Model->AddTag($tag_id,$userID);
	  if($searchresult){
	  	 $alltags=$this->Tag_Model->getTags($userID);
//foreach($searchresult as $sch){
 foreach($alltags as $mytags){ echo"
                                            <input style=\"width:50px\" type='text' value='$mytags->tag'/>
                                                   <button type='button' onclick='removetag($userID,$mytags->tag_id)' class='btn btn-secondary button1'><i class='fa fa-times'></i></button>

                                            ";}





	   //redirect("index.php/EditRecords_controller/index/$userID");

	  }else{
	  	echo"cannot";

	  }


}
public function removetag(){
	
	$rid = $this->input->post('rid');

   $tagid=$this->input->post('tagid');
   	$searchresult = $this->Tag_Model->RemoveTag($rid,$tagid);


if($searchresult){
	  	 $alltags=$this->Tag_Model->getTags($rid);
//foreach($searchresult as $sch){
 foreach($alltags as $mytags){ echo"
                                            <input style=\"width:50px\" type='text' value='$mytags->tag'/>
                                                   <button type='button' onclick='removetag($rid,$mytags->tag_id)' class='btn btn-secondary button1'><i class='fa fa-times'></i></button>

                                            ";}





	   //redirect("index.php/EditRecords_controller/index/$userID");

	  }else{
	  	echo"cannot";

	  }
//   	echo "done";
                        // redirect("index.php/EditRecords_controller/index/$rid");


}

public function addnewTag(){

	 	$newtag = $this->input->post('newtag');

   $userID=$this->input->post('userID');
$searchresult = $this->Tag_Model->AddNewTag($newtag,$userID);



if($searchresult){
	  	 $alltags=$this->Tag_Model->getTags($userID);
//foreach($searchresult as $sch){
 foreach($alltags as $mytags){ echo"
                                            <input style=\"width:50px\" type='text' value='$mytags->tag'/>
                                                   <button type='button' onclick='removetag($userID,$mytags->tag_id)' class='btn btn-secondary button1'><i class='fa fa-times'></i></button>

                                            ";}





	   //redirect("index.php/EditRecords_controller/index/$userID");

	  }else{
	  	echo"cannot";

	  }




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
echo "<li><button type='button' onclick=addthetag(".$userID.",".$tag_id.")><span class='fa fa-tag'></span>&nbsp $sch->tag</button></li>";
// href=".$base."index.php/Tag_Controller/addTag/".$tag_id."/".$userID."><span class='fa fa-tag'></span>&nbsp $sch->tag</a></li>";
	 	
	 	?>
</td>
</tr>
<?php
}
?>
	
</table>
	 	



<?php           

        


   }




   public function searchTagforAll(){
   	$skey = $this->input->post('skey');

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

echo "<li style='width:100%;' ><a href=".$base."index.php/ManageInquiries_controller/tagindex/".$tag_id."/".$tag."><span class='fa fa-tag'></span>&nbsp $sch->tag</a></li>";

//echo "<li><a href=".$base."index.php/Tag_Controller/addTag/".$tag_id."/".$userID."><span class='fa fa-tag'></span>&nbsp $sch->tag</a></li>";
	 	
	 	?>
</td>
</tr>
<?php
}
?>
	
</table>
	 	



<?php           

        


   }


public function searchTagforAllCoun(){
   	$skey = $this->input->post('skey');

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

echo "<li style='width:100%;' ><a href=".$base."index.php/ManageInquiriesCoun_controller/tagindex/".$tag_id."/".$tag."><span class='fa fa-tag'></span>&nbsp $sch->tag</a></li>";

//echo "<li><a href=".$base."index.php/Tag_Controller/addTag/".$tag_id."/".$userID."><span class='fa fa-tag'></span>&nbsp $sch->tag</a></li>";
	 	
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