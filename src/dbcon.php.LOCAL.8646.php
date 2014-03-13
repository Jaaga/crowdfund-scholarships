<?php
function dbopen()
{
$host = "localhost"; // Host name 
$username = "root"; // Mysql username 
$password = "123"; // Mysql password 
$db_name = "LearnEmp"; // Database name 
//$tbl_name="donor"; // Table name 

// Connect to server and select databse.
$con = mysql_connect("$host", "$username", "$password");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
else
$con1 = mysql_select_db("$db_name");
if (!$con1) 
{
	die("cannot select DB");
 
}
}

function close()
{
	mysqli_close($con);
}
?>