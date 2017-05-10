
<?php
class Manager_Profile_Model extends CI_Model{

	
	function index(){
		$data = array();
		$this->db->select('Status,COUNT(Status) AS count');
		$this->db->group_by('Status');
		$query = $this->db->get('register');
		foreach($query -> result() as $row){
			$data[] = array(
					'status' => $row->Status,
					'count' => $row->count
					);
				}
		return $data;
		}
	}

?>


