<?php


	function donorsignup($name,$password,$email) {
		
		$sql="INSERT INTO donor (name, password,email)
VALUES
('$name','$password','$email')";


if(!mysql_query($sql))
{
	die('Error' .mysql_error());
}

}

function getDonation(){

	$sql="SELECT * from donation inner join student on donation.D_id=$D_id && donation.S_id=student.S_id";
    $result=mysqli_query($sql);
	$row=mysqli_fetch_array($result);

}



?>
