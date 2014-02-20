<?php
                $con=mysqli_connect("localhost","root","123","LearnEmp");
// Check connection
         if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 $id1 = $_GET['id'];
 $id2 = $_GET['id2'];
$sql=mysqli_query($con,"INSERT INTO donation (D_id,S_Id,date,amount)
  VALUES
  ('$id1', '$id2',NOW(),25.22 )");


if (!($con))
  {
  die('Error: ' . mysqli_error($con));
  }
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
       
       <p align="center" style="font-family: verdana;">THNAK YOU FOR YOUR HELP AND SUPPORT TOWARDS EMPOWERING EDUCATION </p>
       
       </div>

    </div>
    </div>
          <hr>
    <h6 align="center"> This Page will be redirected in few seconds...</h6>
</body>
</html>
<?php
  header("Refresh: 6;url='index.php'");

mysqli_close($con);

?>