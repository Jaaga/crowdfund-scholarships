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
    
          
            <a class="navbar-brand" href="home_v9.html"><h1 style="font-family:'Cabin Sketch' cursive; margin-top: -9px;">LearnEmp<h1></a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="listofstudents_v8.html">Sponsor</a></li>
                <li><a href="#">Sign Up</a></li>
            </ul>

        <div class="navbar-collapse collapse">
              <form class="navbar-form navbar-right" role="form">
                <div class="form-group">
                  <input type="text" placeholder="Email" class="form-control">
                </div>

                <div class="form-group">
                  <input type="password" placeholder="Password" class="form-control">
                </div>

                <button type="submit" class="btn btn-success" style="font-family: verdana;">Sign in</button> 
                &nbsp 

              </form>
              
              </div><!--/.navbar-collapse -->
        </div>
      </div>
    </div>
    
  <br>
  <br>
  <br>

  <div class="container" align="center">
      <div class="row">
    <h1 id="hiw">Meet the Students</h1>
  
  <?php $students= getStudentList();
        foreach($students as $student){
      echo '<div class="col-lg-4" style="width:350px; text-align: justify;">';
      echo '<div class="well" style="width: 340px;">';
      echo '<img src='.$student['image_path'].' alt="donate"align="center" style="height:200px; width:300px" ></img>'; 
      echo  '<br>';
      echo  '<h3>'.$student['fname'].'</h3>';
      echo    '<p>'.$student['para'].'</p>';
      echo '</div></div>';
          
          }

           ?>
        
          <!--<div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
              <span class="sr-only">40% Complete (success)</span>
            </div></div> -->
          </div><p style="text-align:left"><b>4</b> days to go <b> &nbsp&nbsp&nbspRs.40,000</b> pledged
             &nbsp&nbsp<button type="button" class="btn btn-success" style="margin-bottom:5px">Donate</button></p>
            </div>
          </div>
        </div>   


  <footer class="footer" style="text-align:center">
    <nav>
      <ul>
        <a href="home_v9.html">Home </a> |
        <a href= "#about">About Us</a> |
        <a href= "#hiw">How It Works</a> |
        <a href="#faq">FAQ</a> |
        <a href="#contact">Contact</a>  
      </ul>
    </nav> 
  </footer> 
</body>

</html> 