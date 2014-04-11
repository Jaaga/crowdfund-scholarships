
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
 
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 $email=$_POST['email'];
 $password= $_POST['password'];
// $from=$_SERVER['HTTP_REFERER'];
 
$email = htmlspecialchars($email);
$password = htmlspecialchars($password);

$User=userLogin($email,$password);
 if(is_numeric($User))
 {
 	$U_id=$User;
 	//session_start();
 	//$_SESSION['email']= $email;
 	//$_SESSION['password']=$password;
 	header("location:../public/userdashboard.php?U_id=$U_id");
 }
  else{  
         session_start();  
         $_SESSION['email']='';
         $_SESSION['password']='';
 	?>
<!doctype <!DOCTYPE html>
<html>
  <body>
    <form name="studentForm" method="post" action="../public/index.php">
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