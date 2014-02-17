<!DOCTYPE html>
<html>
<head>
<style>
	.well{
	position: relative;
	top: 100px;
	}
	footer{
	

</style>
<link href="./dist/css/bootstrap.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>	
	<link href='http://fonts.googleapis.com/css?family=Stint+Ultra+Expanded' rel='stylesheet' type='text/css'>


</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
<form class="form-horizontal" action = "application.php" method="post">
<fieldset>

<!-- Form Name -->

<legend align="center"><h1>Application for Scholarship</h1></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">First Name:</label> 
  <div class="col-md-4">
  <input id="textinput" type="text" placeholder="First Name" class="form-control input-md" name="fname">
  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Last Name:</label>  
  <div class="col-md-4">
  <input id="textinput" type="text" placeholder="Last Name" class="form-control input-md" name="lname"> 
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Gender:</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="radios-0">
      <input type="radio" id="radios-0" value="1" checked="checked" name="gender">
      Female
    </label>
	</div>
  <div class="radio">
    <label for="radios-1">
      <input type="radio" id="radios-1" value="2" name="gender">
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
  <input id="textinput" type="email" placeholder="e-mail" class="form-control input-md" name = "email">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Password</label>  
  <div class="col-md-4">
  <input id="pass" type="password" placeholder="" class="form-control input-md" name="password">
  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Contact Number:</label>  
  <div class="col-md-4">
  <input id="textinput" type="text" placeholder="Contact Number" class="form-control input-md" name="Phone_number">
    
  </div>
</div>

<!-- Text area-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Address:</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="address">Address</textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Pin Code:</label>  
  <div class="col-md-4">
  <input id="textinput" type="text" placeholder="Pin Code" class="form-control input-md" name="pincode">
  
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Country:</label>
  <div class="col-md-4">
    <select id="selectbasic" class="form-control" name="country">
      <option value="1">Select Country</option>
      <option value="2">Armenia</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
 <label class="col-md-4 control-label" for="textinput">Course</label>  
  <div class="col-md-4">
  <input id="textinput" type="text" placeholder="Course Name" class="form-control input-md" name="course">
  
    </select>
  </div>
</div>



<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Description of Course:</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" placeholder = "Please describe why you want to take up the course" name="para"> </textarea>
  </div>
</div>

<!-- for uploading any-file-->
<div class="form-group">
  <label class="col-md-4 control-label" for="file">Upload-Document:</label> 
<div class="col-md-4">
<input id="datafile" type="file" name="datafile" size="60">
</div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Scholarship Amount:</label>  
  <div class="col-md-4">
  <input id="textinput" type="text" placeholder="state the amount required" name="scholar_AMT" class="form-control input-md">

  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4" align="center">
    <input id="singlebutton" type="submit" class="btn btn-success btn-lg" name="submit">
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

