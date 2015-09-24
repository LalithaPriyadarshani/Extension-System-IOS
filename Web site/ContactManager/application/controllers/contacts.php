<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacts extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    
	public function index()
	{
        $data['base_url'] = base_url();
        
        
		$this->load->view('template/header',$data);
        $this->load->view('clist',$data);
        $this->load->view('template/footer',$data);
	}
}
