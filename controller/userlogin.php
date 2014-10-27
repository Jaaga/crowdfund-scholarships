
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<div id="container" >
    Loading Please Wait....
    <img src="../public/images/9150.gif" alt="Searching" />
</div>
</body>
</html>
<?php
 include ('../model/user.php');
 
 if ($_POST['email']) {
 $email=$_POST['email'];
 $password= $_POST['password'];
// $from=$_SERVER['HTTP_REFERER'];
 
$email = htmlspecialchars($email);
$password = htmlspecialchars($password);

$User=userLogin($email,$password);
 if(is_numeric($User))
 {
 	$U_id=$User;
 	session_start();
  $_SESSION['email']=$email;
  $_SESSION['U_id']=$U_id;
  setcookie("email", "$email", time()+3600, "/","", 0);
  // setcookie("U_id", "$U_id", time()+3600, "/", "",  0);
 	//$_SESSION['password']=$password;
 //var_dump($_SESSION);
  header("location:../public/listofstudents.php");
 }
  else{  
         session_start();  
         $_SESSION['email']='';
         $_SESSION['password']='';
 	?>
<!DOCTYPE html>
<html>
  <body>
    <form name="studentForm" method="post" action="../public/usersignup.php">
      <input type="hidden" name="user" value="<?php echo $User; ?>">
        
    <script language="JavaScript">document.studentForm.submit();
    </script>
      
    </form>
  </body>
</html>

 <?php         
 }

}
 ?> 