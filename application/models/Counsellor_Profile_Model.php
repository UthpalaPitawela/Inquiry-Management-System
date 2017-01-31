<?php
class Counsellor_Profile_Model extends CI_Model{
	function index($username){
		$this->db->select('first_name,last_name');
		$this->db->where('username',$username);
		$query = $this->db->get('user');
		//return $query->result();
		$data =array();
		foreach($query-> result() as $row){
			$data[0] = $row->first_name;
			$data[1] = $row->last_name;
		}
		return $data;

	}

	function getActivitySummary($counsellorname){
		
		
		$query = $this->db->query("SELECT CounsellorName, sum(Status='Pending') AS pending, sum(Status='Following') AS following, sum(Status='Completed') AS completed FROM register GROUP BY CounsellorName");
		foreach($query -> result() as $row){
			$cname = $row->CounsellorName;
			if($cname == $counsellorname){
				$data[] = array(
						'pending' => $row->pending,
						'following' => $row->following,
						'completed' => $row->completed
						

						);
			}
		
		}
	return $data;

	}

}

?>
