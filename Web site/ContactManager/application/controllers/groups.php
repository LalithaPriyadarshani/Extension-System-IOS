<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Groups extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('group_model');
        $this->load->helper('url');
        $this->load->helper('form');
        
    }
    
	public function index()
	{
        $data['base_url'] = base_url();
        
        $data['groups']   = $this->group_model->get_all();
        
		$this->load->view('template/header',$data);
        $this->load->view('groups',$data);
        $this->load->view('template/footer',$data);
	}
    
    public function delete($key)
    {
        $this->group_model->delete($key);
        $this->index();
    }
    
    public function add()
    {
         $key   = $this->input->post('gkey');
         $name  = $this->input->post('gname');
         
         $data = array(
           'gkey' => $key,
           'name' => $name,
           'type' => '1',
           'status' => '1',
        );
         
         
        $this->group_model->insert($data);
        $this->index();
    }
    
    public function update()
    {
         $key   = $this->input->post('gkey');
         $name  = $this->input->post('gname');
         
         $extgroup = $this->group_model->get_by_key($key);

         if(isset($extgroup['gkey']))
         {
            $extgroup['name'] = $name;
                     
            $this->group_model->update($extgroup);
         }
         
         $this->index();
    }
    
}
