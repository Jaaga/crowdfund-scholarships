<?php
$con=mysqli_connect("localhost","root","dunno1726","LearnEmp");
// Check connection
echo "lol";
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
echo "its working";
$sql=mysqli_query($con,"INSERT INTO student (fname, lname,gender,email,Phone_number,address,pincode,country,course,scholar_AMT,para,password)
VALUES
('$fname','$lname','$gender','$email','$Phone_number','$address', '$pincode', '$country', '$course','$scholar_AMT','$para','$password');




if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);
?>