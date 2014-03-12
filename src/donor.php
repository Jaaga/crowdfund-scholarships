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

function donations($D_id) {
	$con1 = mysql_connect("localhost","root","123") or die("Couldn't select DB");
        $db = mysql_select_db("LearnEmp", $con1) or die("Couldn't select database."); 

        $con2 = mysql_connect("localhost","root","123") or die("Couldn't select DB"); 
        $db = mysql_select_db("LearnEmp", $con2)  or die("Couldn't select database."); 


function getDonation(){

	$sql="SELECT * from donation inner join student on donation.D_id=$D_id && donation.S_id=student.S_id";
    $result=mysqli_query($sql);
	$row=mysqli_fetch_array($result);

	for ($row=0)
}


}
?>
