
<?php
    
    if(!function_exists('dbopen')){
        include ('dbcon.php');
    }
  
    function getStudentList()
    {   

        $db= dbopen();
        $sql=$db->prepare('SELECT * FROM student');
        $sql->execute();
        $sql->bind_result($S_id,$U_id,$sname,$gender,$email,$Phone_Number,$address,
            $pincode,$country,$course,$scholar_AMT,$para,$image_path,$date);
        while($sql->fetch()){
               
        $students[]=array('S_id'=>$S_id,'U_id'=>$U_id,'sname'=>$sname,'gender'=>$gender,'email'=>$email,
            'Phone_Number'=>$Phone_Number,'address'=>$address,'pincode'=>$pincode,'country'=>$country,
            'course'=>$course,'scholar_AMT'=>$scholar_AMT,'para'=>$para,'image_path'=>$image_path,'date'=>$date);
        }

        
        $sql->close();
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
        $result->close();

        if($count==1){

            session_start();
            $_SESSION['email']= $email;
            $_SESSION['password']= $password;
        // Register $myusername, $mypassword and redirect to file "Students_list.php"
            header("location:../public/studentdashboard.php?id=$S_id");
        }
        else{
            
            $Isnotuser= "wrong username or password";
            return $Isnotuser;
            header("Refresh: 2;url='../public/index.php'");
        }
    }

    function createStudent($U_id,$sname,$gender,$email,$Phone_Number,
        $address,$pincode,$country,$course,$scholar_AMT,$para,$image_path){
    	
        $db= dbopen(); 
        $sql ="INSERT INTO student(U_id,sname,gender,email,Phone_Number,address,
            pincode,country,course,scholar_AMT,para,image_path) VALUES ('$U_id','$sname','$gender',
            '$email','$Phone_Number','$address','$pincode','$country','$course','$scholar_AMT','$para','$image_path')";
        $result= $db->query($sql); 
        $sql1="SELECT * from student where U_id='$U_id'";
        $result1= $db->query($sql1);
        $row=mysqli_fetch_array($result1);       
        if(!$result1)
        {
            die('Error'.$db->error);
        }

        //$row=mysqli_fetch_array($result); 

        //$S_id = $row['S_id'];  
        else{
            
            $db->close();
            return ($row);
        }

        

    }


    function studentStory($S_id,$story,$reason,$code_id){

        $db= dbopen();
        $sql= "SELECT S_id from studstory where S_id='$S_id'";
        $result = $db->query($sql);
        $count=mysqli_num_rows($result);
        if($count==1){
            $sql1="UPDATE studstory SET story='$story',reason='$reason',code_id='$code_id' where S_id='$S_id'";
            if(!$db->query($sql1)){
                die('Error'.$db->error);
            }
           return true; 
        }
        else{
            $sql1="INSERT INTO studstory (S_id,story,reason,code_id)
            values('$S_id','$story','$reason','$code_id')";
            if(!$db->query($sql1)){
                die('Error'.$db->error);
            }
            return true;
        }

    } 

    function getStudent($studentId){

        $db=dbopen();
        $sql= "select * from student where S_id=$studentId";
        $result= $db->query($sql);

        if (!$result){
            die('Error' .$db->error);
        }
        else{
        $row= mysqli_fetch_array($result);

        $result->close();

        return $row;
        }

    }

    function getFundedAmount($S_id) {
        $db=dbopen();
        //$Student_id=$_GET['id2'];
        $sql = "select sum(amount) from donation where S_id=$S_id";
        $result = $db->query($sql);
        $sum = mysqli_fetch_array($result);
        
        return $sum['sum(amount)'];
    }


    function updateStudent($S_id,$Phone_Number,$address,$para){
      
        $db=dbopen();
        
        $sql="UPDATE student SET Phone_Number='$Phone_Number',address='$address',para='$para' where S_id='$S_id'";

        if(!$db->query($sql))
            {
                die('Error' .$db->error);
            }

        return $S_id;    

    }


    function getStory($S_id){

        $db=dbopen();
        $sql="SELECT * from studstory where S_id='$S_id'";
        $result=$db->query($sql);
        if(!$result){
            die('Error'.$db->error);
        }
        $story=mysqli_fetch_array($result);
        return $story;
    }


    function getDonors($studentId){

        $db=dbopen();
        $query="SELECT * from donation inner join user on donation.S_id='$studentId' && donation.U_id=user.U_id";
        $sql=$db->prepare($query);
        $sql->execute();
        $sql->bind_result($U_id,$S_id,$date,$amount,$name,$email);
         while($sql->fetch()){
               
        $Donors[]=array('U_id'=>$U_id,'S_id'=>$S_id,'date'=>$date,'amount'=>$amount,'name'=>$name,'email'=>$email);

        }
        //$sql->store_result();
        //$count= $sql->num_rows;
        //$list = $db->query($sql);
        $sql->close();
        return ($Donors);
    }
        //$db=dbopen();
    	//$sql= "select sum(amount) from donations where S_id=$studentId";
    	//$result = $db->query($sql);
        //mysqli_fetch_array($result);
        //return $result;
    	 
         //if(!$result)
        //{
           // die('Error' .$db->error());
        //}
        //$result->close;
        
    


//while($row = mysqli_fetch_array($result))
  //{
  //echo
  //echo  $row['sum(amount)'];

  //close();
  
  //}


//mysqli_close($con);
 ?>
