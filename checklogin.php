<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="123"; // Mysql password 
$db_name="LearnEmp"; // Database name 
$tbl_name="donor"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['email']; 
$mypassword=$_POST['pass']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE email='$myusername' and password='$mypassword'";
if ($sql!==1)
{
	echo "wrong username";
}
//$sql1="SELECT D_id FROM $tbl_name WHERE email='$myusername' ";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$D_id=$row['D_id'];
//$result1=mysql_query($sql1);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);



// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
session_start();
$_SESSION['email']="$myusername";

// Register $myusername, $mypassword and redirect to file "login_success.php"
//$_SESSION['usr']= "myusername";
//$_SESSION['pawd']="mypassword"; 
header("location:Students_list.php?id=$D_id&id2=$myusername");
}
else {
echo "Wrong Username or Password";
}
?>
