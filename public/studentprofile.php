<?php 
session_start();
include ('../model/student.php');
include ('../model/user.php');
$S_id=$_GET['S_id'];
if(isset($_COOKIE['email']))
{
  $email=$_COOKIE['email'];
}
setlocale(LC_MONETARY, 'en_IN');

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
	background: url("./images/backb.jpg");
	background-repeat:repeat;
	}
  .sponsor_data{
  /*font-family:'KG Second Chances Sketch- Regular';*/
  font-family: 'KGSecondChancesSketch', Arial, sans-serif;
  font-size: 27px;
  }

	</style>
  <!--!-<script>
  function fbs_click(){
  u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');
  return false;
  }
  </script> -->
  <script type="text/javascript">var switchTo5x=true;</script>
  <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
  <script type="text/javascript">stLight.options({publisher: "efbad282-59ff-4ef1-90cc-48691ddef625", doNotHash: false, doNotCopy: false, hashAddressBar: true});</script>
</head>

<body>
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" style=" background-color: #25383c; border-color: #25383c;">
		<div class="container">
	  
			<div class="navbar-header" style="height: 50px;">
		
          
        		<a class="navbar-brand" href="index.php"><h1 style="font-family:'KGSecondChancesSketch'; margin-top: -9px; color: white;">LearnEm<h1></a>
        	</div>
        	<div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="listofstudents.php" style="color: white;">Sponsor</a></li>
               <?php if(isset($_COOKIE["email"])){
                  $email=$_COOKIE['email'];
                 $whois=whois($email);  
                ?> 
                <li><a href="userdashboard.php"style="color: white;">UserDashboard</a>
                <?php if(is_numeric($whois)){ ?>
                 <li><a href="studentdashboard.php" style="color: white;">StudentDashboard</a></ul>
               <?php } ?>
                </ul> 
                 <div class="navbar-form navbar-right">
                 <script src="http://coinwidget.com/widget/coin.js"></script>
    <script>
      CoinWidgetCom.go({
      wallet_address: "15WTM5hsiK5oJZS4qTB9cZXhuHYRzfkrr4"
      , currency: "bitcoin"
      , counter: "count"
      , alignment: "bl"
      , qrcode: true
      , auto_show: false
      , lbl_button: "Donate "
      , lbl_address: "My Bitcoin Address:"
      , lbl_count: "donations"
      , lbl_amount: "BTC"
      });
    </script>
                <a href="../controller/logout.php" class="btn btn-danger">Logout</a>
                               
  </div>   

                <?php }
                else{ ?>
            </ul>
            <div class="navbar-collapse collapse">
          <div class="navbar-form navbar-right">
               <script src="http://coinwidget.com/widget/coin.js"></script>
    <script>
      CoinWidgetCom.go({
        wallet_address: "15WTM5hsiK5oJZS4qTB9cZXhuHYRzfkrr4"
        , currency: "bitcoin"
        , counter: "count"
        , alignment: "bl"
        , qrcode: true
        , auto_show: false
        , lbl_button: "Donate Us"
        , lbl_address: "My Bitcoin Address:"
        , lbl_count: "donations"
        , lbl_amount: "BTC"
      });
    </script>
              <a href="usersignup.php" class="btn btn-danger">Sign Up</a>

              <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Sign in</button> 
             
          </div>              
        </div><?php } ?>

              
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
//Count Remaining Days //
//$DateApplied=$row['date'];
//$CurrentDate= date("Y-m-d H:i:s");
//$diff=abs(strtotime($CurrentDate) - strtotime($DateApplied));
//$remainingDay = date_diff($DateApplied,$CurrentDate);
//$years = floor($diff / (365*60*60*24));
//$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
//$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

$days=remainingDays($S_id);

$Donors=getDonors($S_id);
$total=count(array_unique($Donors));
//$total=count($Donors);
$Story=getStory($S_id);
$CS_id= $Story['CS_id'];
$Git_id=$Story['Git_id'];
$CA_id=$Story['CA_id'];
               
               // GET CODESCHOOL INFORMATION //  
        list($CS_output,$Git_output,$CA_output)=studentPrework($CS_id,$Git_id,$CA_id);
        $CS_Username= $CS_output['user']['username'];
        $CS_TotalScore=$CS_output['user']['total_score'];
        $CS_NumOfCourse=count($CS_output['courses']['completed']);

        // GET GITHUB PROFILE //
        $Git_Username= $Git_output['username'];
        $Git_repo = $Git_output['repositories'];
        $Git_languages= $Git_output['usage']['languages'];
        $Git_totalpushes = $Git_output['usage']['total'];

        // GET CADECADEMY PROFILE //
        $CA_Username= $CA_id;
        $CA_Totalpoints=$CA_output['points'];
        $CA_Tracks = $CA_output['tracks'];




