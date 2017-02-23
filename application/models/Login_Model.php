<?php
class Login_Model extends CI_Model{
	function check_login($username,$password){
		

		$query = $this->db->query("SELECT status,first_name,last_name,u_id,profilepicture FROM user WHERE username= '$username' AND password = '$password'");
        return $query;
        
	}


	function check_login_student($username,$password){

				// $query = $this->db->query("SELECT firstname,user_name,propic FROM student_table WHERE user_name= '$username' AND password = '$password'");

		$this->db->select('firstname,email,propic,tpnumber')->from('student_table')->where('tpnumber', $username)->where('password',$password);
		

		$query =$this->db->get();
        return $query;
        
	}

	function getCourses($username){

				// $query = $this->db->query("SELECT firstname,user_name,propic FROM student_table WHERE user_name= '$username' AND password = '$password'");

		$this->db->select('id')->from('register')->where('Contactno',$username);
		

		$queryprogid =$this->db->get();

		$query2=array();
		$rowcount2 = $queryprogid->num_rows();
           
          if($rowcount2>0){


               foreach ($queryprogid->result_array() as $row) {



               	?>
    <?php


               		$degreeid=$row['id'];

					$this->db->select('*')->from('programme')->where('id', $degreeid);

					$query2 =$this->db->get();
					
					return $query2;


                }


             }


        
	}

		function verifyUser($email){
		$this->db->select('username,password');
		$query = $this->db->get_where('user',array('email'=>$email));
		foreach($query -> result() as $row){
			if($row != " "){
				$data = array(
				'uname' => $row->username,
				'pword' => $row->password,
				'status' => '1'
				);
			}else{
				$data = array(
				'status' => '0'
				);
			}
			
		}
		

		return $data;	

	}


}
?>