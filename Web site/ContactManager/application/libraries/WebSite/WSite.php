<?php defined('BASEPATH') OR exit('No direct script access allowed');

class WSite 
{
	private $CI;
	
	function __construct()
   	{
   		$this->setup_assets();    
  	}
 
  	function setup_assets()
	{
		$this->CI =& get_instance();
   		$this->CI->load->database();   	
		$this->CI->load->model('contact_model');

  	} 
	
    public function get_ContactList()
    {

        $return = $this->CI->contact_model->get_list();

        return $return;
        
    }
    
}

?>