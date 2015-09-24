<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Persons extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('person_model');
        $this->load->helper('url');
        $this->load->helper('form');
    }
    
	public function index()
	{
         $data['base_url'] = base_url();
        
        $data['persons']   = $this->person_model->get_all();
        
		$this->load->view('template/header',$data);
        $this->load->view('persons',$data);
        $this->load->view('template/footer',$data);
	}
    
    public function delete($key)
    {
        $this->person_model->delete($key);
        $this->index();
    }
	
	
	
    public function add()
    {
		$config['upload_path']   =   "images/";

       $config['allowed_types'] =   "gif|jpg|jpeg|png"; 

       $config['max_size']      =   "5000";

       $config['max_width']     =   "1907";

       $config['max_height']    =   "1280";

       $this->load->library('upload',$config);

       $this->upload->do_upload(); 
		
		
         $key   = $this->input->post('ckey');
         $f_name  = $this->input->post('f_name');
         $l_name  = $this->input->post('l_name');
         $email  = $this->input->post('email');
		 
		 $imageData =$this->upload->data();
         $image  = $imageData['file_name'];
        
         $data = array(
           'ckey' => $key,
           'f_name' => $f_name,
           'l_name' => $l_name,
           'email' => $email,
           'image' => $image,
           'status' => '1',
        );
         
       
        $this->person_model->insert($data);
        $this->index();
    }
    
    public function update()
    {
		 $key   = $this->input->post('ckey');
		 $f_name  = $this->input->post('f_name');
         $l_name  = $this->input->post('l_name');
         $email  = $this->input->post('email');
         $image  = $this->input->post('userfile');
		 

		$config['upload_path']   =   "images/";

       $config['allowed_types'] =   "gif|jpg|jpeg|png"; 

       $config['max_size']      =   "5000";

       $config['max_width']     =   "1907";

       $config['max_height']    =   "1280";

       $this->load->library('upload',$config);

        $this->upload->do_upload();
         
        $extperson = $this->person_model->get_by_key($key);
        
        if(isset($extperson['ckey']))
         {
	     
		 $imageData =$this->upload->data();
         $image  = $imageData['file_name'];
         
            $extperson['f_name'] = $f_name;
            $extperson['l_name'] = $l_name;
            $extperson['email'] = $email;
            $extperson['image'] = $image;
            
		     
            $this->person_model->update($extperson);
         }
         
		 $this->index();
		 }
		
    
}
