<?php

$con=mysqli_connect("localhost","root","123","LearnEmp");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


  $temp=$_FILES['image']['tmp_name'];
  $pic="images/".$_FILES['image']['name'];
  move_uploaded_file($temp,$pic);
	
 

$sql="INSERT INTO student (fname,lname,gender,email,Phone_Number,address,pincode,country,course,scholar_AMT,para,password,image_path)
VALUES
('$_POST[fname]','$_POST[lname]','$_POST[gender]','$_POST[email]','$_POST[Phone_Number]','$_POST[address]','$_POST[pincode]','$_POST[country]','$_POST[course]','$_POST[scholar_AMT]','$_POST[para]','$_POST[password]','".$pic."')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
header("location:Students_list.php");

mysqli_close($con);
?>
