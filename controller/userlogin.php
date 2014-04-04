<?php
 include ('../model/user.php');
 
 $email=$_POST['email'];
 $password= $_POST['password'];
 $U_id=userLogin($email,$password);

 header("location:../public/userdashboard.php?id=$U_id");

 ?> 