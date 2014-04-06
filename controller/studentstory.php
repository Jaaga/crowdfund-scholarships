<?php
include ('../model/student.php');

//if (empty($_POST['CS_id'] && $_POST['Git_id'] && $_POST['CA_id']) {
    
  //  $S_id=$_POST['S_id'];
   // echo "you have to fill atleast one of the ID among three";
    //header("Refresh: 2;url='studentdashboard.php?S_id=$S_id");
 //}
//else{

$S_id=$_POST['S_id'];
$story=$_POST['story'];
$reason=$_POST['reason'];
$CS_id=$_POST['CS_id'];
$Git_id=$_POST['Git_id'];
$CA_id=$_POST['CA_id'];

studentStory($S_id,$story,$reason,$CS_id,$Git_id,$CA_id);

header("location:../public/studentdashboard.php?S_id=$S_id");
//}
?>