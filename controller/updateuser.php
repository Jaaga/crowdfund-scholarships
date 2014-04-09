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

  if(!empty($_FILES['image']['name'])){
  $temp=$_FILES['image']['tmp_name'];
  $pic="../public/images/".$_FILES['image']['name'];
  move_uploaded_file($temp,$pic);
  }
  if(empty($name) && empty($old_password) && empty($new_password) && empty($pic))
  {
	header("location:../public/userdashboard.php?U_id=$U_id");
  }

 else{

$Id=updateUser($U_id,$name,$old_password,$new_password,$pic);

if(is_numeric($Id)){
  header("location:../public/userdashboard.php?U_id=$Id");
}
 else{ ?>
      <!DOCTYPE html>
          <html>
          <body>
            <form name="studentForm" method="post" action="$_SERVER['HTTP_REFERER']">
              <input type="hidden" name="wrong" value="<?php echo $Id; ?>">
              <input type="hidden" name="name" value="<?php echo $name; ?>">

            <script language="JavaScript">document.studentForm.submit();
            </script>
      
            </form>
          </body>
          </html>
<?php
 }

  }
}
?>