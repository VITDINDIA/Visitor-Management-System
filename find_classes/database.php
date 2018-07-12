<?php
class Database
	{
public $connection ;
public $connection_wordpress ;
function __construct()
		{	
$this->open_db_connection();	
		}
		
public function open_db_connection()
		{
define('DB_HOST','localhost');
define('DB_USER','root');define('DB_PASS','');define('DB_NAME','vms');
$this->connection=new MySQLi(DB_HOST,DB_USER,DB_PASS,DB_NAME);	
if($this->connection->errno)
			{
die("Database connection failed badly". $this->connection->error);	
			}
		}	
			
public function query($sql)
		{
$result=$this->connection->query($sql);	
$this->confirm_query($result);	
return $result;
		}		
protected function confirm_query($result)
		{
if(!$result){
die("Connection Failed".$this->connection->error);			
			}	
		}
function count_rows($result)
	{
return mysqli_num_rows($result);			
	}	
public function escape_string($string)
		{
$escaped_string=$this->connection->real_escape_string($string);
return 	$escaped_string	;	
		}							
//Get the Id generated in last query			
public function the_insert_id()
		{
return $this->connection->insert_id;	
		}	
	}
$database=new Database();	
?>