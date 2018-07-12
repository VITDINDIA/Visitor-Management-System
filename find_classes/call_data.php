<?php

class call_data
	{
public $the_message="";		
public static function get_title()
		{
echo"Online Application Form";		
		}	
public function text_for_msg($msg)
        {
return str_replace(' ','%20',$msg);     
        } 
public function date_format($date)
		{
if(isset($date)){
$data=explode("-",$date);
return $data[2]."-".$data[1]."-".$data[0];
                }
        }                        			
public function send_sms($Contact,$Msg)
		{
$Url="http://sms.foxxglove.com/api/mt/SendSMS?user=vidya&password=654321&senderid=VIDYAS&channel=Trans&DCS=0&flashsms=0&number=".$Contact."&text=".$Msg."&route=15";	
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$Url);
curl_exec($ch);
curl_close($ch);	
		}
public function get_number()
    {
return "9808156144";    
    
    }        		
public function redirect($page)
	{	
echo"<script language='javascript1.5'>location.href='".$page."';</script>";	
	}
	
	
	}
	
$call_data=new call_data();	
?>