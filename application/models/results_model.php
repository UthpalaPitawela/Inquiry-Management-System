<?php
class Results_model extends CI_Model{
	function load_results($user_Id){
		
		
		$this->load->helper('url');	
		$sql3 = "SELECT * FROM resultimages WHERE id='$user_Id'";

		$resultquery = $this->db->query($sql3);


		return $resultquery;

	}

	function insert_Result($user_Id){



		$this->load->helper('url');	






        $currentdate = date('Y-m-d H:i:s ', time());
        $cd=date('Y-m-d H-i-s ', time());




  if (!file_exists('public/assets/results/'.'1001')) {
    mkdir('public/assets/results/'.$user_Id, 0777, true);
}

 

   

$link1=$link2=$link3=$link4=$link5='nolink';

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




		$data = array(
			        'olimage1' => $link1,
			        //$this->input->post('file1'),
			        'olimage2' => $link2,
			        //$this->input->post('file2'),
			        'alimage1' => $link3,
			        //$this->input->post('file3'),
			        'alimage2' => $link4,
			        //$this->input->post('file4'),
			        'other' => $link5,
			        //$this->input->post('file5'),
			        'id'=>$user_Id
			    );

		return $this->db->insert('resultimages', $data);




	}



function rmdir_recursive($dir) {
    foreach(scandir($dir) as $file) {
        if ('.' === $file || '..' === $file) continue;
        if (is_dir("$dir/$file")) rmdir_recursive("$dir/$file");
        else unlink("$dir/$file");
    }
    rmdir($dir);
}



	function  delete_Result($user_Id){


$deleteresult="DELETE FROM resultimages WHERE id='$user_Id'  "; 
?>
<?php
$this->rmdir_recursive('public/assets/results/'.$user_Id);
 return $this->db->query($deleteresult);
      





	}





	function update_Result($user_Id){


		$this->load->helper('url');	





        $currentdate = date('Y-m-d H:i:s ', time());
        $cd=date('Y-m-d H-i-s ', time());




  if (!file_exists('public/assets/results/'.'1001')) {


    mkdir('public/assets/results/'.$user_Id, 0777, true);
}

 

   

$link1=$link2=$link3=$link4=$link5='nolink';

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




				if($link1!='nolink'){

					$sqlupdate="UPDATE resultimages set olimage1='$link1' WHERE id='$user_Id' "; 

					$this->db->query($sqlupdate);

					
					//$this->db->where('id','$user_Id');
					//$this->db->set('olimage1', $link1);
					//$this->db->update('resultimages');

					


				}
				if($link2!='nolink'){

					$sqlupdate="UPDATE resultimages set olimage2='$link2' WHERE id='$user_Id' "; 

					$this->db->query($sqlupdate);

					//$this->db->set('olimage2', $link2);
					//$this->db->where('id','$user_Id');
					//$r=$this->db->update('resultimages');
					
					//if($r){

					


					//}
					

				}
				if($link3!='nolink'){

					$sqlupdate="UPDATE resultimages set alimage1='$link3' WHERE id='$user_Id' "; 

					$this->db->query($sqlupdate);

					//$this->db->set('alimage1', $link3);
					//$this->db->where('id','$user_Id');
					//$this->db->update('resultimages');

				}
				if($link4!='nolink'){

					$sqlupdate="UPDATE resultimages set alimage2='$link4' WHERE id='$user_Id' "; 

					$this->db->query($sqlupdate);

					//$this->db->set('alimage2', $link4);
					//$this->db->where('id','$user_Id');
					//$this->db->update('resultimages');

				}
				if($link5!='nolink'){

					$sqlupdate="UPDATE resultimages set other='$link5' WHERE id='$user_Id' "; 

					$this->db->query($sqlupdate);

					//$this->db->set('other', $link5);
					//$this->db->where('id','$user_Id');
					//$this->db->update('resultimages');

				}
			        
			        
			    return true;

 			


		



	}







}















?>