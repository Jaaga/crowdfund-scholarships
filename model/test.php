<?php
include('dbcon.php'); 
$db=dbopen();
 		$row=$db->query("SELECT * from user where email='abhinay302@gmail.com'");
 		$result=mysqli_fetch_array($row);
 		$U_id=$result['U_id'];
 		
  		$sql = "INSERT INTO donation (U_id,S_id,amount)
 		VALUES ('$U_id',2,600)";
 		$result1 = $db->query($sql);
		if(!$result1)
		{
			echo "sorry your donations were not accepted";
		}
		else
		{
			echo "Thank You for Donating";
			//redirectToStudent($D_id);
		}