<?php
                $con=mysqli_connect("localhost","root","123","LearnEmp");
// Check connection
         if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 $id1 = $_GET['id'];
 $id2 = $_GET['id2'];
$sql=mysqli_query($con,"INSERT INTO donation (D_id,S_Id,date,amount)
  VALUES
  ('$id1', '$id2',NOW(),25.22 )");


if (!($con))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);

?>