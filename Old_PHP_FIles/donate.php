<?php
include '..model/donor.php';
//include '../src/donation.php';
 giveDonation($_POST['D_id'],$_POST['S_id'],$_POST['$amount']);
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
       
       <p align="center" style="font-family: verdana;">THNAK YOU FOR YOUR HELP AND SUPPORT TOWARDS EMPOWERING EDUCATION </p>
       
       </div>

    </div>
    </div>
          <hr>
    <h6 align="center"> This Page will be redirected in few seconds...</h6>
</body>
</html>
<?php
redirectToStudent($D_Id);
?>
