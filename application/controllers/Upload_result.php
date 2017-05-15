<?php
 class Upload_result extends CI_Controller{


function __construct() {

parent::__construct();
$this->load->model("Results_model");
 $this->load->helper('url_helper');


}
 	public function index(){
 		
 		

 	}

    public function insert_Result(){

$user_Id=$_SESSION["user_ID"];
 $name1 = $this->input->post('name1');
 if($name1==""){
    $name1="No File/No Name";
 }

 $name2 = $this->input->post('name2');
 if($name2==""){
    $name2="No File/No Name";
 }
 $name3 = $this->input->post('name3');
 
 if($name3==""){
    $name3="No File/No Name";
 }
 $name4 = $this->input->post('name4');
 
 if($name4==""){
    $name4="No File/No Name";
 }

 $name5 = $this->input->post('name5');
 if($name5==""){
    $name5="No File/No Name";
 }
 
 $name6 = $this->input->post('name6');
 if($name6==""){
    $name6="No File/No Name";
 }
 
 $name7 = $this->input->post('name7');
 if($name7==""){
    $name7="No File/No Name";
 }

 $name8 = $this->input->post('name8');
 if($name8==""){
    $name8="No File/No Name";
 }

 $name9 = $this->input->post('name9');
 if($name9==""){
    $name9="No File/No Name";
 }

 $name10 = $this->input->post('name10');
 if($name10==""){
    $name10="No File/No Name";
 }

    $res = $this->Results_model->insert_Result($user_Id,$name1,$name2,$name3,$name4,$name5,$name6,$name7,$name8,$name9,$name10);

     if($res==1){
   $_SESSION["alert"]="insertsuccess";


 }else{
 $_SESSION["alert"]="notsuccess";


 }



    if($res){
        ?>
        <script>
        window.location='<?php echo base_url("index.php/Page_Controller/loadingpages/uploadresults");?>'
        </script> 
        <?php
    }

//$data['current_results'] = $this->Results_model->load_results($user_Id);
    }

    public function delete_Result(){

 
$user_Id=$_SESSION["user_ID"];
    $res = $this->Results_model->delete_Result($user_Id);

     if($res==1){
   $_SESSION["alert"]="deletesuccess";


 }else{
 $_SESSION["alert"]="notsuccess";


 }


    if($res){
        ?>
        <script>
        window.location='<?php echo base_url("index.php/Page_Controller/loadingpages/uploadresults");?>'
        </script> 
        <?php
    }
//$data['current_results'] = $this->Results_model->load_results($user_Id);
    }


    public function update_Result(){

 $user_Id=$_SESSION["user_ID"];
 $name1 = $this->input->post('name1');
 if($name1==""){
    $name1="No File/No Name";
 }

 $name2 = $this->input->post('name2');
 if($name2==""){
    $name2="No File/No Name";
 }
 $name3 = $this->input->post('name3');
 
 if($name3==""){
    $name3="No File/No Name";
 }
 $name4 = $this->input->post('name4');
 
 if($name4==""){
    $name4="No File/No Name";
 }

 $name5 = $this->input->post('name5');
 if($name5==""){
    $name5="No File/No Name";
 }
 
 $name6 = $this->input->post('name6');
 if($name6==""){
    $name6="No File/No Name";
 }
 
 $name7 = $this->input->post('name7');
 if($name7==""){
    $name7="No File/No Name";
 }

 $name8 = $this->input->post('name8');
 if($name8==""){
    $name8="No File/No Name";
 }

 $name9 = $this->input->post('name9');
 if($name9==""){
    $name9="No File/No Name";
 }

 $name10 = $this->input->post('name10');
 if($name10==""){
    $name10="No File/No Name";
 }

    $res = $this->Results_model->update_Result($user_Id,$name1,$name2,$name3,$name4,$name5,$name6,$name7,$name8,$name9,$name10);
     if($res==true){
   $_SESSION["alert"]="insertsuccess";


 }else{
 $_SESSION["alert"]="notsuccess";


 }


 if($res){
        ?>
        <script>
        window.location='<?php echo base_url("index.php/Page_Controller/loadingpages/uploadresults");?>'
        </script> 
        <?php
    }


 }




 }
?>