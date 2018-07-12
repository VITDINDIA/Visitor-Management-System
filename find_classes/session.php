<?php
class session 
	{
public $signed_in=false;public $message;public $user_id;
function __construct()
		{
@session_start();	
$this->check_login();
		}	
		
protected function check_login()
	{
if(isset($_SESSION['uid']))	
		{
$this->signed_in=true;
		}
else
		{
$this->Unset_Session();
		}		
	
	}
public function is_signed_in()
	{
return $this->signed_in;
	}			
public function for_login($uid)
		{		  
$_SESSION['uid']=$uid;						
		}
public function temp_session($temp1,$temp2)
		{
$_SESSION['previous']=$temp1;
$_SESSION['next']=$temp2;							
		}  
public function input_first_session($dtime)
    {
$_SESSION['first']=$dtime;   
    }
                
public function Unset_Session()
	{
unset($_SESSION['uid']);
unset($_SESSION['first']);
$this->signed_in=false;	
	}			

public function session_for_msg($msg)
		{
if($msg)	{				
$_SESSION['msg']=$msg;
			}
else
			{
unset($_SESSION['msg']);	
			}			
		}	
public function get_session($sid)
			{
if($sid){			
return $_SESSION[$sid];	
		}
			}				
	
	}
$session=new session();
?>