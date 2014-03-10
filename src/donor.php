<?php
include ('dbcon.php');

	function donorsignup() {
		
		dbopen();
		
		$sql="INSERT INTO donor (name, password,email)
VALUES
('$_POST[name]','$_POST[password]','$_POST[email]')";
if(!mysql_query($sql))
{
	die('Error' .mysql_error());
}

//if (!mysqli_query($con,$sql))
  //{
  //die('Error: ' . mysqli_error($con));
//}
  close();
}

		function d_signup() {
			include 'dbcon.php'
			dbopen();
			$sql1="SELECT * FROM donor WHERE email='$_POST[email]' and password='$_POST[password]'";
          $result=mysql_query($sql1);
          $row=mysql_fetch_array($result);
          
          $D_id=$row['D_id'];
   
          
        
    $count=mysql_num_rows($result);
		}

?>