$totalAmount=getFundedAmount($S_id); //try to omit if page is not working. gets total funded amount
//$totalDonors=0;
//foreach($Donors as $totalDonors){ 
//$totalDonors=count($listdonors);
//	$total = count($totalDonors);}
 ?>

  <div class="container" > <!-- width="50px;" style="display: inline" -->
    
      <h1 align="center" style="font-family:'KGSecondChancesSketch'; 
      font-size: 72px; margin-top: -30px;"><?php echo $row['sname']; ?></h1>
	

		
		
              <!--</div>-->

	             <!--<div class="container">-->
  
    <div class="row">		
      
        <div class="col-md-6" align="left" style="margin-top: -70px;">
					
         
          <!--   <img src="./images/facebook-icon.png" width="25px"/>
  					<img src="./images/Twitter_logo.png" width="25px"/>
            <img src="./images/linked-in.jpg" width="25px"/> -->
            <span class='st_sharethis_large' displayText='ShareThis'></span>
            <span class='st_facebook_large' displayText='Facebook'></span>
            <span class='st_twitter_large' displayText='Tweet'></span>
            <span class='st_linkedin_large' displayText='LinkedIn'></span>
            <span class='st_pinterest_large' displayText='Pinterest'></span>
            <span class='st_email_large' displayText='Email'></span>	
				</div>
    </div>

    
    <div class="row">

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
						<h2 class="sponsor_data"> <b><?php echo money_format('%i', $totalAmount); ?>
            </b> pledged<br>of <b><?php echo money_format('%i',$row['scholar_AMT']); ?></b></h2>
						<h2 class="sponsor_data"><?php if(!($days<30)){
               $Expire="Campaign is Over";
               echo $Expire;
             }
             else{ ?>
              <b><?php echo 30-$days; ?></b> days to go!</h2>
					  <?php } ?>
						<br>


					     <form action="donate.php" method="post" data-toggle="validator">
					     <input type="hidden" name="email" value="<?php echo $email ; ?>" >
                <input type="hidden" name="S_id" value="<?php echo $S_id; ?>" >

						    <div class="row">
                <div class="col-md-8">
                  <div class="input-group" style="position:absolute;">
      							<input name="amount" type="text" class="form-control" placeholder="enter amount" 
                    style="height: 50px; border: 3px solid #33cc66 ; border-radius: 7px; " pattern="([0-9]){1,10}" >
                    <div class="help-block with-errors"></div>

                  </div>
                </div>


                <div class="col-md-4">
						      <input type="submit" value="Donate" class="btn btn-lg btn-success" 
                  style="width:150px; height: 50px; float: right;border: 3px solid #33cc66 ;" >
						    </form>
                </div>
                </div>
				 </div>

					<br><br><br>			
				</div>
			


				<div class="well" style="background-color:#; height:450px; margin-top: -20px; text-align: justify;">

					<h3>So here's why I need your help</h3><br><p>
					<?php echo $Story['reason']; ?>
					<p>
			</div>
		</div>
	</div>

	
	<!--<div class="container">-->
    	 <h3 align="center">PreWork Status</h3>
      <div class="row">
      
          <div class="col-md-6"  >
        
        <div class="panel panel-info">

        <div class="panel-heading">My Codeschool Profile</div>
        <div class="panel-body">
          <img src="./images/codeschool_logo.png" alt="CodeSchoolProfile" style="Height:80px" align="right">         
          <ul>
          <li>
            <em>Username:</em>
            <strong><?php echo $CS_Username; ?></strong>
          </li>
          <li>
          <em>Course Completed:</em>
          <strong><?php echo $CS_NumOfCourse; ?></strong>
          </li><li>
            <em>Total Points:</em>
            <strong><?php echo $CS_TotalScore; ?></strong>
          </li>
          </ul>
          </div>  
        </div>
        </div>

        <div class="col-md-6">
        <div class="panel panel-info">

        <div class="panel-heading">Codeschool Badges</div>
        <div class="panel-body"><?php
                     foreach($CS_output['badges'] as $value){

                      ?>
 
                      <img src="<?php echo $value['badge']; ?>" width="10%" height="50px">
                     <?php 
                     }
           ?></div>
