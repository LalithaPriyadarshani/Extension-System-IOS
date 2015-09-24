<?php
class location_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    
    public function delete($key)
    {
        $data = array('status' => '0');
        $this->db->update('location_tbl', $data, "lkey = '".$key."'");
    }
    
    public function insert($data)
    {
        return $this->db->insert('location_tbl', $data);
    }
    
    public function update($person)
    {
         return $this->db->update('location_tbl', $person, "ckey = '".$person['lkey']."'");
    }
    
    public function get_by_key($key)
    {
        $query = $this->db->get_where('location_tbl', array('lkey' => $key,'status'=>'1'));
        return $query->row_array();
    }
    
    public function get_all()
    {
        $query =$this->db->get_where('location_tbl',array('status'=>'1'));
        return $query->result_array();
    }
}
    