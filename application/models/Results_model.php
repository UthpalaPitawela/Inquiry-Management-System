<?php
class Results_model extends CI_Model{
	function load_results($user_Id){
		
		//
		$this->load->helper('url');	
		$sql3 = "SELECT * FROM resultimages WHERE tpnumber='$user_Id'";

		$resultquery = $this->db->query($sql3);


		return $resultquery;

	}

	function insert_Result($user_Id,$name1,$name2,$name3,$name4,$name5,$name6,$name7,$name8,$name9,$name10){



		$this->load->helper('url');	








  if (!file_exists('public/assets/results/'.$user_Id)) {
    mkdir('public/assets/results/'.$user_Id, 0777, true);
}

 

   

$link1=$link2=$link3=$link4=$link5=$link6=$link7=$link8=$link9=$link10='nolink';

if(!empty($_FILES['file1']['name']) ) {
        move_uploaded_file($_FILES["file1"]["tmp_name"],'public/assets/results/'.$user_Id.'/'. $_FILES["file1"]["name"]);
        $link1='public/assets/results/'.$user_Id.'/' . $_FILES["file1"]["name"];      
}

if(!empty($_FILES['file2']['name'])){

       move_uploaded_file($_FILES["file2"]["tmp_name"],'public/assets/results/'.$user_Id.'/'. $_FILES["file2"]["name"]);
        $link2='public/assets/results/'.$user_Id.'/' . $_FILES["file2"]["name"];            
}

if(!empty($_FILES['file3']['name'])){

        move_uploaded_file($_FILES["file3"]["tmp_name"],'public/assets/results/'.$user_Id.'/'. $_FILES["file3"]["name"]);
        $link3='public/assets/results/'.$user_Id.'/' . $_FILES["file3"]["name"];
}

if(!empty($_FILES['file4']['name'])){
 
      move_uploaded_file($_FILES["file4"]["tmp_name"],'public/assets/results/'.$user_Id.'/'. $_FILES["file4"]["name"]);         
        $link4='public/assets/results/'.$user_Id .'/' . $_FILES["file4"]["name"];
}

if(!empty($_FILES['file5']['name'])){
 
      move_uploaded_file($_FILES["file5"]["tmp_name"],'public/assets/results/'.$user_Id.'/'. $_FILES["file5"]["name"]);         
        $link5='public/assets/results/'.$user_Id.'/' . $_FILES["file5"]["name"];
}

if(!empty($_FILES['file6']['name'])){
 
      move_uploaded_file($_FILES["file6"]["tmp_name"],'public/assets/results/'.$user_Id.'/'. $_FILES["file6"]["name"]);         
        $link6='public/assets/results/'.$user_Id.'/' . $_FILES["file6"]["name"];
}

if(!empty($_FILES['file7']['name'])){
 
      move_uploaded_file($_FILES["file7"]["tmp_name"],'public/assets/results/'.$user_Id.'/'. $_FILES["file7"]["name"]);         
        $link7='public/assets/results/'.$user_Id.'/' . $_FILES["file7"]["name"];
}

if(!empty($_FILES['file8']['name'])){
 
      move_uploaded_file($_FILES["file8"]["tmp_name"],'public/assets/results/'.$user_Id.'/'. $_FILES["file8"]["name"]);         
        $link8='public/assets/results/'.$user_Id.'/' . $_FILES["file8"]["name"];
}

if(!empty($_FILES['file9']['name'])){
 
      move_uploaded_file($_FILES["file9"]["tmp_name"],'public/assets/results/'.$user_Id.'/'. $_FILES["file9"]["name"]);         
        $link9='public/assets/results/'.$user_Id.'/' . $_FILES["file9"]["name"];
}

if(!empty($_FILES['file10']['name'])){
 
      move_uploaded_file($_FILES["file10"]["tmp_name"],'public/assets/results/'.$user_Id.'/'. $_FILES["file10"]["name"]);         
        $link10='public/assets/results/'.$user_Id.'/' . $_FILES["file10"]["name"];
}






		$data = array(

					'name1'=>$name1,
			        'pdf1' => $link1,
			        //$this->input->post('file1'),
			        'name2'=>$name2,
			        'pdf2' => $link2,
			        //$this->input->post('file2'),
			        'name3'=>$name3,
			        'pdf3' => $link3,
			        //$this->input->post('file3'),
			        'name4'=>$name4,
			        'pdf4' => $link4,
			        //$this->input->post('file4'),
			        'name5'=>$name5,
			        'pdf5' => $link5,

			        'name6'=>$name6,
			        'pdf6' => $link6,
			        //$this->input->post('file1'),
			        'name7'=>$name7,
			        'pdf7' => $link7,
			        //$this->input->post('file2'),
			        
			        'name8'=>$name8,
			        'pdf8' => $link8,
			        //$this->input->post('file3'),
			        'name9'=>$name9,
			        'pdf9' => $link9,
			        //$this->input->post('file4'),
			        'name10'=>$name10,
			        'pdf10' => $link10,			        
			        //$this->input->post('file5'),
			        'tpnumber'=>$user_Id
			    );

		return $this->db->insert('resultimages', $data);




	}



function rmdir_recursive($dir) {
    foreach(scandir($dir) as $file) {
        if ('.' === $file || '..' === $file) continue;
        if (is_dir("$dir/$file")){
        $this->rmdir_recursive("$dir/$file");	
        } 
        else unlink("$dir/$file");
    }
    rmdir($dir);
}



