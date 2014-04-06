<?php 

if(!function_exists('dbopen')){
include ('dbcon.php');
}
	function createUser($name,$password,$email) 
	{
		
		$db=dbopen();
		$sql="INSERT INTO user (name, password,email)
		VALUES('$name','$password','$email')";
		//$result = $db->query($sql);
         
		if(!$db->query($sql))
		{
			 return ($db->error);
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

	function updateUser($U_id,$image,$details){
       
       $db = dbopen();
       $sql = "UPDATE user SET image='$image',details='$details' where U_id='$U_id'";
       
       if(!$db->query($sql))
			{
				die('Error' .$db->error);
			}

	}
		function userInfo($userId)
		{
			$db =dbopen();
			$sql = "select * from user where U_id=$userId";
			$result=$db->query($sql);
			$row=mysqli_fetch_array($result);

			if (!$result){
				die('Error'.$db->error);
			}
			return $row;

		} 
	
//"select * from donor  d, donation ds where  ds.D_id = d.D_id and "
	function getStudents($userId)
	{
		//$donorId = $_GET['id'];		
		$db=dbopen();
		$sql="select * from donation inner join student on donation.S_id=student.S_id WHERE donation.U_id=$userId GROUP  BY donation.S_id";
		$list = mysqli_query($db,$sql) or die ("couldnt execute");
		//$noofStudents = mysqli_num_rows($list);
	

		//while($rows= mysqli_fetch_array($list))
		while($rows= mysqli_fetch_assoc($list))
		{
			
			$data[] = array('U_id'=>$rows['U_id'],'sname'=>$rows['sname'],'para'=>$rows['para'],'date'=>$rows['date'],
				'amount'=>$rows['amount'],'scholar_AMT'=>$rows['scholar_AMT'],'S_id'=>$rows['S_id'],'image_path'=>$rows['image_path']);
		}
		//var_dump($data);
		return($data);
		//return ($value);

	}
    
    function removeUser($U_id){
        $db=dbopen();
        $sql="DELETE FROM user WHERE U_id='$U_id'";
        if(!$db->query($sql)){
            return false;
        }
        return true;
        
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
  				
			return $U_id;
			}
		else
			{
			$InvalidUser="wrong username or password";
			return $InvalidUser;
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
		$U_id=$U_Id;
  		header("Refresh: 3;url='userdashboard.php?U_id=$U_id");
	}
   
   function get_gravatar( $email, $s = 200, $d = 'monsterid', $r = 'g', $img = false, $atts = array() )
    {
        $url = 'http://www.gravatar.com/avatar/';
        $url .= md5( strtolower( trim( $email ) ) );
        $url .= "?s=$s&d=$d&r=$r";
    if ( $img ) 
    {
        $url = '<img src="' . $url . '"';
        foreach ( $atts as $key => $val ){
            $url .= ' ' . $key . '="' . $val . '"';
    }
        $url .= ' />';
    }

    return $url;

    }

    function logout()
    {
    	session_start();
        session_destroy();
        $logout="You have been logged out";
        return $logout;

    }

?>
