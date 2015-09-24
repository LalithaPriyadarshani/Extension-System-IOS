<?php
class extmap_model extends CI_Model {
    
    public function __construct()
    {
        $this->load->database();
    }
    
    public function insert($data)
    {
       return $this->db->insert('contact_extension_map_tbl', $data);
    }
    
    public function update($group)
    {
       //  return $this->db->update('group_tbl', $group, "gkey = '".$group['gkey']."'");
    }
    
    public function delete($key,$ext)
    {
        return $this->db->delete('contact_extension_map_tbl', array('contact_key' => $key ,'ext_no'=>$ext));
    }
    
    public function get_by_key($key)
    {
       // $query = $this->db->get_where('group_tbl', array('gkey' => $key,'status'=>'1'));
        //return $query->row_array();
    }

    public function get_all()
    {
         $query =$this->db->query("select c.ckey, concat(f_name,' ',l_name) as 'name', e.extension_no
                                    from contact_extension_map_tbl cem, contact_tbl c,extension_tbl e
                                    where cem.contact_key=c.ckey and cem.ext_no = e.extension_no");
        return $query->result_array();
    }
}