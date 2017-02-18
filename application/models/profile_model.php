<?php

class profile_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	public function addpropic(){

		 if (isset($_SESSION['user_ID'])){
		     $user = $_SESSION['user_ID'];
		     //echo $user;

		$target_dir = "public/assets/images/users/";
     	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
     	$uploadOk = 1;
     	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
	// Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            ?>
             <script>
             //alert('Image uploaded successfully');
             window.location='<?php echo site_url("index.php/profile_controller");?>'
             </script>
             <?php
            //echo "File is an image - " . $check["mime"] . ".";
            
            $uploadOk = 1;
        }else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
     if (file_exists($target_file)) {
         ?>
         <script>
         //alert('Image uploaded successfully');
         window.location='<?php echo site_url("index.php/profile_controller");?>'
         </script>
         <?php
         //$uploadOk = 0;
     }
     // Check file size
     if ($_FILES["fileToUpload"]["size"] > 500000) {
         ?>
         <script>
         alert('Sorry your images is too large.');
         window.location='<?php echo site_url("profile_controller/index");?>'
         </script>
         <?php
         $uploadOk = 0;
     }
     // Allow certain file formats
     if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
     && $imageFileType != "gif" ) {
         ?>
     	<script>
         alert('Only jpg/jpeg/png/gif file types can be uploaded.');
         window.location='<?php echo site_url("index.php/profile_controller");?>'
         </script>
         <?php
         $uploadOk = 0;
     }
 
     $image = $_FILES['fileToUpload']['name'];
     $path = "public/assets/images/users/".$_FILES['fileToUpload']['name'];
     //echo $path;

     $data = array('profilepicture'=>$path);
     $this->db->where('u_id',$user);
     $this->db->update('user',$data);

     // $sql = "update `user` set `photo`='$path' where `uid`='$user'";
     // $result = mysqli_query($conn,$sql);


     $_SESSION['propic'] = $path;

     // Check if $uploadOk is set to 0 by an error
     if ($uploadOk == 0) {
         ?>
         <script>
         alert('Sorry your upload failed');
         window.location='<?php echo site_url("index.php/profile_controller");?>'
         </script>
         <?php
     // if everything is ok, try to upload file
     } else {
         if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
             ?>
             <script>
         //alert('Image uploaded successfully');
         window.location='<?php echo site_url("index.php/profile_controller");?>'
         </script>
         <?php
         } else {
             echo "Sorry, there was an error uploading your file.";
         }
     }
    }



}
    public function getData($user_ID)
    {
        $user = "$user_ID";
        // $this->db->select("first_name,last_name,email,profilepicture,dob,TP");
        // $query = $this->db->get_where('user',array('u_id'=>$user));
        $this->db->where('u_id',$user);
        $query = $this->db->get('user');

        return $query;

    }

}

?>