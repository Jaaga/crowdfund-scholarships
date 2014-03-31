<?php
   include ('../model/user.php');
   include ('../model/student.php');

   if($_POST['type']=='D'){

        $U_id=createUser($_POST['name'],$_POST['password'],$_POST['email']);
        session_start();
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
			$_SESSION['time'] = time();

			header("location:../public/userdashboard.php?id=$U_id");
    }
    else{

    	createUser($_POST['name'],$_POST['password'],$_POST['email']);
      session_start();
      $_SESSION['email'] = $email;
      $_SESSION['password'] = $password;
      $_SESSION['time'] = time();

      header("location:../public/application.php?id=$U_id");
    	
    }

?>