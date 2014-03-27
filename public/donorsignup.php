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

 <!-- <br>
  <br>
  <br>-->

  <!--Form starts here-->
  <div class="container" style="padding:80px 170px 0 170px;">
  	
		<div class="well" style="background-color: rgba(144,144,144,1);">
			<form class="form-horizontal">
						<legend align="center" style="color: white;"><h2>Would you like to donate?</h2><p>Create your account here</p></legend>
						<!-- Text input-->
	<div class="form-group">
  			<label class="col-md-4 control-label" for="textinput" style="color:white;">Your Name:</label> 
  		<div class="col-md-4">
  			<input id="textinput" name="textinput" type="text" placeholder="First Name" class="form-control input-md">
  		</div>
	</div>
	<br>
<!-- Text input-->
	<div class="form-group">
  			<label class="col-md-4 control-label" for="textinput" style="color:white;">Username:</label>  
  		<div class="col-md-4">
 		 	<input id="textinput" name="textinput" type="text" placeholder="Username" class="form-control input-md"> 
  		</div>
	</div>
	<br>

<!--Text input-->
	<div class="form-group">
  			<label class="col-md-4 control-label" for="textinput" style="color:white;">Password:</label> 
  		<div class="col-md-4">
  			<input id="textinput" name="textinput" type="password" placeholder="Password" class="form-control input-md">
  		</div>
	</div>
	<br>

<!--Text input-->
	<div class="form-group">
  			<label class="col-md-4 control-label" for="textinput" style="color:white;">Confirm Password:</label> 
  		<div class="col-md-4">
  			<input id="textinput" name="textinput" type="text" placeholder="Confirm Password" class="form-control input-md">
  		 </div>
	</div>
	<br>

<!--Text input-->
	<div class="form-group">
  			<label class="col-md-4 control-label" for="textinput" style="color:white;">Email Address:</label> 
  		<div class="col-md-4">
  			<input id="textinput" name="textinput" type="text" placeholder="Email Address" class="form-control input-md">
  		</div>
	</div>
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
