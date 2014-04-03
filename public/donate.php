<?php
include ('../model/user.php');

$U_id=$_POST['U_id'];
$S_id=$_POST['S_id'];
$amount=$_POST['amount']; 

giveDonation($U_id,$S_id,$amount);
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
redirectToStudent($U_id);
?>
