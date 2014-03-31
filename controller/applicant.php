<?php
include ('../model/student.php');
$temp=$_FILES['image_path']['tmp_name'];
  $pic="images/".$_FILES['image_path']['name'];
  move_uploaded_file($temp,$pic);


  createStudent($_POST['U_id'],$_POST['fname'],$_POST['lname'],$_POST['gender'],
  	$_POST['email'],$_POST['Phone_Number'],$_POST['address'],$_POST['pincode'],
  	$_POST['country'],$_POST['course'],$_POST['scholar_AMT'],$_POST['para'],$_POST['password'],$pic);

    $_SESSION['email']= $email;
    $_SESSION['password']= $password;
    header("location:../public/studentdashboard.php?id=$S_id");
        

?>