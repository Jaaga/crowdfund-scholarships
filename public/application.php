  
  <!DOCTYPE html>
  <html>
  <head>
  <style>
   body 
    {
  background: url("./images/wood1.png");
  background-repeat:repeat;
  }
  	.well{
  	position: relative;
  	top: 100px;
  	}
  	

  </style>
  <link href="../dist/css/bootstrap.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
          <link href='http://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>	
  	<link href='http://fonts.googleapis.com/css?family=Stint+Ultra+Expanded' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cabin+Sketch' rel='stylesheet' type='text/css'>


  </head>
  <body>

  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
      
        <div class="navbar-header" style="height: 50px;">
      
            
              <a class="navbar-brand" href="index.php"><h1 style="font-family:'Cabin Sketch' cursive; margin-top: -9px;">LearnEmp<h1></a>
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
  <!--<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            
            <a class="navbar-brand" href="index.html" style="font-family: 'Audiowide', cursive;">LearnEmp</a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
  		   
              <li><a href="how.html">How it Works</a></li>
              <li><a href="Students_list.htm">Students</a></li>
              <li><a href="About.html">About</a></li>
  			<li><a href="Contact.html">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>

  <div class="container">
  <div class="well">
  <form class="form-horizontal" action="applicant.php" method="post" autocomplete="on" enctype="multipart/form-data">
  <fieldset>

  <!-- Form Name -->
  <legend align="center"><h1>Application for Scholarship</h1></legend>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">First Name:</label> 
    <div class="col-md-4">
    <input name="fname" type="text" placeholder="First Name" class="form-control input-md">
    
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">Last Name:</label>  
    <div class="col-md-4">
    <input name="lname" type="text" placeholder="Last Name" class="form-control input-md"> 
    </div>
  </div>

  <!-- Multiple Radios -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="radios">Gender:</label>
    <div class="col-md-4">
    <div class="radio">
      <label for="radios-0">
        <input type="radio" name="gender" id="radios-0" value="F" checked="checked">
        Female
      </label>
  	</div>
    <div class="radio">
      <label for="radios-1">
        <input type="radio" name="gender" id="radios-1" value="M">
        Male
      </label>
  	</div>
    </div>
  </div>

  <!-- Select Basic 
  <div class="form-group">
    <label class="col-md-4 control-label" for="selectbasic">Select Basic:</label>
    <div class="col-md-4">
      <select id="selectbasic" name="selectbasic" class="form-control">
        <option value="1">Option one</option>
        <option value="2">Option two</option>
  	  <option value="1">Option one</option>
        <option value="2">Option two</option>
  	   <option value="1">Option one</option>
        <option value="2">Option two</option>
  	  <option value="1">Option one</option>
        <option value="2">Option two</option>
  	   <option value="1">Option one</option>
        <option value="2">Option two</option>
  	  <option value="1">Option one</option>
        <option value="2">Option two</option>
  	   <option value="1">Option one</option>
        <option value="2">Option two</option>
  	  <option value="1">Option one</option>
        <option value="2">Option two</option>
      </select>
    </div>
  </div>-->

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">E-mail:</label>  
    <div class="col-md-4">
    <input name="email" type="email" placeholder="e-mail" class="form-control input-md">
      
    </div>
  </div>
  
  
<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password:</label>
  <div class="col-md-4">
    <input name="password" type="password" placeholder="Password" class="form-control input-md">    
  </div>
</div>
  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">Contact Number:</label>  
    <div class="col-md-4">
    <input name="Phone_Number" type="text" placeholder="Contact Number" class="form-control input-md">
      
    </div>
  </div>

  <!-- Text area-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="textarea">Address:</label>
    <div class="col-md-4">                     
      <textarea class="form-control" name="address">Address</textarea>
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">Pin Code:</label>  
    <div class="col-md-4">
    <input id="textinput" name="pincode" type="text" placeholder="Pin Code" class="form-control input-md">
    
    </div>
  </div>

  <!-- Select Basic -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="selectbasic">Country:</label>
    <div class="col-md-4">
      <select name="country" class="form-control">
        <option value="#">Select Country</option>
        <option value="Armenia">Armenia</option>
      </select>
    </div>
  </div>

  <!-- Select Basic 
  <div class="form-group">
    <label class="col-md-4 control-label" for="selectbasic">University:</label>
    <div class="col-md-4">
      <select id="selectbasic" name="selectbasic" class="form-control">
        <option value="1">Select University</option>
        <option value="2">Jaaga Study</option>
      </select>
    </div>
  </div> -->

  <!-- Select Basic -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="selectbasic">Course:</label>
    <div class="col-md-4">
      <select name="course" class="form-control">
        <option value="#">Select Course</option>
        <option value="cooking">Culinary Studies</option>
      </select>
    </div>
  </div>

  <!-- Textarea -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="textarea">Description of Course:</label>
    <div class="col-md-4">                     
      <textarea class="form-control" name="para">Please describe why you want to take up the course </textarea>
    </div>
  </div>

  <!-- for uploading any-file-->
  <div class="form-group">
    <label class="col-md-4 control-label">Upload-Document:</label> 
  <div class="col-md-4">
  <input name="image_path" type="file" size="60">
  </div>
  </div>


  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">Scholarship Amount:</label>  
    <div class="col-md-4">
    <input name="scholar_AMT" type="text" placeholder="state the amount required" class="form-control input-md">

    </div>
  </div>


  <!-- Button -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="singlebutton"></label>
    <div class="col-md-4" align="center">
      <button type="submit" name="singlebutton" class="btn btn-success btn-lg">Submit!</button>
    </div>
  </div>

  </fieldset>
  </form>
  </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <hr>
  <footer class="footer"  align="center">
  <a href="index.html">Home &nbsp |</a>&nbsp &nbsp
  <a href="FAQ.html">FAQ &nbsp |</a>&nbsp &nbsp 
  <a href="About.html">About &nbsp |</a>&nbsp &nbsp 
  <a href="Contact.html">Contact &nbsp |</a>&nbsp &nbsp
  <a href="Donor_signup.html">Donor &nbsp |</a>
  <br><br> Site Designed by |<a href="http://www.jaaga.in"> Jaaga Crowd-funding Group</a>
  </footer>
   
  </body>
  </html>

