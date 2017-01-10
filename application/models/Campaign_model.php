<?php
class Campaign_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_id($campaign){
    	$this->db->insert('campaign',$campaign);
    	//get id
    	$this->db->select('campaign_id');
    	$this->db->where('campaign_name',$campaign['campaign_name']);
    	$query = $this->db->get('campaign');
    	if ($query->num_rows() > 0) {
    		$data = $query->result_array();
    		return $data[0]['campaign_id'];
		} else {
		    return "0000";
		}

    }

    public function insert_bulkInput($data)
    {
        $this->db->insert('student', $data);
        return TRUE;
    }

    public function insert_selectionInput($selection)
    {
 		$str = '';
    	$arr = array('campaign_id'=> $selection['id']);
    	if(array_key_exists('type', $selection)){
    		$str = $str.$selection['type'].'/ ';
    		$this->db->where('type',$selection['type']);
    		$this->db->update('student',$arr);
    	}
    	if(array_key_exists('course', $selection)){
    		$str = $str.$selection['course'].'/ ';
    		$this->db->where('course',$selection['course']);
    		$this->db->update('student',$arr);
    	}
    	if(array_key_exists('status', $selection)){
    		$str = $str.$selection['status'].'/ ';
    		$this->db->where('status',$selection['status']);
    		$this->db->update('student',$arr);
    	}

    	//insert campaign table selection
    	$in = array('selection'=>$str);
    	$this->db->	where('campaign_id',$selection['id']);
    	$this->db->update('campaign',$in);
        if(mysql_affected_rows()>0){
            return TRUE;
        }
    }

}