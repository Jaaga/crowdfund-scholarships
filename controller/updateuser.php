<?php
include ('../model/user.php');

$U_id=$_POST['U_id'];
$name=$_POST['name'];
$old_password=$_POST['old_password'];
$new_password=$_POST['new_password'];

if(isset($U_id)){
	

  $U_id = htmlspecialchars($U_id);
  $name = htmlspecialchars($name);
  $old_password = htmlspecialchars($old_password);
  $new_password = htmlspecialchars($new_password);

  if(!empty($_FILES['image_path']['name'])){
  $temp=$_FILES['image_path']['tmp_name'];
  $pic="../public/images/".$_FILES['image_path']['name'];
  move_uploaded_file($temp,$pic);
  }

  if(empty($name) && empty($old_password) && empty($new_password) && empty($pic))
  {
	header("location:../public/userdashboard.php?U_id=$U_id");
  }

 else{

$Id=updateUser($U_id,$name,$old_password,$new_password,$pic);

header("location:../public/userdashboard.php?U_id=$Id");
  }
}
?>