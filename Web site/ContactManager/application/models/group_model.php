<?php
class group_model extends CI_Model {
    
    public function __construct()
    {
        $this->load->database();
    }
    
    /*CREATE TABLE `group_tbl` (
      `gkey` varchar(10) NOT NULL,
      `name` varchar(100) DEFAULT NULL,
      `type` smallint(6) DEFAULT NULL,
      `status` smallint(6) DEFAULT NULL,
      PRIMARY KEY (`gkey`)
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
    */
    
    public function insert($data)
    {
       return $this->db->insert('group_tbl', $data);
    }
    
    public function update($group)
    {
         return $this->db->update('group_tbl', $group, "gkey = '".$group['gkey']."'");
    }
    
    public function delete($key)
    {
        $data = array('status' => '0');
        $this->db->update('group_tbl', $data, "gkey = '".$key."'");
    }
    
    public function get_by_key($key)
    {
        $query = $this->db->get_where('group_tbl', array('gkey' => $key,'status'=>'1'));
        return $query->row_array();
    }

    public function get_all()
    {
         $query =$this->db->get_where('group_tbl',array('status'=>'1'));
        return $query->result_array();
    }
}