<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   

    <title>Crowd Funding Scholarships</title>

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
	<link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
	<style>
		.student-pic {
			height:550px;
			}
		.donation-amount {
			width:100px;
			display:inline;
			}
		.donation {
			font-size:15pt;
			display:inline;
			}
		.student-pic {
			border:2px solid black;
			
			}
		.info {
			top:50px;
			}
	</style>
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
<div class="jumbotron" >
<hr>
<?php
                

$con=mysqli_connect("localhost","root","123","LearnEmp");
// Check connection
         if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$S_Id=$_GET['id'];
$result = mysqli_query($con,"SELECT * FROM student where S_Id = $S_Id");
while($row = mysqli_fetch_array($result))
{
echo "First Name: " . $row['fname'] . "<br>";
echo "Last Name: " . $row['lname'] . "<br>";
echo "gender: " . $row['gender'] . "<br>";
echo "email: " . $row['email'] . "<br>";
echo "Phone_Number: " . $row['Phone_Number'] . "<br>";
echo "Address: " . $row['address'] . "<br>";
echo "Pincode: " . $row['pincode'] . "<br>";
echo "Country: " . $row['country'] . "<br>";
echo "Course: " . $row['course'] . "<br>";
echo "Scholarship Amount: " . $row['scholar_AMT'] . "<br>";
echo "Note of Purpose: " . $row['para'] . "<br>";
}

mysqli_close($con);
?>
<a href="<?php $link_address='student_dash.php?id='.$_GET['id'].'';

                 echo $link_address;?>"> See Donors</a>


 <!--<div class="container">
	<div class="row">
		<div class="col-md-4">
			<h2 style="margin:60px 0 10px 0">Hugh Jackman</h2>		
			<img class="student-pic" src="http://latimesherocomplex.files.wordpress.com/2030/04/hughjackman4.jpg?w=300&h=450">
		</div>
		<div class="col-md-8" style="top:80px">
			<h3>Hugh Jackman</h3></ br>
			<h3>Master in Arts - University of Adelaide</h3></ br>
			<h3>Fund Received : 20,000/40,000 USD</h3>
			<div class="progress">
  				<div class="progress-bar progress-bar-success" style="width: 50%">
    				<span class="sr-only">50% Complete (success)</span>
  				</div>
  				<div class="progress-bar progress-bar-warning" style="width: 50%">
    				<span class="sr-only">25% Complete (warning)</span>
  				</div>
			</div><!--progrss class
			<a href="#" style="bottom:10px">Click here to request student details</a><br>
			<p><br>Hugh Michael Jackman (born 12 October 1968)[1] is an Australian actor and producer who is involved in film, musical theatre, and television.<br>
Jackman has won international recognition for his roles in major films, notably as superhero, period, and romance characters. He is known for his long-running role as Wolverine in the X-Men film series, as well as for his leads in Kate & Leopold, Van Helsing, The Prestige, Australia, Real Steel, Les Misérables, and Prisoners. His work in Les Misérables earned him his first Academy Award nomination for Best Actor and his first Golden Globe Award for Best Actor in a Musical or Comedy in 2013. He is also a singer, dancer, and actor in stage musicals, and won a Tony Award for his role in The Boy from Oz.</p>
<br>
			<a href="#"> View Accomplishment Documents</a>
			<hr>
			<p class="req">Please enter your contribution and donate</p><br> 
			
			<input type="text-box" class="donation-amount" placeholder="$"></input><a class="btn btn-danger btn-lg" role="button" style="margin-top:0px">Donate Now &raquo;</a>--> 




		</div>
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
  </nav> &nbsp &nbsp  Site Designed by |<a href="http://www.jaaga.in"> Jaaga Crowd-funding Group</a>
</footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="./dist/js/bootstrap.min.js"></script>
  </body>
</html>

