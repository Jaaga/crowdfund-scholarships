<?php
                   $con=mysqli_connect("localhost","root","123","LearnEmp");
// Check connection
         if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $id=$_GET['id'];
  $sql="SELECT * FROM donation where D_id='$id'";
  $result=mysql_query($sql);
  
  

while($row=mysqli_fetch_array($result))
{    
	$S_Id=$row['S_Id']; 
	$sql1="SELECT * FROM student where S_Id='$S_Id'";
	$result1=mysql_query($sql1);

	   while($row1= mysqli_fetch_array($result1))
	   {
	   	  echo $row1['name'];
	   }

}
mysqli_close($con);
?>
