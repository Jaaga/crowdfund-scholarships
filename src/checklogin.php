<?php
function validateLogin()
{
include 'dbcon.php';
dbopen();
//login function which checks the credentials taken from index.php and matches it with the database;

$tbl_name = "donor";
// username and password sent from form 
$myusername = $_POST['email']; 
$mypassword = $_POST['pass']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql = "SELECT * FROM $tbl_name WHERE email='$myusername' and password='$mypassword'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
$D_id = $row['D_id'];

// Mysql_num_row is counting table row
$count = mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
session_start();
$_SESSION['email']="$myusername";

// Register $myusername, $mypassword and redirect to file "Students_list.php"
header("location:../public/Students_list.php?id=$D_id");
}
//if its not a proper credential then redirect the user back to index page.
else {
echo "<p> Wrong Username or Password</p>";
header("Refresh: 2;url='../public/index.php");
}
}
validateLogin();
?>
