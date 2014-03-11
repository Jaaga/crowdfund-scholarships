<?php


	function donorsignup($name,$password,$email) {
		
		$sql="INSERT INTO donor (name, password,email)
VALUES
('$name','$password','$email')";


if(!mysql_query($sql))
{
	die('Error' .mysql_error());
}


function getDonation(){

	$sql="SELECT * from donation inner join student on donation.D_id=$D_id && donation.S_id=student.S_id";
    $result=mysqli_query($sql);
	$row=mysqli_fetch_array($result);

	for ($row=0)
}

function getId($password,$email){

	$sql1="SELECT * from donor where email=$email and password=$password";
	$result=mysql_query($sql1);
$row=mysql_fetch_array($result);
$D_id=$row['D_id'];

return $D_id;
}
}
?>
