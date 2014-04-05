<?php
include ('../model/student.php');

$S_id=$_POST['S_id'];
$story=$_POST['story'];
$reason=$_POST['reason'];
$code_id=$_POST['code_id'];

studentStory($S_id,$story,$reason,$code_id);

header("location:../public/studentdashboard.php?S_id=$S_id");

?>