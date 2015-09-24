<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Extmap extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('extmap_model');
        $this->load->model('extension_model');
        $this->load->helper('url');
        $this->load->helper('form');
        
    }
    
	public function index()
	{
        $data['base_url'] = base_url();
        
        $data['extmaps']   = $this->extmap_model->get_all();
        $data['extensions']   = $this->extension_model->get_all();
        
		$this->load->view('template/header',$data);
        $this->load->view('extmaps',$data);
        $this->load->view('template/footer',$data);
	}
    
    public function delete($con,$ext)
    {
        $this->extmap_model->delete($con,$ext);
        $this->index();
    }
    
    public function add()
    {
         $name   = $this->input->post('name');
         $ext_no  = $this->input->post('ext_no');
         
         $data = array(
           'contact_key' => $name,
           'ext_no' => $ext_no,
           'status' => '1',
        );
         
         
        $this->extmap_model->insert($data);
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
