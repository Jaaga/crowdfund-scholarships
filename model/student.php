<?php
  
  include ('dbcon.php');

    function getStudentList()
    {   
        
        $db= dbopen();
        $sql=$db->prepare('SELECT S_id, fname, lname FROM student');
        $sql->execute();
        $sql->bind_result($S_id,$fname,$lname);
        while($sql->fetch()){
               
            $students[]=array('S_id'=>$S_id,'fname'=>$fname,'lname'=>$lname);
        }
         //$sql->close();
        return ($students);    
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