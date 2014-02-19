
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Donor Signup Form</title>

    <!-- Bootstrap core CSS -->
    <link href="./dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

<style type="text/css">
	
	body {font-family:Arial,Sans-Serif;}
	#container {width:300px;margin:0 auto;}
	form label{display:inline=block; width:140px;}
	form input[type="text"]
	form inputp[type="password"]
	form input[type="email"]{width:160px;}
	form .line {clear:both;}
	form .line.submit {text-align:right;}

</style>
	





  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
         
          <a class="navbar-brand" href="#"></a> <!--INSERT LOGO HERE -->
	<a class="navbar-brand" href="#">How it works!</a>
        </div>
        <div class="navbar-collapse collapse">
          <div class="col md-4" align="right">
          <a href="index.php" button class="btn btn-primary" style="font-family: verdana;">Sign-in</button></a>
          </div>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

<div id="container">
	<form action = "Donorsignup.php" method="post">
		<h2 style="margin:60px 0 10px 0">Donor Signup Form</h2>
		<div class="line"> <label for="firstname"> First Name* : </label> <input type="text" id="firstname" name="name"/> </div>
		<!--<div class="line"> <label for="lastname"> Last Name* : </label> <input type="text" id="lastname" /> </div>-->
		<div class="line"> <label for="email"> Email : </label> <input type="email" id="email" name="email" /> </div>
		<!--<div class="line"> <label for="cemai">Confirm Email: </label> <input type="email"id="cemail" /> </div>-->
		<div class="line"> <label for="pwd"> Password* : </label> <input type="password" id="pwd" name="password"/> </div>
		<!--<div class="line"> <label for="cpwd"> Confirm Password*: </label> <input type="password" id="cpwd" /> </div>
		<div class="line"> <label for="telephone"> Contact No: </label> <input type="text" id="telephone" /> </div>
		<div class="line"> <label for="dob"> Date of Birth </label> <input type="text" id="dob" /> </div>
		<div class="line"> <label for="address"> Address : </label> <input type="text" id="address" /> </div>-->
		<input type="submit">
	</form>
</div>









      <hr>



      <footer>
        <a class="navbar-brand" href="howitworks.html">How it works!</a><a class="navbar-brand" href="about.html">ABOUT</a><a class="navbar-brand" href="faq.html">FAQ</a>
      </footer><a class="navbar-brand" href="donors.html">DONORS</a><a class="navbar-brand" href="students_list.html">STUDENTS</a>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="./dist/js/bootstrap.min.js"></script>
  </body>
</html>

