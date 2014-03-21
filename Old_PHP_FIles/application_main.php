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
          
          <a class="navbar-brand" href="index.php" style="font-family: 'Audiowide', cursive;">LearnEmp</a>
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
<fieldset>

<form class="form-horizontal" action = "application.php" method="post" role="form" autocomplete="on" enctype="multipart/form-data">


<!-- Form Name -->

<legend align="center"><h1>Application for Scholarship</h1></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4  control-label" for="textinput">First Name:</label> 
  <div class="col-md-4">

  <input id="fname" name="fname" type="text" placeholder="First Name" class="form-control input-md" >
  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Last Name:</label>  
  <div class="col-md-4">

  <input id="lname" name="lname" type="text" placeholder="Last Name" class="form-control input-md" > 

  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Gender</label>  
  <div class="col-md-4">

<input type="radio" name="gender" value="Male" id="gender" />Male<br>
<input type="radio" name="gender" value="Female" id="gender" />Female


</div>
</div>




<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">E-mail:</label>  
  <div class="col-md-4">
  <input id="email" type="email" placeholder="e-mail" class="form-control input-md" name = "email">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Password</label>  
  <div class="col-md-4">
  <input id="password" type="password" placeholder="" class="form-control input-md" name="password">
  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Contact Number:</label>  
  <div class="col-md-4">
  <input id="Phone_Number" type="text" placeholder="Contact Number" class="form-control input-md" name="Phone_Number">
    
  </div>
</div>

<!-- Text area-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Address:</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="address" name="address">Address</textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Pin Code:</label>  
  <div class="col-md-4">
  <input id="pincode" type="text" placeholder="Pin Code" class="form-control input-md" name="pincode">
  
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Country</label>  
  <div class="col-md-4">
  <input id="country" type="text" class="form-control input-md" name = "country">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
 <label class="col-md-4 control-label" for="textinput">Course</label>  
  <div class="col-md-4">
  <input id="course" type="text" class="form-control input-md" name="course">
  
    </select>
  </div>
</div>



<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Description of Course</label>
  <div class="col-md-4">                     
    <textarea name="para" class="form-control" id="para" placeholder ="Please describe why you want to take up the course. Prospective donors will be able to see this on your profile page" > </textarea>
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Scholarship Amount:</label>  
  <div class="col-md-4">
  <input id="scholar_AMT" type="text" placeholder="state the amount required" name="scholar_AMT" class="form-control input-md">

  </div>
</div>
<div class="form-group" align="center">
  <label class="col-md-4 control-label" for="textinput">Upload Profile picture</label>  
  <div class="col-md-4">
<input type="file" name="image">

</div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4" align="center">
    <input id="singlebutton" type="submit" class="btn btn-success btn-lg">
  </div>
</div>

</form>
</fieldset>
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
