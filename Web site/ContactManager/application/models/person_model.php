<?php
class person_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
        /*CREATE TABLE `contact_tbl` (
      `ckey` varchar(10) NOT NULL,
      `f_name` varchar(30) DEFAULT NULL,
      `l_name` varchar(100) DEFAULT NULL,
      `email` varchar(100) DEFAULT NULL,
      `status` smallint(6) DEFAULT NULL,
      `image` varchar(100) NOT NULL,
      PRIMARY KEY (`ckey`)
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
    */
    
    public function delete($key)
    {
        $data = array('status' => '0');
        $this->db->update('contact_tbl', $data, "ckey = '".$key."'");
    }
    
    public function insert($data)
    {
        return $this->db->insert('contact_tbl', $data);
    }
    
    public function update($person)
    {
         return $this->db->update('contact_tbl', $person, "ckey = '".$person['ckey']."'");
    }
    
    public function get_by_key($key)
    {
        $query = $this->db->get_where('contact_tbl', array('ckey' => $key,'status'=>'1'));
        return $query->row_array();
    }
    
    public function get_all()
    {
        $query =$this->db->get_where('contact_tbl',array('status'=>'1'));
        return $query->result_array();
    }
	
	public function retrieve_exist_image($id){
	
	$query =$this->db->get_where('contact_tbl',array('ckey'=>$id));
	return $query->result();	
	}
}
    