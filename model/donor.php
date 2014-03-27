<?php 
include ('dbcon.php');

	function createDonor($name,$password,$email) 
	{
		$db=dbopen();
		
		$sql="INSERT INTO donor (name, password,email)
		VALUES('$name','$password','$email')";
		//$result = $db->query($sql);

		if(!$db->query($sql))
		{
			die('Error' .$db->error($sql));
		}
		else
		{   session_start();
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
			$_SESSION['time'] = time();
			header("location:../public/Students_list.php?id=$D_id");
		}

	}
//"select * from donor  d, donation ds where  ds.D_id = d.D_id and "
	function getStudents($donorId){
		$donorId = $_GET['id'];		
		$db=dbopen();
		$sql="select * from donation inner join student on donation.D_id=$donorId && donation.S_id=student.S_id";
		$list = $db->query($sql);
		$result = mysqli_fetch_array($list);
		if(!$db->query($sql))
		{
			die('Error' .$db->error($sql));
		}
		//return array($list);
		//echo $result;
		echo $result['fname'];
		echo $result['amount'];
		//var_dump($result);

	}

	function donorLogin($email,$password)
	{
		$db=dbopen();
		//$myEmail = $_POST['email']; 
		//$mypassword = $_POST['pass']; 
		$sql ="SELECT * from donor where email='".$email."' && password='".$password."'";
        
        $result =$db->query($sql);
		$row=mysqli_fetch_array($result); 
		$D_id = $row['D_id'];
			$count = mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
		if($count==1)
			{
				$_SESSION['email']= $email;
				$_SESSION['password']= $password;
// Register $myusername, $mypassword and redirect to file "Students_list.php"
			header("location:../public/listofstudents.php?id=$D_id");
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
 		
  		$sql = "INSERT INTO donation (D_id,S_id,date,amount)
 		VALUES ('".$D_id."','".$S_id."',Now(),'".$amount."' )";
 		$result = $db->query($sql);
		if(!$sql)
		{
			echo "sorry your donations were not accepted";
		}
		else
		{
			echo "Thank You for Donating";
			//redirectToStudent($D_id);
		}
		

 }

 function redirectToStudent($D_Id)
 	{
		$D_id=$_POST['D_id'];
  		header("Refresh: 4;url='Students_list.php?id=$D_id");
		mysqli_close($con);
	}

?>
