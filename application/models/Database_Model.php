<?php
class Database_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert_bulkInput($data)
    {
        $this->db->insert('register', $data);
        return TRUE;
    }

    public function get_students()
    {
    	$type = 'Bulk';
        $this->db->select("Fname,Lname,r_id,Contactno,Email,Gender,Address,bulk_name");
        $this->db->where('Inquiry',$type);
        $this->db->order_by('r_id','DESC');
        $query = $this->db->get('register');
        return $query->result();
    }



}
?>