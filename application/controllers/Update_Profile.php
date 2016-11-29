<?php
 class Update_Profile extends CI_Controller{


function __construct() {

parent::__construct();
$this->load->model("Results_model");
$this->load->model("Student_Profile_Model");
 $this->load->helper('url_helper');


}
 	public function index(){
 		
 		

 	}

   
    public function update_Data(){



    $res = $this->Student_Profile_Model->update_Data();

 if($res){
        ?>
        <script>
        
        window.location='<?php echo site_url("page_controller/loadingpages/student_profile");?>'
        </script> 
        <?php
    }


 }




 }
?>