	function  delete_Result($user_Id){


$deleteresult="DELETE FROM resultimages WHERE tpnumber='$user_Id'  "; 
?>
<?php
$this->rmdir_recursive('public/assets/results/'.$user_Id);
 return $this->db->query($deleteresult);
      





	}





	function update_Result($user_Id,$name1,$name2,$name3,$name4,$name5,$name6,$name7,$name8,$name9,$name10){


		$this->load->helper('url');	








  if (!file_exists('public/assets/results/'.$user_Id)) {


    mkdir('public/assets/results/'.$user_Id, 0777, true);
}

 

   

// $link1=$link2=$link3=$link4=$link5='nolink';

// if(!empty($_FILES['file1']['name']) ) {
//         move_uploaded_file($_FILES["file1"]["tmp_name"],'public/assets/results/'.$user_Id.'/'. $_FILES["file1"]["name"]);
//         $link1='public/assets/results/'.$user_Id.'/' . $_FILES["file1"]["name"];      
// }

// if(!empty($_FILES['file2']['name'])){

//        move_uploaded_file($_FILES["file2"]["tmp_name"],'public/assets/results/'.$user_Id.'/'. $_FILES["file2"]["name"]);
//         $link2='public/assets/results/'.$user_Id.'/' . $_FILES["file2"]["name"];            
// }



// if(!empty($_FILES['file3']['name'])){

//         move_uploaded_file($_FILES["file3"]["tmp_name"],'public/assets/results/'.$user_Id.'/'. $_FILES["file3"]["name"]);
//         $link3='public/assets/results/'.$user_Id.'/' . $_FILES["file3"]["name"];
// }

// if(!empty($_FILES['file4']['name'])){
 
//       move_uploaded_file($_FILES["file4"]["tmp_name"],'public/assets/results/'.$user_Id.'/'. $_FILES["file4"]["name"]);         
//         $link4='public/assets/results/'.$user_Id .'/' . $_FILES["file4"]["name"];
// }

// if(!empty($_FILES['file5']['name'])){
 
//       move_uploaded_file($_FILES["file5"]["tmp_name"],'public/assets/results/'.$user_Id.'/'. $_FILES["file5"]["name"]);         
//         $link5='public/assets/results/'.$user_Id.'/' . $_FILES["file5"]["name"];
// }




// 				if($link1!='nolink'){

// 					$sqlupdate="UPDATE resultimages set olimage1='$link1' WHERE tpnumber='$user_Id' "; 

// 					$this->db->query($sqlupdate);

					

					


// 				}
// 				if($link2!='nolink'){

// 					$sqlupdate="UPDATE resultimages set olimage2='$link2' WHERE tpnumber='$user_Id' "; 

// 					$this->db->query($sqlupdate);


// 				}
// 				if($link3!='nolink'){

// 					$sqlupdate="UPDATE resultimages set alimage1='$link3' WHERE tpnumber='$user_Id' "; 

// 					$this->db->query($sqlupdate);


// 				}
// 				if($link4!='nolink'){

// 					$sqlupdate="UPDATE resultimages set alimage2='$link4' WHERE tpnumber='$user_Id' "; 

// 					$this->db->query($sqlupdate);


// 				}
// 				if($link5!='nolink'){

// 					$sqlupdate="UPDATE resultimages set other='$link5' WHERE tpnumber='$user_Id' "; 

// 					$this->db->query($sqlupdate);

// 				}
			        

$link1=$link2=$link3=$link4=$link5=$link6=$link7=$link8=$link9=$link10='nolink';

if(!empty($_FILES['file1']['name']) ) {
        move_uploaded_file($_FILES["file1"]["tmp_name"],'public/assets/results/'.$user_Id.'/'. $_FILES["file1"]["name"]);
        $link1='public/assets/results/'.$user_Id.'/' . $_FILES["file1"]["name"];      
}

if(!empty($_FILES['file2']['name'])){

       move_uploaded_file($_FILES["file2"]["tmp_name"],'public/assets/results/'.$user_Id.'/'. $_FILES["file2"]["name"]);
        $link2='public/assets/results/'.$user_Id.'/' . $_FILES["file2"]["name"];            
}

if(!empty($_FILES['file3']['name'])){

        move_uploaded_file($_FILES["file3"]["tmp_name"],'public/assets/results/'.$user_Id.'/'. $_FILES["file3"]["name"]);
        $link3='public/assets/results/'.$user_Id.'/' . $_FILES["file3"]["name"];
}

if(!empty($_FILES['file4']['name'])){
 
      move_uploaded_file($_FILES["file4"]["tmp_name"],'public/assets/results/'.$user_Id.'/'. $_FILES["file4"]["name"]);         
        $link4='public/assets/results/'.$user_Id .'/' . $_FILES["file4"]["name"];
}

if(!empty($_FILES['file5']['name'])){
 
      move_uploaded_file($_FILES["file5"]["tmp_name"],'public/assets/results/'.$user_Id.'/'. $_FILES["file5"]["name"]);         
        $link5='public/assets/results/'.$user_Id.'/' . $_FILES["file5"]["name"];
}

if(!empty($_FILES['file6']['name'])){
 
      move_uploaded_file($_FILES["file6"]["tmp_name"],'public/assets/results/'.$user_Id.'/'. $_FILES["file6"]["name"]);         
        $link6='public/assets/results/'.$user_Id.'/' . $_FILES["file6"]["name"];
}

if(!empty($_FILES['file7']['name'])){
 
      move_uploaded_file($_FILES["file7"]["tmp_name"],'public/assets/results/'.$user_Id.'/'. $_FILES["file7"]["name"]);         
        $link7='public/assets/results/'.$user_Id.'/' . $_FILES["file7"]["name"];
}

if(!empty($_FILES['file8']['name'])){
 
      move_uploaded_file($_FILES["file8"]["tmp_name"],'public/assets/results/'.$user_Id.'/'. $_FILES["file8"]["name"]);         
        $link8='public/assets/results/'.$user_Id.'/' . $_FILES["file8"]["name"];
}

if(!empty($_FILES['file9']['name'])){
 
      move_uploaded_file($_FILES["file9"]["tmp_name"],'public/assets/results/'.$user_Id.'/'. $_FILES["file9"]["name"]);         
        $link9='public/assets/results/'.$user_Id.'/' . $_FILES["file9"]["name"];
}

if(!empty($_FILES['file10']['name'])){
 
      move_uploaded_file($_FILES["file10"]["tmp_name"],'public/assets/results/'.$user_Id.'/'. $_FILES["file10"]["name"]);         
        $link10='public/assets/results/'.$user_Id.'/' . $_FILES["file10"]["name"];
}




				if($link1!='nolink'){

					$sqlupdate="UPDATE resultimages set pdf1='$link1',name1='$name1' WHERE tpnumber='$user_Id' "; 

					$this->db->query($sqlupdate);

					

					


				}
				if($link2!='nolink'){

					$sqlupdate="UPDATE resultimages set pdf2='$link2',name2='$name2' WHERE tpnumber='$user_Id' "; 

					$this->db->query($sqlupdate);


				}
				if($link3!='nolink'){

					$sqlupdate="UPDATE resultimages set name3='$name3',pdf3='$link3' WHERE tpnumber='$user_Id' "; 

					$this->db->query($sqlupdate);


				}
				if($link4!='nolink'){

					$sqlupdate="UPDATE resultimages set name4='$name4',pdf4='$link4' WHERE tpnumber='$user_Id' "; 

					$this->db->query($sqlupdate);


				}
				if($link5!='nolink'){

					$sqlupdate="UPDATE resultimages set name5='$name5',pdf5='$link5' WHERE tpnumber='$user_Id' "; 

					$this->db->query($sqlupdate);

				}
			    if($link6!='nolink'){

					$sqlupdate="UPDATE resultimages set name6='$name6',pdf6='$link6' WHERE tpnumber='$user_Id' "; 

					$this->db->query($sqlupdate);

					

					


				}
				if($link7!='nolink'){

					$sqlupdate="UPDATE resultimages set name7='$name7',pdf7='$link7' WHERE tpnumber='$user_Id' "; 

					$this->db->query($sqlupdate);


				}
				if($link8!='nolink'){

					$sqlupdate="UPDATE resultimages set name8='$name8',pdf8='$link8' WHERE tpnumber='$user_Id' "; 

					$this->db->query($sqlupdate);


				}
				if($link4!='nolink'){

					$sqlupdate="UPDATE resultimages set name9='$name9',pdf9='$link9' WHERE tpnumber='$user_Id' "; 

					$this->db->query($sqlupdate);


				}
				if($link5!='nolink'){

					$sqlupdate="UPDATE resultimages set name10='$name10',pdf10='$link10' WHERE tpnumber='$user_Id' "; 

					$this->db->query($sqlupdate);

				}
			    

		// $data = array(

		// 			'name1'=>$name1,
		// 	        'pdf1' => $link1,
		// 	        //$this->input->post('file1'),
		// 	        'name2'=>$name2,
		// 	        'pdf2' => $link2,
		// 	        //$this->input->post('file2'),
		// 	        'name3'=>$name3,
		// 	        'pdf3' => $link3,
		// 	        //$this->input->post('file3'),
		// 	        'name4'=>$name4,
		// 	        'pdf4' => $link4,
		// 	        //$this->input->post('file4'),
		// 	        'name5'=>$name5,
		// 	        'pdf5' => $link5,

		// 	        'name6'=>$name6,
		// 	        'pdf6' => $link6,
		// 	        //$this->input->post('file1'),
		// 	        'name7'=>$name7,
		// 	        'pdf7' => $link7,
		// 	        //$this->input->post('file2'),
			        
		// 	        'name8'=>$name8,
		// 	        'pdf8' => $link8,
		// 	        //$this->input->post('file3'),
		// 	        'name9'=>$name9,
		// 	        'pdf9' => $link9,
		// 	        //$this->input->post('file4'),
		// 	        'name10'=>$name10,
		// 	        'pdf10' => $link10,			        
		// 	        //$this->input->post('file5'),
		// 	        'tpnumber'=>$user_Id
		// 	    );
			        
			    return true;

 			


		



	}







}















?>