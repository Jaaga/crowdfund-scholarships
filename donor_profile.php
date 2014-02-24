<?php
                $con=mysqli_connect("localhost","root","123","LearnEmp");
// Check connection
         if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$D_id=$_GET['id'];

$sql=mysqli_query($con,"select S_Id from donation where D_id=$D_id");

echo $sql;

mysqli_close($con);

  ?>