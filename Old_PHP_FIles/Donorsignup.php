<?php

include '../model/donor.php';
createDonor($_POST['name'],$_POST['password'],$_POST['email']);
  ?>

<html>

<head>
     <link href="./dist/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
</head>

<body>
    
       <div class="jumbotron" style="background color : blue" > 
    <div class="container">
  
      <div class="row">
       
       <p align="center" style="font-family: verdana;">Signed-up Successfully</p>
       
       </div>

    </div>
    </div>
          <hr>
    <h6 align="center"> This Page will be redirected in few seconds...</h6>
</body>
</html>

