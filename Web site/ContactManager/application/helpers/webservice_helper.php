<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
if ( ! function_exists('create_xml_message') ) 
{
	function create_xml_message($status,$content,$message) 
	{
		$reply = '';
		$reply .= "<Payload>";
		$reply .="<Status>".$status."</Status>";
		$reply .="<Content>".$content."</Content>";
		$reply .="<Message>".$message."</Message>";
		$reply .= "</Payload>";
		return $reply;
	}
}

if ( ! function_exists('validateParameter') ) 
{
	function validateParameter($parameter) 
	{
		$parameter = trim($parameter," \t\n");
		$len = strlen($parameter);
		
		if ($len > 0 )
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}

		//return $idArray[$index];
	}
}
?>