<?php
if(isset($_POST['invalidemail'])){
  $Invalidemail=$_POST['invalidemail'];
  $name=$_POST['name'];
}

?>
<!DOCTYPE html>
<html lang="en">
  
<head>
  <title>Signup / Login</title>
  <link href="./dist/css/bootstrap.css" rel="stylesheet">
  <link href="./dist/css/custom.css" rel="stylesheet">
</head>
  
<style>

  @font-face{
      font-family:'KGSecondChancesSketch'; 
      src:url('fonts/KGSecondChancesSketch.ttf');

     /* font-family: 'CabinSketch';
      src: url('fonts/CabinSketch-Regular.otf');*/
  }

  body{
    background: url("./images/backb.jpg");
    background-repeat:repeat;
    padding-top: 60px; }

  }


  h2{
      font-family:'Cabin Sketch' cursive;
    font-size: 40px;
    text-align:left;
  }  
</style>

<body>


    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
    
        <div class="navbar-header" style="height: 50px;">
    
          
              <a class="navbar-brand" href="index.php"><h1 style="font-family:'KGSecondChancesSketch' cursive; margin-top: -9px;">LearnEm<h1></a>
          </div>
         
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="listofstudents.php">Sponsor</a></li>
            </ul>

          
        </div>
    
            </div><!--/.navbar-collapse -->
          </div>
      </div>
    </div>



  

  <!--Form starts here-->
<div class="container" > <!-- style="padding:80px 170px 0 170px;" -->
	<div class="row" style="padding-top: 10px; padding-bottom:20px">
		<!--<div class="well" style="background-color: rgba(144,144,144,1);">-->
 <?php   if(isset($_GET['id'])){
  $wrong="Your are not Loggedin";
?>
    <div class="alert alert-danger"><?php echo $wrong; ?></div>
	<?php } ?>	
			<div class="col-md-4">
				<div class="well">
					<h2>Login</h2>
					Please login to continue

					<br>
          <br>
          <form action="../controller/userlogin.php" method="post" data-toggle="validator" role="form">
            <div class="form-group">
              <label class="control-label" for="textinput" style="color:black;">Email:</label>  
            <input  name="email" type="email" placeholder="Username" class="form-control input-md" 
            data-error="Invalid Email Address" required>
            <div class="help-block with-errors"></div>
            </div>
        
            <div class="form-group">
            <label class="control-label" for="textinput" style="color:black;">Password:</label>       
              <input name="password" type="password" placeholder="Password" 
              class="form-control input-md" data-toggle="validator" data-minlength="6" required>
              <span class="help-block with-errors">Minimum of 6 characters</span>
            </div>

  					<div class="form-group">
       			<label class="control-label" for="singlebutton"></label>
        		<button id="singlebutton" type="submit" name="singlebutton" class="btn btn-success btn-md">Log In</button>	
  					</div>

            </form>
        </div>
      </div>

      <div class="col-md-4">
          <div class="well">
          <h2>New User ?</h2>
          You need to have an account to continue
          <br>
          <br>
          <form action="../controller/createuser.php" method="post" data-toggle="validator" role="form">
          <div class="form-group">
            <label class="control-label" for="textinput" style="color:black;">Your Name:</label> 
              <input name="name" type="text" placeholder="Full Name" value="<?php echo $name; ?>" class="form-control input-md">
          </div>

          <div class="form-group">
            <label class="control-label" for="textinput" style="color:black;">Email:</label>  
              
            <input  name="email" type="email" placeholder="Username" class="form-control input-md" 
            data-error="Invalid Email Address" required>
            <div class="help-block with-errors"></div>
            <span style="color:crimson;"><?php echo $Invalidemail; ?></span>
          </div>

          <!--<div class="form-group">
            <label class="control-label" for="textinput" style="color:black;">Confirm Email</label>  
              
            <input  name="email" type="text" placeholder="Confirm Username" class="form-control input-md">
                
          </div>-->

            
          <div class="form-group">
           <label class="control-label" for="textinput" style="color:black;">Password:</label> 
            <input name="password" type="password" placeholder="Password" class="form-control input-md"
            data-toggle="validator" data-minlength="6" id="inputToMatch" required>
              <span class="help-block with-errors">Minimum of 6 characters</span>
          </div>

          <div class="form-group">
            <label class="control-label" for="textinput" style="color:black;">Confirm Password:</label> 
              <input name="password" type="password" placeholder="Password" class="form-control input-md" 
              data-toggle="validator" data-minlength="6" data-match="#inputToMatch" data-error="Password Mismatch">
              <span class="help-block with-errors"></span>
          </div>

         
          
            <div class="form-group">
            <label class="control-label" for="radios" style="color:black;">Are You:</label>
            
            <div class="radio">
              <label for="radios-0">
                <input type="radio" name="type" id="radios-0" value="D" checked="checked" style="text-color:white;">
                  Donor
              </label>
            </div>

            <div class="radio">
              <label for="radios-1">
                <input type="radio" name="type" id="radios-1" value="S" style="color:white;">
                Student
              </label>
            </div>
            </div>

            <div class="form-group">
                <label class="control-label" for="singlebutton"></label>
                <button type="submit" name="singlebutton" class="btn btn-success btn-lg">Sign Up</button> 
            </div>
            </form>


          </div>
      </div>

      <div class="col-md-4">
       <div class="well">
       <h2>Social Media Login</h2>
      
       Alternatively use your social media account to Login
        <br>
        <br>
        <div class="form-group">
            <label class="control-label" for="singlebutton"></label>
            <button id="singlebutton" type="submit" name="singlebutton" class="btn btn-success btn-md">Facebook</button>
        </div>
        <br>
        <div class="form-group">
            <label class="control-label" for="singlebutton"></label>
            <button id="singlebutton" type="submit" name="singlebutton" class="btn btn-success btn-md">Google+</button>
        </div>
        <br>
        <div class="form-group">
            <label class="control-label" for="singlebutton"></label>
            <button id="singlebutton" type="submit" name="singlebutton" class="btn btn-success btn-md">Twitter</button>
        </div>
        </div>
      </div>  
    
    

      

    </div>




  

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
</div>

<!-- Modal -->
<div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Login into Crowdfund</h4>
      </div>

      <div class="modal-body">
        <div class="navbar-collapse collapse">
              <form action="../controller/userlogin.php" method="post">
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Username:</label>  
                    <div class="col-md-4">
                      <input id="email" name="email" type="text" placeholder="Username" class="form-control input-md"> 
                    </div>
                </div>

                <br>
                <br>
  
                <!--Text input-->
                
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Password:</label>

                    <div class="col-md-4">
                      <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md">
                    </div>
                </div>

                <br>
                <br>

                <div class="modal-footer">
                  <button type="submit" class="btn btn-default">Log In</button>
                </div> 
              </form>
        </div>
      </div>      
    </div>
    </div>
</div>

<script type="text/javascript" src="./dist/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="./dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./dist/js/validator.js"></script>

</body>

</html>
