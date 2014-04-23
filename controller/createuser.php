
<?php

   include ('../model/user.php');
   include ('../model/student.php');
   $name=$_POST['name'];
   $password= $_POST['password'];
   $email=$_POST['email'];

   if(empty($name) && empty($password) && empty($email)){

    header("location:../public/usersignup.php");
   }


else{
  if(isset($_POST['type'])){
   
   $email = htmlspecialchars($email);
   $password = htmlspecialchars($password);
   $name=htmlspecialchars($name);

   if($_POST['type']=='D')
   {

      $User=createUser($name,$password,$email);
      if(is_numeric($User)){
        $U_id=$User;
        session_start();
			  $_SESSION['email'] = $email;
			 // $_SESSION['U_id'] = $U_id;
        setcookie("email", "$email", time()+3600, "/","", 0);
			  //$_SESSION['time'] = time();

			  header("location:../public/userdashboard.php");
      }
      else{ 
           $User="Email already exists";
        ?>
          <!DOCTYPE html>
          <html>
          <body>
            <form name="studentForm" method="post" action="../public/usersignup.php">
              <input type="hidden" name="invalidemail" value="<?php echo $User; ?>">
              <input type="hidden" name="name" value="<?php echo $name; ?>">

            <script language="JavaScript">document.studentForm.submit();
            </script>
      
            </form>
          </body>
          </html>
<?php
      }
    }

    else{

    	$User=createUser($name,$password,$email);

      if(is_numeric($User)){
        $U_id=$User;
        
        //$_SESSION['password'] = $password;
        //$_SESSION['time'] = time(); ?>
     <!DOCTYPE html>
      <html>
      <body>
        <form name="userForm" method="post" action="../public/application.php">
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="U_id" value="<?php echo $U_id; ?>">
        
        <script language="JavaScript">document.userForm.submit();
        </script>
      
        </form>
      </body>
      </html>


<?php      
    }
          else{ 
            $User="Email already exists";
        ?>
        <!DOCTYPE html>
          <html>
          <body>
           <form name="userForm" method="post" action="../public/usersignup.php">
           <input type="hidden" name="name" value="<?php echo $name; ?>">
           <input type="hidden" name="invalidemail" value="<?php echo $User; ?>">
      
          <script language="JavaScript">document.userForm.submit();
          </script>
      
        </form>
      </body>
      </html>
<?php
    }

}

}
}
?>

    

