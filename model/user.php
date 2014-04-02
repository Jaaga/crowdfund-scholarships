<?php 

if(!function_exists('dbopen')){
include ('dbcon.php');
}
	function createUser($name,$password,$email) 
	{
		
		$db=dbopen();
        
        //TO check uniqueness

        //$sql="SELECT email from user where email='$email'";
        //$result = $db->query($sql);
        //$count = mysqli_num_rows($result);
        //if($count==1){
        //	$invalidUser="A User with this E-mail already exists";
        //	return $invalidUser;

        //}
        //else{

		$sql="INSERT INTO user (name, password,email)
		VALUES('$name','$password','$email')";
		//$result = $db->query($sql);
         
		if(!$db->query($sql))
		{
			die('Error' .$db->error);
		}
		else
		{   $sql="SELECT * from user where email='$email' and password='$password'";
	        $result= $db->query($sql);
	        $row=mysqli_fetch_array($result);
	        $U_id=$row['U_id']; 
			
            $result->close();
            return ($U_id);
		  }

	    
	}
		function userInfo($userId)
		{
			$db =dbopen();
			$sql = "select * from user where U_id = $userId";

			$result = mysqli_fetch_array($db->query($sql));
			if(!$result)
			{
				die('Error' .$db->error($sql));
			}
			return $result['name'];
		} 
	
//"select * from donor  d, donation ds where  ds.D_id = d.D_id and "
	function getStudents($userId)
	{
		//$donorId = $_GET['id'];		
		$db=dbopen();
		$sql="select * from donation inner join student on donation.S_id=student.S_id WHERE donation.U_id=$userId";
		$list = mysqli_query($db,$sql) or die ("couldnt execute");
		//$noofStudents = mysqli_num_rows($list);
	

		//while($rows= mysqli_fetch_array($list))
		while($rows= mysqli_fetch_assoc($list))
		{
			
			$data[] = array('U_id'=>$rows['U_id'],'fname'=>$rows['fname'],'para'=>$rows['para'],'date'=>$rows['date'],
				'amount'=>$rows['amount'],'scholar_AMT'=>$rows['scholar_AMT'],'S_id'=>$rows['S_id'],'image_path'=>$rows['image_path']);
		}
		//var_dump($data);
		return($data);
		//return ($value);

	}

	function userLogin($email,$password)
	{
		$db=dbopen();
		//$myEmail = $_POST['email']; 
		//$mypassword = $_POST['pass']; 
		$sql ="SELECT * from user where email='".$email."' && password='".$password."'";
        
        $result =$db->query($sql);
		$row=mysqli_fetch_array($result); 
		$U_id = $row['U_id'];
			$count = mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
		if($count==1)
			{
				$_SESSION['email']= $email;
				$_SESSION['password']= $password;
// Register $myusername, $mypassword and redirect to file "Students_list.php"
			header("location:../public/donordashboard.php?id=$U_id");
			}
		else
			{
			echo "wrong username or password";
			header("Refresh: 2;url='../public/index.php'");
			}
	}
 
 function giveDonation($U_id,$S_id,$amount)
 {
 		$db=dbopen();
 		
  		$sql = "INSERT INTO donation (U_id,S_id,amount)
 		VALUES ('$U_id','$S_id','$amount' )";
 		$result = $db->query($sql);
		if(!$result)
		{
			echo "sorry your donations were not accepted";
		}
		else
		{
			echo "Thank You for Donating";
			//redirectToStudent($D_id);
		}
		

 }

 function redirectToStudent($U_Id)
 	{
		$U_id=$_POST['U_id'];
  		header("Refresh: 3;url='listofstudents.php?id=$U_id");
		mysqli_close($con);
	}

?>
