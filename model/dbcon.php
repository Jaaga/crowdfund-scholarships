<?php
function dbopen(){
	$host="localhost"; // Host name 
	$username="root"; // Mysql username 
	$password="123"; // Mysql password 
	$db_name="LearnEmp"; // Database name 

	//$tbl_name="donor"; // Table name 

	// Connect to server and select databse.
	$db= new mysqli($host, $username, $password, $db_name);
	if (!$db)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
	
	return($db);
}


function close(){
	mysqli_close();
	}

?>
