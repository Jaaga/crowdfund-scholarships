<?php

include 'dbcon.php';


	function donorsignup() {
		$con=mysqli_connect("localhost","root","123","LearnEmp");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

		$sql="INSERT INTO donor (name, password,email)
VALUES
('$_POST[name]','$_POST[password]','$_POST[email]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  
}




?>
