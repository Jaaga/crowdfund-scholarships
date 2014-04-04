<?php
include ('../model/student.php');

$S_id=$_POST['S_id'];
$story=$_POST['story'];
$reason=$_POST['reason'];

studentStory($S_id,$story,$reason);

header("location:../public/studentdashboard.php?id=$S_id");

?>