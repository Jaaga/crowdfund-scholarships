<?php 
session_start();
include ('../model/student.php');
$S_id=$_GET['id'];
$D_id=$_GET['id2'];
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
            		<li><a href="listofstudents.php?id=<?php echo $D_id; ?>">Sponsor</a></li>
            		<li><a href="donordashboard.php?id=<?php echo $D_id; ?>">MyProfile</a></li>
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
$totalAmount=getFundedAmount($S_id); //try to omit if page is not working. gets total funded amount
//$totalDonors=0;
//foreach($Donors as $totalDonors){ 
//$totalDonors=count($listdonors);
//	$total = count($totalDonors);}
 ?>


	<div class="container" width="50px;" style="display: inline">
<h1 align="center" style="font-family:'KGSecondChancesSketch'; 
font-size: 72px; margin-top: -30px;"><?php echo $row['fname']; ?></h1>
	

		
		
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
        			<h2>My Story</h2><br><p style="text-align:justify"><b>Hey Guys! Please sponsor me for my new adventure with Jaaga. </b>Currently, I have learnt HTML, CSS and Javascript on my own through Codecademy.
 					Through this program I am hoping to get a better understanding of programming languages and make great websites for a living!<br><br>
 
        			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna.
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. 
					Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
					<br> <br>
					Aenean lacinia bibendum nulla sed consectetur.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna.
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. 
					Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
					Aenean lacinia bibendum nulla sed consectetur.
					</p>
    			</div>
			</div>

		
			<div class="col-xs-5"> 

			
				
              
				<div class="well" style="background-color:#33cc66; height:400px" id="bg" >
					<div class="sponsor_data">
						<h2 class="sponsor_data"> <b><?php echo $total; ?></b> donors backed </h2><br>
						<h2 class="sponsor_data"> <b><? echo $totalAmount ?></b> pledged<br>of<b> Rs.<?php echo $row['scholar_AMT']; ?></b></h2>
						<h2 class="sponsor_data"> <b>4</b> days to go!</h2>
					
						<br>

					     <form action="donate.php" method="post">
					     <input type="hidden" name="D_id" value="<?php echo $D_id ; ?>" >
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

					<h3>So here's why I need your help</h3><br><p><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</b> Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. 
						Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
					</p>
					<p>Aenean lacinia bibendum nulla sed consectetur.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. </p>
				</div>
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
