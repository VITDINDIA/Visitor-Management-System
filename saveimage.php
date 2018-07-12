<?php

//set random name for the image, used time() for uniqueness
require_once("init.php"); 
$filename =  time() . '.jpg';
$filepath = 'saved_images/';
$photo=$filepath.$filename;
$Db_objects->update_file($photo,$_SESSION['first']);
move_uploaded_file($_FILES['webcam']['tmp_name'],$photo );

echo $filepath.$filename;
?>