</div>
</div>    
  </div>

    <div class="row">
      <div class="col-md-6">
          <div class="panel panel-info">
         
        <div class="panel-heading">My GITHUB Profile</div>
        <div class="panel-body">
        <img src="./images/github_logo.png" alt="GithubProfile" align="right" style="Height:70px">
        <ul>
          <li>
            <em>Username:</em>
            <strong><?php echo $Git_Username; ?></strong>
          </li>
          <li>
            <em>Total Pushes:</em>
            <strong><?php echo $Git_totalpushes; ?></strong>
          </li>
          <li>
            <em>Repositories Worked:</em><br>
            <ol>
            <?php
                foreach($Git_repo as $repo){
                  ?>
                  <strong><li>
                  <?php echo $repo['repo']; ?></li>
            </strong><?php } ?>
            </ol>
          </li>
        </ul>
      </div></div>
      </div>
      <div class="col-md-6">
          <div class="panel panel-info">

        <div class="panel-heading">Languages and Total Pushes:</div>
        <div class="panel-body">
        <?php
              
              foreach ($Git_languages as $language ) { 
         ?><em>Language:</em>
         <strong><?php echo $language['language']; ?></strong>
         <em>Total Pushes: </em>
         <strong><?php echo $language['count']; ?></strong><br>
<?php } ?>
    </div>
    </div>
    </div>
    </div>
    <div class="row">
      <div class="col-md-6">
          <div class="panel panel-info">
         
        <div class="panel-heading">My Codecademy Profile</div>
        <div class="panel-body">
        <img src="./images/codecademy_logo.png" alt="CodecademyProfile" align="right" style="Height:80px">
        <ul>
          <li>
            <em>Username:</em>
            <strong><?php echo $CA_Username; ?></strong>
            </li>
            <li>
              <em>TotalPoints:</em>
              <strong><?php echo $CA_Totalpoints; ?></strong>
            </li>
        </div>
        </div>
        </div>
        
          <div class="col-md-6">
             <div class="panel panel-info">
             <div class="panel-heading">Codecademy Tracks</div>
             <div class="panel-body">
                
                
                    <em>Tracks:</em>
             <?php 
              foreach ($CA_Tracks as $tracks){ ?>
                <ul>
                <li>
                  <strong><?php echo $tracks['title']; ?></strong>
                </li>
                </ul>
                <?php } ?>
             </div>
               
             </div> 
          
        </div>

        </div>
<!--</div>-->
	<!--<div class="container" align="center">-->
    <div class="row" style="padding: 80px 50px 0 50px" align="center">
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

  <!--

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
	</footer> -->

 

 <div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Login</h4>
        </div>
        <div class="modal-body">
          <div class="row">
           <div class="col-md-6" style="margin-left:130px;">
            <form role="form" action="../controller/userlogin.php" method="post" id="loginForm" 
            data-toggle="validator">
              <div class="form-group">
                <label >Email address</label>
                <input id="email" name="email" type="email" class="form-control" name="email" 
                placeholder="Enter email" data-error="Invalid Email Address" required>
                <div class="help-block with-errors"></div>
              </div>

              <div class="form-group">
              <label class="control-label" for="textinput" style="color:black;">Password:</label>       
                <input name="password" type="password" placeholder="Password" 
                class="form-control input-md" required>
                <span class="help-block with-errors"></span>
              </div>
              <!--<div class="form-group">
                <label class="control-label" for="textinput" style="color:black;">Password</label>
                <input name="password" type="password" id="password" placeholder="Password">
                <span class="help-block with-errors"></span>
              </div>-->
               <div class="modal-footer">
                <button type="submit" class="btn btn-success">Log In</button>
               </div>
            </form>
           </div>
          </div>
        </div>
      </div>
    </div>
  </div>

   <!-- Footer Begin -->
    <div class="row well" style="margin:0px -50px -50px -50px;">
        <div class="col-lg-4">

          <h3 style="font-family:'KGSecondChancesSketch'; text-align:center">Get in Touch</h3>
          <p style="text-align:center"> <strong>Contact Address</strong></br>
          1, Penthouse 01<br>
          Rich Homes<br>
          Richmond Road<br>
          Bangalore - 560025<br>
          INDIA<br>
          <br>

         <strong> Email: </strong><a href="mailto:contact@learnem.com">contact@learnem.com</a><br>
         <strong>Phone no.</strong>+91 986-654-6356
          </p>

          <br>
           
        </div>      
        <!--</div>-->
        <div class="col-lg-4">
         <h3 style="font-family:'KGSecondChancesSketch'; text-align:center">Reach Us</h3>
          <iframe width="300px" height="200px" frameborder="0" scrolling="no" 
          marginheight="0" marginwidth="0" style ="margin-left:30px" src="http://bit.ly/1fKde81">

          </iframe> 
        </div>
        
        <div class="col-lg-4">
              <h3 style="font-family:'KGSecondChancesSketch'; text-align:center">Explore</h3>
              <nav style="text-align:center">
              <p><a href="index.php">Home </a></p>
              <p><a href="aboutus.php">About Us</a></p>
              <p><a href= "#hiw">How It Works</a></p>
              <p><a href="#faq">FAQ</a></p>
              <p><a href="#contact">Contact</a></p>
              </nav>
        </div>
    </div>
  <!-- Footer End -->

    
    <script type="text/javascript" src="./dist/js/jquery-2.1.0.min.js"></script>
    <script type="text/javascript" src="./dist/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="./dist/js/validator.js"></script>
</body>

</html>
