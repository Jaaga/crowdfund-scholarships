<?php
include ('../model/student.php');

$S_id= $_POST['S_id'];
$Phone_Number=$_POST['Phone_Number'];
$address= $_POST['address'];
$para=$_POST['para'];

$Id=updateStudent($S_id,$Phone_Number,$address,$para);

header("location:../public/studentdashboard.php?id=$Id");

?>