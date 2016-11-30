<?php
class Student_Data_Model extends CI_Model{
	function get_User_Data($user_Id){
		

		$query = $this->db->query("SELECT * FROM user WHERE u_id= '$user_Id'");
        return $query;
        //if ($query->num_rows() > 0) {
          //  return true;
        //} else {
          //  return false;
        //}
	}

  function get_Student_Data($user_Id){
    

    $querystu = $this->db->query("SELECT first_name,last_name,u_id,email FROM user WHERE status= 1");
        return $querystu;
        //if ($query->num_rows() > 0) {
          //  return true;
        //} else {
          //  return false;
        //}
  }
}
?>