<?php
include ('../model/student.php');

if(isset($_POST['U_id'])){
$temp=$_FILES['image_path']['tmp_name'];
  $pic="../public/images/".$_FILES['image_path']['name'];
  move_uploaded_file($temp,$pic);

$U_id=$_POST['U_id'];
$sname=$_POST['sname'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$Phone_Number=$_POST['Phone_Number'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];
$country=$_POST['country'];
$course=$_POST['course'];
$scholar_AMT=$_POST['scholar_AMT'];
$para=$_POST['para'];


$row= createStudent($U_id,$sname,$gender,$email,$Phone_Number,$address,$pincode,$country,
	$course,$scholar_AMT,$para,$pic);


$S_id= $row['S_id'];

header("location:../public/studentdashboard.php?S_id=$S_id");
    
}
?>
<!--<!doctype <!DOCTYPE html>
<html>
  <body>
    <form name="studentForm" method="post" action="../public/studentdashboard.php">
      <input type="hidden" name="S_id" value=// echo $S_id;">
        
    <script language="JavaScript">document.studentForm.submit();
    </script>
      
    </form>
  </body>
</html> -->