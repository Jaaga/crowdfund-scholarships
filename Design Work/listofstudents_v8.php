// <?php
//if(isset($_GET('donate'))){
 // include ''
//}

//?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
  <title>Students</title>
  <link href="./dist/css/bootstrap.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Cabin+Sketch' rel='stylesheet' type='text/css'>
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
    <?php 
    include '../model/student.php';
    $students=getStudentList();
    foreach($students as $student):
    ?>
      <div class="col-lg-4" style="width:350px; text-align: justify;">
        <div class="well" style="width: 340px;">
         <!-- echo "<img src='http://localhost/cms/1/". $image_query_fetch['images'] .' -->
          <img src= <?php echo 'http:../Old_PHP_FIles/'.$student['image_path']; ?> alt="donate"align="center" style="height:200px; width:300px" ></img> 
          <br>
          <h3><?php echo $student['fname']; ?></h3>
          <p ><?php echo $student['para']; ?></p>
        
          <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-    valuemax="100" style="width: 40%">
              <span class="sr-only">40% Complete (success)</span>
            </div>
          </div><p style="text-align:left"><b>4</b> days to go <b> &nbsp&nbsp&nbspRs.40,000</b> pledged
             &nbsp&nbsp<button type="button" href="?donate" class="btn btn-success" style="margin-bottom:5px">Donate</button></p>
        </div>
      </div>
    <?php endforeach; ?>
      
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
