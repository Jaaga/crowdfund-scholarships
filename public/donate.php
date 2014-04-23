<?php
include ('../model/user.php');
if(!isset($_COOKIE['email'])){
  header("location:../public/usersignup.php?id=x");
}
$email=$_POST['email'];
$S_id=$_POST['S_id'];
$amount=$_POST['amount']; 

$email = htmlspecialchars($email);
$S_id = htmlspecialchars($S_id);
$amount = htmlspecialchars($amount);
if(empty($amount)){
  header("location:../public/listofstudents.php");
}
else{
giveDonation($email,$S_id,$amount);
}
?>

<html>

<head>
     <link href="../dist/css/bootstrap.css" rel="stylesheet">
  
  <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
</head>

<body>

  
       <div class="jumbotron" style="background color : blue" > 
    <div class="container">
    
      <div class="row">
       
       <p align="center" style="font-family: verdana;">THANK YOU FOR YOUR HELP AND SUPPORT TOWARDS EMPOWERING EDUCATION </p>
       
       </div>

    </div>
    </div>
          <hr>
    <h6 align="center"> This Page will be redirected in a few seconds...</h6>
</body>
</html>
<?php
header("Refresh: 3;url='userdashboard.php");
?>
