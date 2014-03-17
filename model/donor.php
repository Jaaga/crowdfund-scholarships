<?php 
include ('dbcon.php');


	function createDonor($name,$password,$email) {
		$db=dbopen();
		
		$sql="INSERT INTO donor (name, password,email)
		VALUES('$name','$password','$email')";
		$result = $db->query($sql);

		if(!$db->query($sql))
		{
			die('Error' .$db->error());
		}

	}
//"select * from donor  d, donation ds where  ds.D_id = d.D_id and "
	function getStudents($donorId){
		$db=dbopen();
		$sql="select * from donation inner join student on donation.D_id=$donorId && donation.S_id=student.S_id";
		$list = $db->query($sql);

		if(!$db->query($sql))
		{
			die('Error' .$db->error());
		}
		return array($list);
	}

	function donorLogin($email,$password)
	{
		$db=dbopen();
		$sql = "select * from donor where email = '$email' && password = '$password'";

		$result =$db->query($sql);
		$row=mysqli_result::fetch_array($result); 
		$D_id = $row['D_id'];
			$count = mysql_num_rows($result);
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
		else
			session_start();
		header("location:../public/Students_list.php?id=$D_id");
	}

?>
