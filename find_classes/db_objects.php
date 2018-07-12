<?php
class db_objects
	{	
public $user_name;public $password;public $urole;public $contact_number;public $uname;
public $contact_department;public $contact_personal;public $datetime;public $photo;public $nov;
public static $db_ftable_fields=array("user_name","password","uname","urole");
public static $db_stable_fields=array("contact_number","uname","contact_department","contact_personal","datetime","photo","nov");
public static $db_ftable="login";public static $db_stable="registration";

public function create_details()
{
global $database;
$properties=$this->clean_properties(self::$db_stable_fields);
$sql="insert into ".self::$db_stable."( ".implode(",",array_keys($properties)) ." ) values('";
$sql.=implode("','",array_values($properties)). "')";                                        
if($database->query($sql))
			{
$this->id=$database->the_insert_id();			
return true;		
			}
else
			{
return false;	
			}    
    
}

public function update_file($photo,$dtime)
    {
global $database;
$database->query("UPDATE `registration` set `photo`='$photo' where `datetime`='$dtime'");      
    }
public function update_status($cnt,$outtime)
    {
global $database;
$database->query("update `registration` set `status`=1,`outtime` = '$outtime' where `cnt`='$cnt'");      
    }
public function fetch_visitor($dtime)
{
global $database;
return mysqli_fetch_array($database->query("SELECT * FROM `registration` WHERE `datetime`='$dtime' "));	    
}
public function get_visitors()
{
global $database;
$sql=$database->query("SELECT `cnt`,`contact_number`,`uname`,`contact_department`,`contact_personal`,(TIME_TO_SEC(now()) - TIME_TO_SEC(`datetime`))/60,`photo`,`status` FROM `registration` WHERE `status`=0 order by `datetime`");
$i=1;
while($fetch=mysqli_fetch_array($sql))	 
    {
?>
                             <tr>
                                <td><?php   print $i;    ?></td>
                                <td><?php   print  $fetch[2];  ?></td>
                                <td><?php   print  $fetch[1];  ?></td>
                                <td><?php   print  $fetch[4];  ?></td>
                                <td><?php   print  $fetch[3];  ?></td>
                                <td><a target="_new" href="<?php   print  $fetch[6];  ?>"> Click </a></td>
                                <td><?php   print  round($fetch[5],2);  ?></td>
                                <td><a href="visitor.php?exit=<?php   print $fetch[0];  ?>">Exit</a></td>
                              </tr>
<?php 
$i++;    
    } 
     
}
public function get_out_visitors($from,$to)
{
global $database;
$sql="SELECT `cnt`,`contact_number`,`uname`,`contact_department`,`contact_personal`,`datetime`,`outtime`,(TIME_TO_SEC(`outtime`) - TIME_TO_SEC(`datetime`))/60,`photo`,`status` FROM `registration` WHERE  `datetime`> '$from' and `datetime` < '$to' and `status`=1 order by `datetime`";
$sqlstmt=$database->query($sql);
$i=1;
while($fetch=mysqli_fetch_array($sqlstmt))	 
    {
?>
                             <tr>
                                <td><?php   print $i;    ?></td>
                                <td><?php   print  $fetch[2];  ?></td>
                                <td><?php   print  $fetch[1];  ?></td>
                                <td><?php   print  $fetch[4];  ?></td>
                                <td><?php   print  $fetch[3];  ?></td>
                                <td><a target="_new" href="<?php   print  $fetch[8];  ?>"> Click </a></td>
                                <td><?php   print  $fetch[5];  ?></td> <td><?php   print  $fetch[6];  ?></td>
                                <td><?php   print  round($fetch[7]);  ?></td>
                              </tr>
<?php 
$i++;    
    } 
     
}
protected static function find_query_by_id($sql)
		{
global $database;
$result_set=$database->query($sql);	
return $database->count_rows($result_set);
		} 		
protected function properties($fdb_ftable_fields)
		{
$properties=array();
foreach($fdb_ftable_fields as $db_fields)
	{	
if(property_exists($this,$db_fields)){		
$properties[$db_fields]=$this->$db_fields;	
									 }									 
	}
return 	$properties;	
		}

protected function clean_properties($fdb_ftable_fields)
	{
global $database;
$clean_properties=array();	
foreach($this->properties($fdb_ftable_fields) as $key=>$value)
			{	
$clean_properties[$key]= $database->escape_string($value);	
			}		
return $clean_properties;		
	
	}
	}
$Db_objects= new db_objects();	
?>