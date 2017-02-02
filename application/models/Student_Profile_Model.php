<?php
class Student_Profile_Model extends CI_Model{
	


	function update_Data($newtpnumber){

		$user_Id= $_SESSION["user_ID"];

		$this->load->helper('url');	

        $currentdate = date('Y-m-d H:i:s ', time());
        $cd=date('Y-m-d H-i-s ', time());

		if (!file_exists('public/assets/propic/'.$user_Id)) {


		    mkdir('public/assets/propic/'.$user_Id, 0777, true);
		
		}

 

   

		$link1='nolink';

		if(!empty($_FILES['filename']['name']) ) {
		        move_uploaded_file($_FILES["filename"]["tmp_name"],'public/assets/propic/'.$user_Id.'/'. $_FILES["filename"]["name"]);
		        $link1='public/assets/propic/'.$user_Id.'/' . $_FILES["filename"]["name"];      
		}





		if($link1!='nolink' OR $newtpnumber!=''){


			if($link1!='nolink'){



				$data['propic'] =$link1;
				               

						
			}



			if($newtpnumber!=''){
			
				$data['tpnumber2']=$newtpnumber;
							 
			}


			$this->db->where('tpnumber', $user_Id);
			$_SESSION["propic"]=$link1;
			return $this->db->update('student_table', $data); 




		}

	
 			


		



	}







}






?>