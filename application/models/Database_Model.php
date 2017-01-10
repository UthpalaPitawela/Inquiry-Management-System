<?php
class Database_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert_bulkInput($data)
    {
        $this->db->insert('bulk_student', $data);
        return TRUE;
    }

}
?>