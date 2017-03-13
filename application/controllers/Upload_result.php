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
    $res = $this->Results_model->insert_Result($user_Id);

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

    $res = $this->Results_model->update_Result($user_Id);
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