<?php 
require_once('validations.php');
$con=mysql_connect('localhost','root','') or die("Failed to connect to MySQL: "); 
$con1=mysql_connect('localhost','root','',true) or die("Failed to connect to MySQL: ");
//$con2=mysql_connect('localhost','root','',true) or die("Failed to connect to MySQL: "); 
mysql_select_db('sml',$con	) or die("Failed to connect Database: "); 
mysql_select_db('library',$con1) or die("Failed to connect Database: "); 
//mysql_select_db('attendance_system',$con2) or die("Failed to connect Database: "); 
SESSION_START();
SESSION_NAME('slam');
?>
