<?php
   include ('../model/user.php');
   include ('../model/student.php');

if(isset($_POST['type'])){
   $name=$_POST['name'];
   $password= $_POST['password'];
   $email=$_POST['email'];
   $email = htmlspecialchars($email);
   $password = htmlspecialchars($password);
   $name=htmlspecialchars($name);

   if($_POST['type']=='D'){

      $User=createUser($name,$password,$email);
      if(is_numeric($User)){
        $U_id=$User;
        session_start();
			  $_SESSION['email'] = $email;
			  $_SESSION['password'] = $password;
			  $_SESSION['time'] = time();

			  header("location:../public/userdashboard.php?id=$U_id");
      }
      else{ 
           $User="Email already exists";
        ?>
          <!doctype <!DOCTYPE html>
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

        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['time'] = time(); ?>
      <!doctype <!DOCTYPE html>
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
        <!doctype <!DOCTYPE html>
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
?>

    

