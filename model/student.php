<?php
  
  include ('dbcon.php');

	function getStudentList()
	{   
        
        $db= dbopen();
        $sql= "SELECT * from student";
        $result= $db->query($sql);
        $count=$result->num_rows;
        
        if (!$db->query($sql))
        {
        	die('Error'.$db->error());
        }

        for($row=0;$row<$count;$row++)
        {
        	$data[$row][0]=$result['S_id'];
        	$data[$row][1]=$result['fname'];
        	$data[$row][2]=$result['lname'];
        	$data[$row][3]=$result['gender'];
        	$data[$row][4]=$result['email'];
        	$data[$row][5]=$result['Phone_Number'];
        	$data[$row][6]=$result['address'];
        	$data[$row][7]=$result['pincode'];
        	$data[$row][8]=$result['country'];
        	$data[$row][9]=$result['course'];
        	$data[$row][10]=$result['scholar_AMT'];
        	$data[$row][11]=$result['para'];
        	$data[$row][12]=$result['image_path'];
        	
        }

         return ($data);   
                
	}

	function studentLogin($email,$password)
	{
		$db= dbopen();
		$sql="SELECT * from student where email='$email' && password='$password'";
        $result= $db->query($sql);

		$row=mysqli_fetch_array($result); 

		$S_id = $row['S_id'];

		$count = mysqli_num_rows($result);
        // If result matched $myusername and $mypassword, table row must be 1 row
		if($count==1){

		    session_start();
        // Register $myusername, $mypassword and redirect to file "Students_list.php"
		    header("location:../public/Students_list.php?id=$D_id");
		}
		else{
			
			echo "wrong username or password";
            header("Refresh: 2;url='../public/index.php'");
		}
	}

    function createStudent($studentId,$fname,$lname,$gender,$email,$Phone_Number,
        $address,$pincode,$country,$course,$scholar_AMT,$para,$password,$image_path){

        $db= dbopen();
        $sql ="INSERT INTO student(S_id,fname,lname,gender,email,Phone_Number,address,
            pincode,country,course,scholar_AMT,para,password,image_path)";
        $result= $db->query($sql);
        
        if(!$db->query($sql))
        {
            die('Error'.$db->error());
        }

        $row=mysqli_fetch_array($result); 

        $S_id = $row['S_id'];  
        

        header("location:../public/Student_dash.php?id=$S_id");

    } 


    function getDonors($studentId){

        $db=dbopen();
        $sql="select * from donation inner join donor on donation.S_id=$studentId && donation.D_id=donor.D_id";
        $list = $db->query($sql);

        if(!$db->query($sql))
        {
            die('Error' .$db->error());
        }
        return array($list);
    }