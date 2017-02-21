<?php
class Campaign_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_campaigns(){
       $this->db->order_by('campaign_id','DESC');
       $query = $this->db->get('campaign');
       return $query->result();
    }

    public function get_campaignStudents($camp_id){
        $this->db->select("Fname,Lname,r_id,Contactno,Email");
        $query = $this->db->get_where('register',array('campaign_id'=>$camp_id));
        return $query->result();
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
		    return false;
		}

    }

    public function get_newCampaign($camp_id){
        $query = $this->db->get_where('campaign',array('campaign_id'=>$camp_id));
        return $query->result();
    }

    public function insert_selectionInput($selection)
    {
 		$str = '';
    	$arr = array('campaign_id'=> $selection['id']);
    	if(array_key_exists('type', $selection)){
    		$str = $str.$selection['type'].'/ ';
    		$this->db->where('Inquiry',$selection['type']);
    		$this->db->update('register',$arr);
    	}
    	if(array_key_exists('course', $selection)){
    		$str = $str.$selection['course'].'/ ';
    		$this->db->where('course',$selection['course']);
    		$this->db->update('register',$arr);
    	}
    	if(array_key_exists('status', $selection)){
    		$str = $str.$selection['status'].'/ ';
    		$this->db->where('Status',$selection['status']);
    		$this->db->update('register',$arr);
    	}

    	//insert campaign table selection
        //if($str!=''){
           // $newStr=rtrim($str,"/ "); // remove the last slash
        //}
    	$in = array('selection'=>$str);
    	$this->db->	where('campaign_id',$selection['id']);
    	$this->db->update('campaign',$in);
        return true;
        
    }

    public function select_campaign(){
        $this->db->select('campaign_id','campaign_name');
        $this->db->order_by('campaign_id','DESC');
        $query = $this->db->get('campaign');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }

    }

    public function select_bulkEmail($id){

        $this->db->select("Email,Fname");
        $query = $this->db->get_where('register',array('campaign_id'=>$id));
        
        return $query->result();
        
    }

   


}