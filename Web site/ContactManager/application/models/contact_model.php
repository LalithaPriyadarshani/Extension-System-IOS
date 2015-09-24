<?php
class contact_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
    
    public function get_ContactList()
    {
        $query =$this->db->get('contact_tbl');
        return $query->result_array();
    }
    
    public function get_GroupList()
    {
        $query =$this->db->get_where('group_tbl',array('status'=>'1'));
        return $query->result_array();
    }
    
    public function get_Location_List()
    {
        $query =$this->db->get_where('location_tbl',array('status'=>'1'));
        return $query->result_array();
    }
    
    public function get_Extension_List()
    {
        $query =$this->db->get_where('extension_tbl',array('status'=>'1'));
        return $query->result_array();
    }
    
    public function get_Contact_Group()
    {
        $query =$this->db->get_where('contact_group_map_tbl',array('status'=>'1'));
        return $query->result_array();
    }
    
    public function get_Contact_Extension()
    {
        $query =$this->db->get_where('contact_extension_map_tbl',array('status'=>'1'));
        return $query->result_array();
    }
   
}