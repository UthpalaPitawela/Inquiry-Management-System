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
}
?>