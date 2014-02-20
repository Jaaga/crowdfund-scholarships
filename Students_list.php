<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
   

    <title> Students List Page</title>

    <!-- Bootstrap core CSS -->
    <link href="./dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="offcanvas.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="./docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
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
            <li><a href="Donor_signup.html">Donors</a></li>
            <li><a href="About.html">About</a></li>
			<li><a href="Contact.html">Contact</a></li>
<li><form class="navbar-form navbar-left" role="search">
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search">
  </div>
  <button type="submit" class="btn btn-primary">Search</button>
</form></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


	<a class="navbar-brand" href="./index.html" style="font-family: 'Audiowide', cursive;">LearnEmp</a>
	<a class="navbar-brand" href="how.html">How it works!</a>

    <div class="container">

      <div class="row row-joffcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h2>Applicants at LearnEmp</h2>
                                <?php
                $con=mysqli_connect("localhost","root","123","LearnEmp");
// Check connection
         if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$result = mysqli_query($con,"SELECT * FROM student");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Action</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['fname'] . "</td>";
  echo "<td>" . $row['lname'] . "</td>";
  echo "<td><a class='btn btn-primary' href='/work/crowdfund-scholarships/donate.php?id=" . $row['S_Id'] ."&id2=" . $_GET['id'] . "'>Donate Now</a></td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>
          </div>
          
<hr>
<footer class="footer" align= "center">
  <nav>
    <ul>

    <a href="index.html">Home </a>&nbsp | &nbsp 
    <a href= "About.html">About </a>&nbsp | &nbsp 
      <a href= "Contact.html">Contact </a>&nbsp | &nbsp
      <a href="FAQ.html">Faq </a>&nbsp | &nbsp 
      <a href="Donor_signup.html">Donors </a>&nbsp | &nbsp 

    </ul>
  </nav> &nbsp &nbsp Site Designed by |<a href="http://www.jaaga.in"> Jaaga Crowd-funding Group</a>
</footer>


    <!-- Bootstrap core JavaScript
       <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="./dist/js/bootstrap.min.js"></script>
    <script src="offcanvas.js"></script>
  </body>
</html>
