<?php
include ('../model/student.php');

$S_id=$_POST['S_id'];
$story=$_POST['story'];
$reason=$_POST['reason'];
$CS_id=$_POST['CS_id'];
$Git_id=$_POST['Git_id'];


studentStory($S_id,$story,$reason,$CS_id,$Git_id);

header("location:../public/studentdashboard.php?S_id=$S_id");

?>