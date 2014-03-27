<?php session_start();
      include('../model/student.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
  <title>Students</title>
  <link href="./dist/css/bootstrap.css" rel="stylesheet">
  
  <style type="text/css">
  

  
  body{	
background: url("./images/wood1.png");
background-repeat:repeat;
padding-top: 60px;
}
  

  img {
  position: relative;
  }

  .pitch {
  position: absolute;
  top: 80px;
  left: 100px;
  right:100px;
  width: 100%;
  margin: 0 auto;
  width: 1000px;
  height: 50px;
  color: white;
  }

  .col-lg-4{
  margin:18px;
  }
  #hiw{
  font-family:'Cabin Sketch' cursive;
  font-size: 72px;}
  </style>
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
    
      <div class="navbar-header" style="height: 50px;">
    
          
            <a class="navbar-brand" href="index.php">

            <h1 style="font-family:'Cabin Sketch' cursive; margin-top: -9px;">LearnEmp<h1></a>
      </div>
      <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="listofstudents.php">Sponsor</a></li>
                <li><a href="#">Sign Up</a></li>
            </ul>

              
      </div><!--/.navbar-collapse -->
    </div>
</div>
    
  
  <div class="container" align="center">
      <div class="row">
    <h1 id="hiw">Meet the Students</h1>
  
  <?php $students= getStudentList();
        foreach($students as $student){ 
  ?>

  <?php 
            $D_id=$_GET['id'];   
            $profilelink='studentprofile.php?id='.$student['S_id'].'&id2='.$D_id.'';
  ?>
  <a href="<?php echo $profilelink; ?>" style="text-decoration:none;color:#111111;">  <div class="col-lg-4" style="width:350px; text-align: justify;">
      <div class="well" style="width: 340px;">
        <img src=<?php echo $student['image_path'];
         ?> alt="donate"align="center" style="height:200px; width:300px" ></img> 
        <br>
        <h3><?php echo $student['fname']; ?></h3>
        <p><?php echo $student['para']; ?></p>
        </a>
    <div class="row">
      <!--<div class="col-lg-6"><a class="btn btn-danger" href="<?php echo $profilelink; ?>">Donate</a></div>-->
        <form method="POST" action="donate.php">
          <input type="hidden" name="D_id" value="<?php echo $D_id ; ?>" >
          <input type="hidden" name="S_id" value="<?php echo $student['S_id']; ?>" >
          
          <!--<div class="col-lg-6">-->

         <div class="col-md-8">

            <input type="text" name="amount" placeholder="$ " class="form-control input-md" > 

          </div>

          <div class="col-md-4">
            
              <!--<div class="col-lg-6">-->
                <input type="submit" value="Donate" class="btn btn-primary">

                             
          </div>

      </form>
      </div>
      </div></div>
  <?php 
       }

  ?>
  </div>
            </div> 
        
          <!--<div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
              <span class="sr-only">40% Complete (success)</span>
            </div></div> -->
        

<hr>
  <footer class="footer" style="text-align:center">
    <nav>
      <ul>
        <a href="index.php">Home </a> |
        <a href= "aboutus.php">About Us</a> |
        <a href= "#hiw">How It Works</a> |
        <a href="#faq">FAQ</a> |
        <a href="#contact">Contact</a>  
      </ul>
    </nav> 
  </footer> 
</body>

</html> 