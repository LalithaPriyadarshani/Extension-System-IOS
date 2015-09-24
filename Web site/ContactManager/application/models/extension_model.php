<?php
class extension_model extends CI_Model {
    
    public function __construct()
    {
        $this->load->database();
    }

    public function insert($data)
    {
       return $this->db->insert('extension_tbl', $data);
    }
    
   /* public function update($group)
    {
         return $this->db->update('extension_tbl', $group, "extension_no = '".$group['extension_no']."'");
    }
    */
    
    public function delete($key)
    {
        $data = array('status' => '0');
        $this->db->update('extension_tbl', $data, "extension_no = '".$key."'");
    }
    
    public function get_by_key($key)
    {
        $query = $this->db->get_where('extension_tbl', array('extension_no' => $key,'status'=>'1'));
        return $query->row_array();
    }

    public function get_all()
    {
         $query =$this->db->get_where('extension_tbl',array('status'=>'1'));
        return $query->result_array();
    }
}