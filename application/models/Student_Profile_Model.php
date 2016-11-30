<?php
class Student_Profile_Model extends CI_Model{
	


	function update_Data(){
 $user_Id= $_SESSION["user_ID"];

		$this->load->helper('url');	





        $currentdate = date('Y-m-d H:i:s ', time());
        $cd=date('Y-m-d H-i-s ', time());




  if (!file_exists('public/assets/results/'.$user_Id.'/profilepic')) {


    mkdir('public/assets/results/'.$user_Id.'/profilepic', 0777, true);
}

 

   

$link1='nolink';

if(!empty($_FILES['filename']['name']) ) {
        move_uploaded_file($_FILES["filename"]["tmp_name"],'public/assets/results/'.$user_Id.'/profilepic/'. $_FILES["filename"]["name"]);
        $link1='public/assets/results/'.$user_Id.'/profilepic/' . $_FILES["filename"]["name"];      
}







				if($link1!='nolink'){

					$sqlupdate="UPDATE user set profilepicture='$link1' WHERE u_id='$user_Id' "; 
					$_SESSION["propic"]=$link1;
					 return $this->db->query($sqlupdate);

						


				}
				    
			        
			    return true;

 			


		



	}







}















?>