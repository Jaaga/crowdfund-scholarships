<?php 
include ('dbcon.php');

	function createDonor($name,$password,$email) 
	{
		$db=dbopen();
		
		$sql="INSERT INTO donor (name, password,email)
		VALUES('$name','$password','$email')";
		$result = $db->query($sql);

		if(!$db->query($sql))
		{
			die('Error' .$db->error($sql));
		}

	}

	function getDonors(	$studentId)
	{
		$db=dbopen();
		$sql="select * from donation inner join donor on donation.S_id=$studentId && donation.D_id=donor.D_id";
		$list = $db->query($sql);

		if(!$db->query($sql))
		{
			die('Error' .$db->error($sql));
		}
		return array($list);
	}

	function donorLogin($email,$password)
	{
		$db=dbopen();
		//$myEmail = $_POST['email']; 
		//$mypassword = $_POST['pass']; 
		$sql = "select * from donor where email = '$email' && password = '$password'";

		$result =$db->query($sql);
		$row=mysqli_fetch_array($result); 
		$D_id = $row['D_id'];
			$count = mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
		if($count==1)
			{
				session_start();
// Register $myusername, $mypassword and redirect to file "Students_list.php"
				header("location:../public/Students_list.php?id=$D_id");
			}
		else
			{
			echo "wrong username or password";
			header("Refresh: 2;url='../public/index.php'");
			}
	}
 
 function giveDonation($D_id,$S_id,$amount)
 {
 		$db=dbopen();
 		
  		$sql = "INSERT INTO donation (D_id,S_Id,date,amount)
 		VALUES ('$D_id','$S_Id',NOW(),'$amount' )";
 		$result = $db->query($sql);
		if(!$result)
		{
			echo "sorry your donations were not accepted";
		}
		else
		{
			echo "Thank You for Donating";
			redirectToStudent($D_id);
		}

 }

 function redirectToStudent($D_Id)
 	{
		$D_id=$_POST['D_id'];
  		header("Refresh: 4;url='Students_list.php?id=$D_id");
		mysqli_close($con);
	}

?>
