<?php
                $con=mysqli_connect("localhost","root","123","LearnEmp");
// Check connection
         if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 $D_id = $_POST['D_id'];
 $S_Id = $_POST['S_Id'];
 $amount= $_POST['amount'];

$sql=mysqli_query($con,"INSERT INTO donation (D_id,S_Id,date,amount)
  VALUES
  ('$D_id','$S_Id',NOW(),'$amount' )");


if (!($con))
  {
  die('Error: ' . mysqli_error($con));
  }


function redirectToStudent($D_Id)
{
$D_id=$_POST['D_id'];
  header("Refresh: 4;url='Students_list.php?id=$D_id");

mysqli_close($con);
}

?>
