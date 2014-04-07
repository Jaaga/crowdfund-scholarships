<?php
include ('../model/student.php');

$S_id= $_POST['S_id'];
$Phone_Number=$_POST['Phone_Number'];
$address= $_POST['address'];
$para=$_POST['para'];

$S_id = htmlspecialchars($S_id);
$Phone_Number = htmlspecialchars($Phone_Number);
$address = htmlspecialchars($address);
$para = htmlspecialchars($para);

if(empty($Phone_Number) && empty($address) && empty($para)){
	header("location:../public/studentdashboard.php?S_id=$S_id");
}
else{
$Id=updateStudent($S_id,$Phone_Number,$address,$para);

header("location:../public/studentdashboard.php?S_id=$Id");
}
?>