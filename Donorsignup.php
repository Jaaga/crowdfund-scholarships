<?php
$con=mysqli_connect("localhost","root","123","LearnEmp");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO donor (name, password,email)
VALUES
('$_POST[name]','$_POST[password]','$_POST[email]')";

if (!mysqli_query($con,$sql))
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
       
       <p align="center" style="font-family: verdana;">Signed-up Successfully</p>
       
       </div>

    </div>
    </div>
          <hr>
    <h6 align="center"> This Page will be redirected in few seconds...</h6>
</body>
</html>

<?php
       
    
          $sql1="SELECT * FROM donor WHERE email='$_POST[email]' and password='$_POST[password]'";
          $result=mysql_query($con,$sql1);
          $row=mysql_fetch_array($result);
          $D_id=$row['D_id'];
   
          
  //   $count=mysql_num_rows($result);



// If result matched $myusername and $mypassword, table row must be 1 row
//if($count==1){

//// Register $myusername, $mypassword and redirect to file "login_success.php"
//$_SESSION['usr']= "";
//$_SESSION['pawd']="mypassword"; 
 
header("Refresh: 3;url=Students_list.php?id=".$D_id);
 
     
     mysqli_close($con);
?>