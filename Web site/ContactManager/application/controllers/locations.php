<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Locations extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('location_model');
        $this->load->helper('url');
        $this->load->helper('form');
        
    }
    
	public function index()
	{
        $data['base_url'] = base_url();
        
        $data['locations']   = $this->location_model->get_all();
        
		$this->load->view('template/header',$data);
        $this->load->view('locations',$data);
        $this->load->view('template/footer',$data);
	}
    
    public function delete($key)
    {
        $this->location_model->delete($key);
        $this->index();
    }
    
    public function add()
    {
         $key   = $this->input->post('lkey');
         $name  = $this->input->post('name');
         $desc  = $this->input->post('desc');
         
         $data = array(
           'lkey' => $key,
           'name' => $name,
           'description' => $desc,
           'status' => '1',
        );
         
         
        $this->location_model->insert($data);
        $this->index();
    }
    
    public function update()
    {
         $key   = $this->input->post('lkey');
         $name  = $this->input->post('name');
         $desc  = $this->input->post('desc');
         
         $extlocation = $this->location_model->get_by_key($key);

         if(isset($extlocation['lkey']))
         {
            $extlocation['name'] = $name;
            $extlocation['description'] = $desc;
                     
            $this->location_model->update($extlocation);
         }
         
         $this->index();
    }
    
}
