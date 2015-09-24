<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Extensions extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('extension_model');
        $this->load->model('location_model');
        $this->load->helper('url');
        $this->load->helper('form');
        
    }
    
	public function index()
	{
        $data['base_url'] = base_url();
        
        $data['extensions']   = $this->extension_model->get_all();
        $data['locations']   = $this->location_model->get_all();
        
		$this->load->view('template/header',$data);
        $this->load->view('extensions',$data);
        $this->load->view('template/footer',$data);
	}
    
    public function delete($key)
    {
        $this->extension_model->delete($key);
        $this->index();
    }
    
    public function add()
    {
         $ext_no   = $this->input->post('ext_no');
         $tel_no1   = $this->input->post('tel_no1');
         $tel_no2   = $this->input->post('tel_no2');
         $call_type   = $this->input->post('call_type');
         $fax   = $this->input->post('fax');
         $location   = $this->input->post('location');
        
         $data = array(
           'extension_no' => $ext_no,
           'tel_no1' => $tel_no1,
           'tel_no2' => $tel_no2,
           'call_type' => $call_type,
           'fax' => $fax, 
           'location' => $location, 
           'status' => '1',
        );
         
         
        $this->extension_model->insert($data);
        $this->index();
    }
    
    public function update()
    {
         $ext_no   = $this->input->post('ext_no');
         $tel_no1   = $this->input->post('tel_no1');
         $tel_no2   = $this->input->post('tel_no2');
         $call_type   = $this->input->post('call_type');
         $fax   = $this->input->post('fax');
         $location   = $this->input->post('location');

         $extextension = $this->extension_model->get_by_key($ext_no);
        
         if(isset($extextension['extension_no']))
         {
            $extextension['tel_no1'] = $tel_no1;
            $extextension['tel_no2'] = $tel_no2;
            $extextension['call_type'] = $call_type;
            $extextension['fax'] = $fax;
            $extextension['location'] = $location;
           
            $this->extension_model->update($extextension);
         }
        
         
         $this->index();
    }
}
