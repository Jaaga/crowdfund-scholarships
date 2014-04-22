<?php
include ('../model/student.php');
include ('../model/user.php');

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

// deal with any unwanted HTML (scripting attacks):

   $sname = htmlspecialchars($sname);
   $gender = htmlspecialchars($gender);
   $email=htmlspecialchars($email);
   $Phone_Number = htmlspecialchars($Phone_Number);
   $address = htmlspecialchars($address);
   $pincode=htmlspecialchars($pincode);
   $country = htmlspecialchars($country);
   $course = htmlspecialchars($course);
   $scholar_AMT=htmlspecialchars($scholar_AMT);
   $para = htmlspecialchars($para);
   



$row= createStudent($U_id,$sname,$gender,$email,$Phone_Number,$address,$pincode,$country,
	$course,$scholar_AMT,$para,$pic);

if(is_array($row)){
      $S_id= $row['S_id'];
      session_start();
      $_SESSION['email']=$email;

      header("location:../public/studentdashboard.php?S_id=$S_id");  
}
else{
      
 ?>
  <!doctype <!DOCTYPE html>
 <html>
  <body>
    <form name="studentForm" method="post" action="../public/application.php">
       <input type="hidden" name="U_id" value="<?php echo $U_id; ?>">
       <input type="hidden" name="sname" value="<?php echo $sname; ?>">
       <input name="email" type="hidden" value="<?php echo $email; ?>">
       <input name="Phone_Number" type="hidden" value="<?php echo $Phone_Number; ?>">
       
       <input name="pincode" type="hidden" value="<?php echo $pincode; ?>">
       <input name="scholar_AMT" type="hidden" value="<?php echo $scholar_AMT; ?>" >
       <input name="invalid" type="hidden" value="<?php echo $row; ?>" > 
      
        
    <script language="JavaScript">document.studentForm.submit();
    </script>
      
    </form>
  </body>
</html>

<?php
}

    
}
?>
