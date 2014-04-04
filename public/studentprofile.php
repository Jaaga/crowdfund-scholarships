<?php 
session_start();
include ('../model/student.php');
$S_id=$_GET['S_id'];
$U_id=$_GET['U_id'];
 ?>
<html>

<head>
	<title>Student Profile</title>

	<link href="./dist/css/bootstrap.css" rel="stylesheet">
	<link href="./dist/css/slider.css" rel="stylesheet">
	<link href="./dist/css/custom.css" rel="stylesheet" type='text/css'>
	

	<style>
	
	 @font-face{
      font-family:'KGSecondChancesSketch'; 
      src:url('fonts/KGSecondChancesSketch.ttf');

     /* font-family: 'CabinSketch';
      src: url('fonts/CabinSketch-Regular.otf');*/
     
    
     }
	#bg{
    background:url('./images/chalkboard2.jpg');
    border: 3 solid /*#33cc33*/#6E8B3D;
	color: #FFFFe0;
	text-align: center;
	}
		body{
	background: url("./images/wood1.png");
	background-repeat:repeat;
	}
.sponsor_data{
/*font-family:'KG Second Chances Sketch- Regular';*/
font-family: 'KGSecondChancesSketch', Arial, sans-serif;
font-size: 27px;
}

	</style>
</head>

<body>
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
	  
			<div class="navbar-header" style="height: 50px;">
		
          
        		<a class="navbar-brand" href="index.php"><h1 style="font-family:'KGSecondChancesSketch' cursive; margin-top: -9px;">LearnEm<h1></a>
        	</div>
        	<div class="collapse navbar-collapse">
        		<ul class="nav navbar-nav">
            		<li><a href="listofstudents.php?U_id=<?php echo $U_id; ?>">Sponsor</a></li>
            		<li><a href="userdashboard.php?U_id=<?php echo $U_id; ?>">MyProfile</a></li>
        		</ul>

				<div class="navbar-collapse collapse">
        			<div class="navbar-form navbar-right">
                <button type="button" class="btn btn-danger">Sign Up</button>
                <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Sign in</button> 
              </div>
           		
           		</div><!--/.navbar-collapse -->
    		</div>
    	</div>
    </div><!--/.navbar-collapse -->

    <br>
    <br>
    <br>
	<br>
	<br>
<!-- GET Student and Donors ID from url and pass student id in getStudent($S_id) -->
	<?php 

$row= getStudent($S_id);
$Donors=getDonors($S_id);
$total=count($Donors);
$Story=getStory($S_id);
$totalAmount=getFundedAmount($S_id); //try to omit if page is not working. gets total funded amount
//$totalDonors=0;
//foreach($Donors as $totalDonors){ 
//$totalDonors=count($listdonors);
//	$total = count($totalDonors);}
 ?>


	<div class="container" width="50px;" style="display: inline">
