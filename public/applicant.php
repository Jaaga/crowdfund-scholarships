<?php
include ('../model/student.php');
$temp=$_FILES['image_path']['tmp_name'];
  $pic="images/".$_FILES['image_path']['name'];
  move_uploaded_file($temp,$pic);
createStudent($_POST['fname'],$_POST['lname'],$_POST['gender'],$_POST['email'],$_POST['gender'],$_POST['Phone_Number'],$_POST['address'],$_POST['pincode'],$_POST['country'],$_POST['course'],$_POST['scholar_AMT'],$_POST['para'],$_POST['password'],$pic);

?>