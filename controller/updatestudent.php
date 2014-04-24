<?php
include ('../model/student.php');

$S_id= $_POST['S_id'];
$Phone_Number=$_POST['Phone_Number'];
$address= $_POST['address'];
$para=$_POST['para'];
$bitdetail=$_POST['bitdetail'];

if(isset($_POST['S_id']))
{
  

  $S_id = htmlspecialchars($S_id);
  $Phone_Number = htmlspecialchars($Phone_Number);
  $address = htmlspecialchars($address);
  $para = htmlspecialchars($para);
  
  if(!empty($_FILES['image_path']['name'])){
  $temp=$_FILES['image_path']['tmp_name'];
  $pic="../public/images/".$_FILES['image_path']['name'];
  move_uploaded_file($temp,$pic);
  }

if(empty($Phone_Number) && empty($address) && empty($para) && empty($pic) && empty($bitdetail)){
	header("location:../public/studentdashboard.php");
}
else{
$Id=updateStudent($S_id,$Phone_Number,$address,$para,$pic,$bitdetail);

header("location:../public/studentdashboard.php");
}

}
?>