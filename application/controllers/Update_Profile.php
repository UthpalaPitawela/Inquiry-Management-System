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

    $newtpnumber = $this->input->post('tpnumber2');	

    $res = $this->Student_Profile_Model->update_Data($newtpnumber);

 if($res){
        ?>
        <script>
        
        window.location='<?php echo base_url("index.php/Page_Controller/loadingpages/student_profile");?>'
        </script> 
        <?php
    }


 }




 }
?>