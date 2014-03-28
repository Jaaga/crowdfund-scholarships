<!DOCTYPE html>
<html lang="en">
<head>
  <title>Students</title>
  <link href="./dist/css/bootstrap.css" rel="stylesheet">
  
 <style>
 	body{
background: url("./images/wood1.png");
background-repeat:repeat;
}
	h2{font-family:'Cabin Sketch' cursive;
font-size: 64px;}
 </style>

<body>
  	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    	<div class="container">
    
    		<div class="navbar-header" style="height: 50px;">
    
          
            	<a class="navbar-brand" href="index.php"><h1 style="font-family:'Cabin Sketch' cursive; margin-top: -9px;">LearnEmp<h1></a>
        	</div>
         
        	<div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="listofstudents.php">Sponsor</a></li>
                <li><a href="#">Sign Up</a></li>
            </ul>

        	<div class="navbar-collapse collapse">
              <div class="navbar-form navbar-right">
                <button type="button" class="btn btn-danger">Sign Up</button>
                <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Sign in</button> 
              </div><!--/.navbar-collapse -->
            </div>
        </div>
    
            </div><!--/.navbar-collapse -->
        	</div>
    	</div>
    </div>

 <!-- <br>
  <br>
  <br>-->

  <!--Form starts here-->
  <div class="container" style="padding:80px 170px 0 170px;">
  	
		<div class="well" style="background-color: rgba(144,144,144,1);">
			<form class="form-horizontal" action="createdonor.php" method="post">
						<legend align="center" style="color: white;"><h2>Would you like to donate?</h2><p>Create your account here</p></legend>
						<!-- Text input-->
	<div class="form-group">
  			<label class="col-md-4 control-label" for="textinput" style="color:white;">Your Name:</label> 
  		<div class="col-md-4">
  			<input name="name" type="text" placeholder="First Name" class="form-control input-md">
  		</div>
	</div>
	<br>
<!-- Text input-->
	<div class="form-group">
  			<label class="col-md-4 control-label" for="textinput" style="color:white;">Email:</label>  
  		<div class="col-md-4">
 		 	<input  name="email" type="text" placeholder="Username" class="form-control input-md"> 
  		</div>
	</div>
	<br>

<!--Text input-->
	<div class="form-group">
  			<label class="col-md-4 control-label" for="textinput" style="color:white;">Password:</label> 
  		<div class="col-md-4">
  			<input name="password" type="password" placeholder="Password" class="form-control input-md">
  		</div>
	</div>
	<br>

<!--Text input-->
	<div class="form-group">
  			<label class="col-md-4 control-label" for="textinput" style="color:white;">Confirm Password:</label> 
  		<div class="col-md-4">
  			<input name="confpassword" type="password" placeholder="Confirm Password" class="form-control input-md">
  		 </div>
	</div>
	<br>
<!-- Button -->
<br>
	<div class="form-group">
 			 <label class="col-md-4 control-label" for="singlebutton"></label>
  		<div class="col-md-4" align="center">
    		<button id="singlebutton" type="submit" name="singlebutton" class="btn btn-success btn-lg">Submit!</button>
  		</div>



				</div>
			</form>
		</div>
		
	</div>


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