<h1 align="center" style="font-family:'KGSecondChancesSketch'; 
font-size: 72px; margin-top: -30px;"><?php echo $row['sname']; ?></h1>
	

		
		
	</div>

	

	<div class="container">
    	<div class="row">
    		<div class="col-md-6" align="left" style="margin-top: -70px;">
					<img src="./images/facebook-icon.png" width="25px"/>
					<img src="./images/Twitter_logo.png" width="25px"/>
					<img src="./images/linked-in.jpg" width="25px"/>

				</div>

        	<div class="col-xs-7"  text-align="justify">
        		

				<img src=<?php echo $row['image_path']; ?> width="100%" height="400px">
		 		<div class="well" width="100%">
        			<h2>My Story</h2><br><p style="text-align:justify">
        			<?php echo $Story['story']; ?>
					</p>
    			</div>
			</div>

		
			<div class="col-xs-5"> 

			
				
              
				<div class="well" style="background-color:#33cc66; height:400px" id="bg" >
					<div class="sponsor_data">
						<h2 class="sponsor_data"> <b><?php echo $total; ?></b> donors backed </h2><br>
						<h2 class="sponsor_data"> <b><?php echo $totalAmount ?></b> pledged<br>of<b> Rs.<?php echo $row['scholar_AMT']; ?></b></h2>
						<h2 class="sponsor_data"> <b>4</b> days to go!</h2>
					
						<br>

					     <form action="donate.php" method="post">
					     <input type="hidden" name="U_id" value="<?php echo $U_id ; ?>" >
                         <input type="hidden" name="S_id" value="<?php echo $S_id; ?>" >
						<div class="input-group" style="border: 3px solid #33cc66 ; border-radius: 7px;position:absolute;">
							<input name="amount" type="text" class="form-control" placeholder="enter amount" style="height: 50px; ">
                    	</div>
						<input type="submit" value="Donate" class="btn btn-lg btn-success" style="width:150px; height: 50px; float: right;border: 3px solid #33cc66 ;" >
						</form>
						</div>

					<br><br><br>			
				</div>
			</form>


				<div class="well" style="background-color:#; height:450px; margin-top: -20px; text-align: justify;">

					<h3>So here's why I need your help</h3><br><p>
					<?php echo $Story['reason']; ?>
					<p>
			</div>
		</div>
	</div>

	
	<div class="container">
    	<div class="row">
      
        	<div class="col-sm-7"  text-align="justify">

				<div class="workstatus">
					<h3>PreWork Status</h3>

					<p>CodeAcademy</p>

					<div class="progress">
        				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" 		style="width: 40%">
							<span class="sr-only">40% Complete (success)</span>
						</div>
    				</div>

	 				<p>Codeschool</p>
	 				<div class="progress">
        					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
							<span class="sr-only">20% Complete</span>
							</div>
					</div>	
				</div>
			</div>


			<div class="col-xs-5">

				<div class="well" width="100%">

				This is where the badges will be placed
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>

				</div>

		</div>
	</div>

	<div class="container1" align="center">
    <div class="row" style="padding: 80px 50px 0 50px">
      <div class="col-lg-4">
          <img src="./images/Donation.jpg" alt="donate" class="img-circle" align="center" style="Height:100px"></img> 
          <br><h4>MAKE A DONATION</h4>
         <!-- <p style="text-align: justify; padding:1em 1em;">Our system is simple. We select candidates for a scholarship based on certain criteria preset by our team.We consider economic background, academic performance and extra curricular skills while making our selections, but also look for that x-factor while making our choices.</p>

          <br>-->
      </div>

      <div class="col-lg-4">
            <img src="./images/Student_benefit.jpg" alt="donate" class="img-circle" style="height:100px"></img> 
            <br><h4>STUDENT BENEFITS FROM LOAN</h4>
            <!--<p style="text-align: justify; padding:1em 1em;">You as a donor choose the candidate you would like to sponsor. The student utilizes the loan for paying his/her academic fee and to cover basic necessities during the course.</p>
          <br><br>-->
      </div>

      <div class="col-lg-4">
          <img src="./images/Pay_it.jpg" alt="donate" class="img-circle" style="height:100px"></img> 
          <br><h4>STUDENT PAYS IT FORWARD</h4>
          <!--<p style="text-align: justify; padding:1em 1em;">The student who has been sponsored through our system gets inducted into an honour-based pay-it-forward process wherein once the student graduates and begins to earn, he/she is encouraged to sponsor another student.</p>
          -->
      </div>
    </div>
  </div>

  <hr>

	<footer class="footer" style="text-align:center">
  		<nav>
    		<ul>
    			<a href="index.php">Home </a> |
    			<a href= "#about">About Us</a> |
      			<a href= "#hiw">How It Works</a> |
      			<a href="#faq">FAQ</a> |
      			<a href="#contact">Contact</a>  

    		</ul>
  		</nav> 
	</footer>
</body>

</html>
