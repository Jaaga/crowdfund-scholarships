<?php
include ('../model/user.php');
$logout=logout();
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
       
       <p align="center" style="font-family: verdana;"><?php echo $logout; ?> !!</p>
       
       </div>

    </div>
    </div>
          <hr>
    <h6 align="center"> This Page will be redirected in a few seconds...</h6>
</body>
</html><?php
header("Refresh: 1;url=../public/index.php");
?>
