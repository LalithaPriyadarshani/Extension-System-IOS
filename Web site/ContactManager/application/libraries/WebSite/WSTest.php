<?php defined('BASEPATH') OR exit('No direct script access allowed');

class WSTest 
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
        
        $this->CI->load->helper('webservice_helper');
  	} 
	
    public function get_ContactList()//done
    {
        $reply = '';

        $return = $this->CI->contact_model->get_ContactList();

        if(isset($return[0]))
        {
            $contxml='';
            
            foreach($return as $contact)
            {
                $contxml.=  $this->create_contact_xml($contact);
            }
            
            $reply  =  create_xml_message(1, $contxml, "Contacts found");
                        
        }
        else
        {
            $reply  =  create_xml_message(0, "Error", "No Contacts found");
        }

        return $reply;
        
    }
    
    public function get_GroupList()//done
    {
        $reply = '';
        
        $return = $this->CI->contact_model->get_GroupList();

        if(isset($return[0]))
        {
            $contxml='';
            
            foreach($return as $Office)
            {
                $contxml.=  $this->create_group_xml($Office);
            }
            
            $reply  =  create_xml_message(1, $contxml, "Offices found");
                        
        }
        else
        {
            $reply  =  create_xml_message(0, "Error", "No Offices found");
        }

        return $reply;
        
    }
    
    public function get_Location_List()//done
    {
        $reply = '';
        
        $return = $this->CI->contact_model->get_Location_List();

        if(isset($return[0]))
        {
            $contxml='';
            
            foreach($return as $location)
            {
                $contxml.=  $this->create_location_xml($location);
            }
            
            $reply  =  create_xml_message(1, $contxml, "Extensions found");
                        
        }
        else
        {
            $reply  =  create_xml_message(0, "Error", "No Extensions found");
        }

        return $reply;
        
    }
    
    public function get_ExtensionList()//done
    {
        $reply = '';
        
        $return = $this->CI->contact_model->get_Extension_List();

        if(isset($return[0]))
        {
            $contxml='';
            
            foreach($return as $extension)
            {
                $contxml.=  $this->create_extension_xml($extension);
            }
            
            $reply  =  create_xml_message(1, $contxml, "Extensions found");
                        
        }
        else
        {
            $reply  =  create_xml_message(0, "Error", "No Extensions found");
        }

        return $reply;
        
    }
    
    
    public function get_ContactGroup()//done
    {
        $reply = '';
        
        $return = $this->CI->contact_model->get_Contact_Group();

        if(isset($return[0]))
        {
            $contxml='';
            
            foreach($return as $cgroup)
            {
                $contxml.=  $this->create_contact_group_xml($cgroup);
            }
            
            $reply  =  create_xml_message(1, $contxml, "Extensions found");
                        
        }
        else
        {
            $reply  =  create_xml_message(0, "Error", "No Extensions found");
        }

        return $reply;
        
    }
    
    public function get_ContactExtension()
    {
        $reply = '';
        
        $return = $this->CI->contact_model->get_Contact_Extension();

        if(isset($return[0]))
        {
            $contxml='';
            
            foreach($return as $cextension)
            {
                $contxml.=  $this->create_contact_extension_xml($cextension);
            }
            
            $reply  =  create_xml_message(1, $contxml, "Extensions found");
                        
        }
        else
        {
            $reply  =  create_xml_message(0, "Error", "No Extensions found");
        }

        return $reply;
        
    }
    
    //create xml
    private function create_contact_xml($contact)
    {

        $xml='';
        
        $xml.='<Contact>';
        $xml.='<key>'.$contact['ckey'].'</key>';
        $xml.='<fname>'.$contact['f_name'].'</fname>';
        $xml.='<lname>'.$contact['l_name'].'</lname>';
        $xml.='<email>'.$contact['email'].'</email>';
        $xml.='</Contact>';
        
         return $xml;
    }
	
    private function create_group_xml($group)
    {
        $xml='';
        
        $xml.='<Group>';
        $xml.='<key>'.$group['gkey'].'</key>';
        $xml.='<name>'.$group['name'].'</name>';
        $xml.='<type>'.$group['type'].'</type>';
        $xml.='</Group>';
        
         return $xml;
    }
    
     private function create_location_xml($location)
    {
        $xml='';
        
        $xml.='<Location>';
        $xml.='<key>'.$location['lkey'].'</key>';
        $xml.='<name>'.$location['name'].'</name>';         
        $xml.='</Location>';
        
         return $xml;
    }
    
    private function create_extension_xml($extension)
    {
        $xml='';
        
        $xml.='<Extension>';
        $xml.='<extension_no>'.$extension['extension_no'].'</extension_no>';
        $xml.='<tel_no1>'.$extension['tel_no1'].'</tel_no1>';
        $xml.='<tel_no2>'.$extension['tel_no2'].'</tel_no2>';
        $xml.='<call_type>'.$extension['call_type'].'</call_type>';
        $xml.='<fax>'.$extension['fax'].'</fax>';
        $xml.='<location>'.$extension['location'].'</location>';
        $xml.='</Extension>';
        
         return $xml;
    }
     
    
    private function create_contact_group_xml($cgroup)
    {
        $xml='';
        
        $xml.='<Con_Group>';
        $xml.='<contact_id>'.$cgroup['contact_key'].'</contact_id>';
        $xml.='<group_id>'.$cgroup['group_key'].'</group_id>';       
        $xml.='</Con_Group>';
        
         return $xml;
    }
    
    
    private function create_contact_extension_xml($cextension)
    {
        $xml='';
        
        $xml.='<Con_Extension>';
        $xml.='<contact_key>'.$cextension['contact_key'].'</contact_key>';
        $xml.='<ext_no>'.$cextension['ext_no'].'</ext_no>';       
        $xml.='</Con_Extension>';
        
         return $xml;
    }
}

?>