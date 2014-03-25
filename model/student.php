
<?php
    include ('dbcon.php');
  

    function getStudentList()
    {   
        
        $db= dbopen();
        $sql=$db->prepare('SELECT * FROM student');
        $sql->execute();
        $sql->bind_result($S_id,$fname,$lname,$gender,$email,$Phone_Number,$address,
            $pincode,$country,$course,$scholar_AMT,$para,$password,$image_path);
        while($sql->fetch()){
               
        $students[]=array('S_id'=>$S_id,'fname'=>$fname,'lname'=>$lname,'gender'=>$gender,'email'=>$email,
            'Phone_Number'=>$Phone_Number,'address'=>$address,'pincode'=>$pincode,'country'=>$country,
            'course'=>$course,'scholar_AMT'=>$scholar_AMT,'para'=>$para,'password'=>$password,'image_path'=>$image_path);
        }
         //$sql->close();
        return ($students);    
    }

    function studentLogin($email,$password){
        $db= dbopen();
        $sql="SELECT * from student where email='$email' && password='$password'";
        $result= $db->query($sql);

        $row=mysqli_fetch_array($result); 

        $S_id = $row['S_id'];

        $count = mysqli_num_rows($result);
        // If result matched $myusername and $mypassword, table row must be 1 row
        if($count==1){

            session_start();
            $_SESSION['email']= $email;
            $_SESSION['password']= $password;
        // Register $myusername, $mypassword and redirect to file "Students_list.php"
            header("location:../public/Students_list.php?id=$S_id");
        }
        else{
            
            $Isnotuser= "wrong username or password";
            return $Isnotuser;
            header("Refresh: 2;url='../public/index.php'");
        }
    }

    function createStudent($fname,$lname,$gender,$email,$Phone_Number,
        $address,$pincode,$country,$course,$scholar_AMT,$para,$password,$image_path){
    	

        $db= dbopen();
        $sql ="INSERT INTO student(fname,lname,gender,email,Phone_Number,address,
            pincode,country,course,scholar_AMT,para,password,image_path) VALUES ('$fname','$lname','$gender',
            '$email','$Phone_Number','$address','$pincode','$country','$course','$scholar_AMT','$para','$password','$image_path')";
        $result= $db->query($sql);        
        if(!$result)
        {
            die('Error'.$db->error);
        }

        //$row=mysqli_fetch_array($result); 

        //$S_id = $row['S_id'];  
        else{

            $_SESSION['$email']= $email;
            $_SESSION['password']= $password;
            header("location:../public/Student_dash.php");
        }

        

    } 


    function getDonors($studentId){

        $db=dbopen();
        $sql="select * from donation inner join donor on donation.S_id=$studentId && donation.D_id=donor.D_id";
        $list = $db->query($sql);

        if(!$list)
        {
            die('Error' .$db->error());
        }
        return array($list);
    }

    function getStudent($studentId){

        $db=dbopen();
        $sql= "select * from student where S_id=$studentId";
        $result= $db->query($sql);

        if (!$result){
            die('Error' .$db->error());
        }
        else{
        $row= $result->fetch_array(MYSQLI_BOTH);

        return $row;
        }

    }

    function getFundedAmount($studentId) {

    	$db=dbopen();
    	$sql= "select sum(amount) from donations where S_id='$studentId'";
    	$result= $db->query($sql);
    	 if(!$result)
        {
            die('Error' .$db->error());
        }
        return $result;
    }


//while($row = mysqli_fetch_array($result))
  //{
  //echo
  //echo  $row['sum(amount)'];

  //close();
  
  //}


//mysqli_close($con);
 ?>