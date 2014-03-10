<?php


	function donorsignup($name,$password,$email) {
		
		$sql="INSERT INTO donor (name, password,email)
VALUES
('$name','$password','$email')";

if(!mysql_query($sql))
{
	die('Error' .mysql_error());
}

//if (!mysqli_query($con,$sql))
  //{
  //die('Error: ' . mysqli_error($con));
//}
}

?>
