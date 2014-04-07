<?php
include ('../model/student.php');

$S_id=$_POST['S_id'];
$story=$_POST['story'];
$reason=$_POST['reason'];
$CS_id=$_POST['CS_id'];
$Git_id=$_POST['Git_id'];
$CA_id=$_POST['CA_id'];

$S_id = htmlspecialchars($S_id);
$story = htmlspecialchars($story);
$reason = htmlspecialchars($reason);
$CS_id = htmlspecialchars($CS_id);
$Git_id = htmlspecialchars($Git_id);
$CA_id = htmlspecialchars($CA_id);

if (empty($story) && empty($reason) && empty($CS_id) && empty($Git_id) && empty($CA_id)) { 

   header("location:../public/studentdashboard.php?S_id=$S_id");
} 
else{



studentStory($S_id,$story,$reason,$CS_id,$Git_id,$CA_id);

header("location:../public/studentdashboard.php?S_id=$S_id");

}
?>