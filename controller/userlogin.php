<?php
 include ('../model/donor.php');
 $email=$_POST['email'];
 $password= $_POST['password'];
 $U_id=userLogin($email,$password);

 header("location:../public/donordashboard.php?id=$U_id");

 ?> 