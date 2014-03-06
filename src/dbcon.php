<?php
function dbopen(){
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="123"; // Mysql password 
$db_name="LearnEmp"; // Database name 
//$tbl_name="donor"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
}

function close(){
	
}
?>