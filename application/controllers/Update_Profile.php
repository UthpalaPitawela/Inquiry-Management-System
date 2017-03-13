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
 public function check_Old_Password(){

 	 $old_password = $this->input->post('password');

 	 $primarytpnumber=$this->input->post('tp');

 	 $res = $this->Student_Profile_Model->check_Password($primarytpnumber,$old_password);

 	  $rowcount2 = $res->num_rows();
           
            if($rowcount2>0){

            	echo "True";
           
           }else{
           	echo "False";
           }

 }

 public function update_Password(){

 	 $old_password = $this->input->post('old_password');
 	 $new_password =$this->input->post('new_password');
 	 $primarytpnumber=$this->input->post('tpforpassword');


 	  $res = $this->Student_Profile_Model->update_Password($primarytpnumber,$old_password,$new_password);


 if($res==1){
   $_SESSION["alert"]="success";


 }else{
 $_SESSION["alert"]="notsuccess";


 }



//      include 'imports.php';


?>
 	  <script>
    // alert("done");    
    //     swal("Registerd!", "Student with contact number "+Contactno+" registerd!", "success");
      window.location="<?php echo base_url("index.php/Page_Controller/loadingpages/student_profile");?>"
      </script> 
        
<?php
    }

 }




 
?>