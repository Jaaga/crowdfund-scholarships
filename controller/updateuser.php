<?php
include ('../model/user.php');

$U_id=$_POST['U_id'];
$name=$_POST['name'];
$old_password=$_POST['old_password'];
$new_password=$_POST['new_password'];
  
  
if(!empty($U_id)){
	

  $U_id = htmlspecialchars($U_id);
  $name = htmlspecialchars($name);
  $old_password = htmlspecialchars($old_password);
  $new_password = htmlspecialchars($new_password);

  if(!empty($_FILES['image']['name'])){
  $temp=$_FILES['image']['tmp_name'];
  $pic="../public/images/".$_FILES['image']['name'];
  move_uploaded_file($temp,$pic);
  }
  if(empty($name) && empty($new_password) && empty($pic))
  {
	header("location:../public/userdashboard.php");
  }

 else{

$Id=updateUser($U_id,$name,$old_password,$new_password,$pic);

if(is_numeric($Id)){
  header("location:../public/userdashboard.php");
}
 else{ 
  header("location:../public/userdashboard.php");
 }

  }
}
?>