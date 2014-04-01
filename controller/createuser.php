<?php
   include ('../model/user.php');
   include ('../model/student.php');

if(isset($_POST['type'])){
   $name=$_POST['name'];
   $password= $_POST['password'];
   $email=$_POST['email'];

   if($_POST['type']=='D'){

      $U_id=createUser($name,$password,$email);
      session_start();
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
			$_SESSION['time'] = time();

			header("location:../public/userdashboard.php?id=$U_id");
    }
    else{

    	$U_id=createUser($name,$password,$email);
      session_start();
      $_SESSION['email'] = $email;
      $_SESSION['password'] = $password;
      $_SESSION['time'] = time(); ?>
<!doctype <!DOCTYPE html>
<html>
  <body>
    <form name="userForm" method="post" action="../public/application.php">
      <input type="hidden" name="user" value="<?php echo $name; ?>">
      <input type="hidden" name="user" value="<?php echo $password; ?>">
      <input type="hidden" name="user" value="<?php echo $email; ?>">
      <input type="hidden" name="user" value="<?php echo $U_id; ?>">
        
    <script language="JavaScript">document.userForm.submit();
    </script>
      
    </form>
  </body>
</html>>
    

<?php

      //header("location:../public/application.php?id=$U_id");
    	
    }
}
?>