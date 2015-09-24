<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/WebService/WSTest.php';

    class Cmanager extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $ns = 'http://'.$_SERVER['HTTP_HOST'].'/index.php/service';
            $this->load->library("Other/nusoap/nusoap_lib"); // load nusoap toolkit library in controller
            $this->nusoap_server = new soap_server(); // create soap server object
            $this->nusoap_server->configureWSDL("SOAP Server Using NuSOAP in CodeIgniter", $ns); // wsdl cinfiguration
            $this->nusoap_server->wsdl->schemaTargetNamespace = $ns; // server namespace
            
            
            
            $input_array = array();
            $return_array = array ("return" => "xsd:string");
            $this->nusoap_server->register('GetContactList', 
                                            $input_array, 
                                            $return_array, 
                                            $ns, 
                                            $ns."/GetContactList", 
                                            "rpc", 
                                            "encoded", 
                                            "get the list of contacts");
            
            
            $input_array = array();
            $return_array = array ("return" => "xsd:string");
            $this->nusoap_server->register('GetGroupList', 
                                            $input_array, 
                                            $return_array, 
                                            $ns, 
                                            $ns."/GetGroupList", 
                                            "rpc", 
                                            "encoded", 
                                            "get the list of Groups");
            
                        $input_array = array();
            
            $return_array = array ("return" => "xsd:string");
            $this->nusoap_server->register('GetLocationList', 
                                            $input_array, 
                                            $return_array, 
                                            $ns, 
                                            $ns."/GetLocationList", 
                                            "rpc", 
                                            "encoded", 
                                            "get the list of contacts and their locations");
            
            
            $input_array = array("id" => "xsd:string");
            $return_array = array ("return" => "xsd:string");
            $this->nusoap_server->register('GetExtensionList', 
                                            $input_array, 
                                            $return_array, 
                                            $ns, 
                                            $ns."/GeExtensionList", 
                                            "rpc", 
                                            "encoded", 
                                            "get the list of extensions");
            
            
            $input_array = array("id" => "xsd:string");
            $return_array = array ("return" => "xsd:string");
            $this->nusoap_server->register('GetContactGroup', 
                                            $input_array, 
                                            $return_array, 
                                            $ns, 
                                            $ns."/GetContactGroupList", 
                                            "rpc", 
                                            "encoded", 
                                            "get the list of contacts and their offices/groups");
            
            $input_array = array("id" => "xsd:string");
            $return_array = array ("return" => "xsd:string");
            $this->nusoap_server->register('GetContactExtension', 
                                            $input_array, 
                                            $return_array, 
                                            $ns, 
                                            $ns."/GetContactExtensionList", 
                                            "rpc", 
                                            "encoded", 
                                            "get the list of contacts and their extensions");
            
    
        }
        
        function index()
        {
            function GetContactList()
            {
                $wst = new WSTest();
                
                $reply = $wst->get_ContactList();
                
                return $reply;
            }
            
            function GetGroupList()
            {
                $wst = new WSTest();
                
                $reply = $wst->get_GroupList();
                
                return $reply;
            }
            
            function GetLocationList()
            {
                $wst = new WSTest();
                
                $reply = $wst->get_Location_List();
                
                return $reply;
            }
            
            function GetExtensionList()
            {
                $wst = new WSTest();
                
                $reply = $wst->get_ExtensionList();
                
                return $reply;
            }
            
            function GetContactGroup()
            {
                $wst = new WSTest();
                
                $reply = $wst->get_ContactGroup();
                
                return $reply;
            }
            
             function GetContactExtension()
            {
                $wst = new WSTest();
                
                $reply = $wst->get_ContactExtension();
                
                return $reply;
            }
            
            $this->nusoap_server->service(file_get_contents("php://input")); // read raw data from request body
        }
    }