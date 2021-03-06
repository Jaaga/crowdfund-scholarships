<?php
session_start();
if(!isset($_COOKIE['email']))
{
  header("location:../public/usersignup.php");
}
setlocale(LC_MONETARY, 'en_IN');
?>
<?php 
include ('../model/student.php');
include ('../model/user.php');

$S_id=$_SESSION['S_id'];
      $student= getStudent($S_id);
      $U_id=$student['U_id'];

      $Donors=getDonors($S_id);

      $total=count(array_unique($Donors));

      //$total=count($Donors);
      $days=remainingDays($S_id);  
      
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
        $Git_Repo = $Git_output['repositories'];
        $Git_Languages= $Git_output['usage']['languages'];
        $Git_Totalpushes = $Git_output['usage']['total'];
         
         // GET CADECADEMY PROFILE //
        $CA_Username= $CA_id;
        $CA_Totalpoints=$CA_output['points'];
        $CA_Tracks = $CA_output['tracks'];


$totalAmount=getFundedAmount($S_id); //try to omit if page is not working. gets total funded amount


?>
<!DOCTYPE html>
<html>

<head>
	<title>Student Dashboard</title>

	<link href="./dist/css/bootstrap.css" rel="stylesheet">
	<link href="./dist/css/slider.css" rel="stylesheet">
	<link href="./dist/css/custom.css" rel="stylesheet" type='text/css'>

  <script language="javascript" src="./dist/js/jquery-2.1.0.min.js">
  </script>
  <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#showimage').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
  </script>
	

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
    padding-top: 80px;
    }
		#bg{
    	background:url('./images/chalkboard2.jpg');
    	border: 3 solid /*#33cc33*/#6E8B3D;
		color: #FFFFe0;
		text-align: center;
		}
		.sponsor_data{
		font-family:'Cabin Sketch' cursive;
		font-size: 27px;
		}
	</style>  
</head>

<body>

	

	

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" style=" background-color: #25383c; border-color: #25383c;">
      <div class="container">
      
        <div class="navbar-header" style="height: 50px;">
      

          <a class="navbar-brand" href="index.php">
          <h1 style="font-family:'KGSecondChancesSketch' ; margin-top: -9px;color: white;">LearnEm</h1></a>
        </div>

        
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">

                <li><a href="listofstudents.php"style="color: white;">Sponsor</a></li>

                <li><a href= "userdashboard.php" style="color: white;">UserDashboard</a></li>
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
  , lbl_button: "Donate "
  , lbl_address: "My Bitcoin Address:"
  , lbl_count: "donations"
  , lbl_amount: "BTC"
});
</script>
                <a href="../controller/logout.php" class="btn btn-danger">LOGOUT</a>
                
                <!--<button class="btn btn-success" data-toggle="modal" data-target="#myModal">Sign in</button> -->

            </div>             
          </div>
          
        </div>
      </div>
    </div>

    <div class="container" >

    <!-- Social Media, Name & Edit application Row -->
  		<div class="row">

        <!-- Social Media Icons -->

    			<div class="col-lg-3"   > <!-- align="left" -->
    			
                        <!--  <a href="https://www.facebook.com/sharer/sharer.php?u=http://www.learnem.jaaga.us/public/studentprofile.php?S_id=<?php echo $S_id; ?>"
                           target="_blank">
                  <img src="./images/facebook-icon.png" width="25px"/>
              </a> -->
              <a href="studentprofile.php?S_id=<?php echo $S_id; ?>" 
              class="btn btn-primary btn-lg">My Profile</a>
    			</div>

    		<!-- End -->

        <!-- Name of Student -->

    			<div class="col-lg-6">

    				<h1 align="center" style="font-family:'KGSecondChancesSketch' cursive; font-size: 60px; margin-top: 0px;" >
    				<?php echo $student['sname']; ?>
    				</h1>
    			</div>
        		
        <!-- End -- >

                  
        <!-- Edit Application Button -->

  			 <div class="col-lg-3" align="right" > <!--  -->
     					
         		

         			

         			<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#appEdit">
    			
    					Edit Application
  				    </button><!-- button for pop up to edit the contents of the page -->
      				
      			
      	 </div>	
        <!-- End -->
      </div>
    <!-- Row end -->
</div>
    <br>
   
    <!-- Student Image & Sponsored Details -->
      <div class="row">

        <!-- Image of Student -->
        <div class="col-md-7"  text-align="justify">
          		

  				<img src="<?php echo $student['image_path']; ?>" width="100%" height="400px">
  				<input type="file" id="profile_pic" name="upload" style="visibility: hidden; width: 1px; height: 1px" multiple />

  				<a href="" onclick="document.getElementBglyphiconyId('profile_pic').click(); return false">

            		<span class="glyphicon glyphicon-camera" style="font-size:20px;"></span>

          		</a>
  		 		<br>
  		 		

  				
  		 		<div class="well" width="100%">
          		
          		<a class="edit" href="#" align="right" style="text-decoration:none;color:#0066FF;">
                  <span >Build Your Profile</span><br>
                	<span class="glyphicon glyphicon-edit" data-toggle="modal" data-target="#myModal" style="font-size:24px;"></span>
                  
                  </a>

          			<h3 style="font-family:'KGSecondChancesSketch' cursive;">Your Story</h3>

          			<br>

          			<p style="text-align:justify"><?php echo $Story['story']; ?>
  					</p>
      			</div>
  			</div>
        <!-- End -->

  		  <!-- Donation Details -->
  		  <div class="col-md-5"> 

  				<div class="well" style="background-color:#33cc66; height:400px" id="bg" >
  					<div class="sponsor_data">
  						<h2 class="sponsor_data" style="font-family:'KGSecondChancesSketch' cursive;"> 
              <b><?php echo $total; ?></b> donors backed </h2><br>
  						<h2 class="sponsor_data" style="font-family:'KGSecondChancesSketch' cursive;">
              <b><?php echo money_format('%i',$totalAmount); ?></b> pledged<br> out of<b>
              <?php echo money_format('%i',$student['scholar_AMT']); ?></b></h2>
  						<h2 class="sponsor_data" style="font-family:'KGSecondChancesSketch' cursive;"><?php if(!($days<30)){
                $Expire="Campaign is Over";
                echo $Expire;
              } else{ ?>
              <b><?php echo 30-$days; } ?></b> days to go!</h2>
  					
  						<br>
  					
  						<!--<div class="input-group" style="border: 3px solid #33cc66 ; border-radius: 7px;position:absolute;">
  							<input type="text" class="form-control" placeholder="enter amount" style="height: 50px; ">
                      	</div> -->
  						
  						<!--<button type="button" class="btn btn-lg btn-success" style="width:150px; height: 50px; float: right;border: 3px solid #33cc66 ;">Donate
  						</button>-->						
  					</div>

  					<br><br><br>			
  				</div>

  				<br>

  				<div class="well" style="background-color:#; height:450px; margin-top: -20px; text-align: justify;">

  				<!--<a class="edit"href="#">

                		<span class="glyphicon glyphicon-edit"  style="font-size:24px;"></span>
          
          		</a>-->

  					<h3 style="font-family:'KGSecondChancesSketch' cursive;">So here's why I need your help</h3>
  					<p><?php echo $Story['reason']; ?></p>
  				</div>
  			</div>
        <!-- End -->
      </div>
    <!-- Row End -->

    <h3 align="center" style="font-family:'KGSecondChancesSketch';">PreWork Status</h3>
      	
    <!-- Codeschool Row Begin -->
        <div class="row">

          <!-- CodeSchool Profile -->
          
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
                        </li>

                        <li>
                          <em>Total Points:</em>
                          <strong><?php echo $CS_TotalScore; ?></strong>
                        </li>
                    </ul>
      					  </div>	 
              </div>
            </div>  
          
          <!-- End -->

          <!-- Codeschool Badges -->
            <div class="col-md-6">
                <div class="panel panel-info">

                  <div class="panel-heading">Codeschool Badges</div>
                    <div class="panel-body"><?php
                           foreach($CS_output['badges'] as $value){

                            ?>
       
                            <img src="<?php echo $value['badge']; ?>" width="10%" height="50px">
                           <?php 
                           }
                            ?>
                    </div>
                  
                </div>		
      	    </div>
          <!-- End -->
        </div>
    <!-- Codeschool Row End -->

    <br>

    <!-- GitHub Row Begin -->
        <div class="row">

          <!-- Github Profile -->
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
                          <strong><?php echo $Git_Totalpushes; ?></strong>
                        </li>
                        <li>
                          <em>Repositories Worked:</em><br>
                          <ol>
                          <?php
                              foreach($Git_Repo as $repo){
                                ?>
                                <strong><li>
                                <?php echo $repo['repo']; ?></li>
                          </strong><?php } ?>
                          </ol>
                        </li>
                      </ul>
                    </div>
                  
                </div>
            </div>
          <!--End-->

          <!-- Github Languages & Pushes -->
            <div class="col-md-6">
                <div class="panel panel-info">

                  <div class="panel-heading">Languages and Total Pushes:</div>
                    <div class="panel-body">
                      <?php
                        
                        foreach ($Git_Languages as $language ) { 
                      ?><em>Language:</em>
                      <strong><?php echo $language['language']; ?></strong>
                      <em>Total Pushes: </em>
                      <strong><?php echo $language['count']; ?></strong><br>
                      <?php } ?>
                    </div>
                  
                </div>
            </div>
          <!-- End -->
        </div>
    <!-- GitHub Row End -->

    <br>

    <!-- Codeacademy Row Begin -->
        <div class="row">

        <!-- Codeacademy Profile -->
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
                </ul>
              </div>
            
          </div>
        </div>
        <!-- End -->
      
        <!-- Codeacademy Tracks -->
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
        <div>
        <!-- End -->
        </div>
    <!-- Codeacademy Row End -->

    <br>


    <!-- Make a Donation Begin -->
      <div class="row" style="padding: 100px 50px 0 50px" align="center">
          	
          		<br><br>

            		<div class="col-lg-4">

              		<img src="./images/Donation.jpg" alt="donate" class="img-circle" align="center" style="Height:100px"></img> 
              		<br><h3 style="font-family:'KGSecondChancesSketch' cursive;">MAKE A DONATION</h3>
             		  <!-- <p style="text-align: justify; padding:1em 1em;">Our system is simple. We select candidates for a scholarship based on certain criteria preset by our team.We consider economic background, academic performance and extra curricular skills while making our selections, but also look for that x-factor while making our choices.</p>

              		<br>-->
          		  </div>

            		<div class="col-lg-4">
              		<img src="./images/Student_benefit.jpg" alt="donate" class="img-circle" style="height:100px"></img> 
              		<br><h3 style="font-family:'KGSecondChancesSketch' cursive;">STUDENT BENEFITS FROM LOAN</h3>
              		<!--<p style="text-align: justify; padding:1em 1em;">You as a donor choose the candidate you would like to sponsor. The student utilizes the loan for paying his/her academic fee and to cover basic necessities during the course.</p>
                		<br><br>-->
            		</div>

            		<div class="col-lg-4">
                		<img src="./images/Pay_it.jpg" alt="donate" class="img-circle" style="height:100px"></img> 
                		<br><h3 style="font-family:'KGSecondChancesSketch' cursive;">STUDENT PAYS IT FORWARD</h3>          		
            		</div>
      </div>
    <!-- End -->
      <!--</div>-->

  	
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
  	  </footer>-->




      <!-- Edit Information modal -->
  	  <div class="modal fade" id="appEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    		<div class="modal-dialog">
      		<div class="modal-content">
        			<div class="modal-header">
          			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          				<h4 class="modal-title" id="myModalLabel">Edit your Information</h4>
        			</div>
        			<div class="modal-body">
        				<div class="navbar-collapse collapse">
                		<form class="form-horizontal" role="form" action="../controller/updatestudent.php" method="post" autocomplete="on" enctype="multipart/form-data">
                		<input type="hidden" name="S_id" value="<?php echo $S_id; ?>">
                  		

                  <div class="form-group">
                          <label class="col-md-4 control-label" for="textinput">Your BitCoin-address :</label>  
                          <div class="col-md-4">
                              <input name="bitdetail" type="text" class="form-control input-md"> 
                          </div>
                    </div>
          
                    <!-- Text input-->
                  		
                  
                    <div class="form-group">
                    			<label class="col-md-4 control-label" for="textinput">Contact Number:</label>  
                      		<div class="col-md-4">
                        			<input name="Phone_Number" type="text" class="form-control input-md"> 
                      		</div>
                  	</div>
  	
                      
                  	<div class="form-group">
                    			<label class="col-md-4 control-label" for="textinput">Address:</label>  
                      		<div class="col-md-4">
                        			<input name="address" type="text" class="form-control input-md"> 
                      		</div>
                  	</div>
                  		
                  		<!-- Introduce Yourself -->
                 			
                    <div class="form-group">
                    			<label class="col-md-4 control-label" for="textarea">Inroduce Yourself:</label>  
                      		<div class="col-md-4">
                        			<textarea class="form-control" name="para" placeholder="Introduce yourself in 120 characters"></textarea>
                      		</div>
                  	</div>
                      
                      
                    <div class="form-group" >
                          <label class="col-md-4 control-label">Upload-Image:</label> 
                          <div class="col-md-6" >
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                              <div class="fileupload-preview thumbnail" style= "height: auto; width: auto; max-width: 40%; max-height: 600px;">
                                <img id="showimage" src="#" alt="your image" />

                              </div>
                              <div>
                                
                                <span class="btn btn-file"><input type="file" name="image_path" onchange="readURL(this);" ></span>
                              </div>

                            </div>
                          </div>
                    </div>

          			</div>
        			</div>

              <div class="modal-footer">
                       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                       <button class="btn btn-success" type="submit">Save changes</button>          

              </div></form>

      		</div>
    		</div>
      </div>
      <!-- End -->

      <!-- Modal for Mystory -->
    	
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    		<div class="modal-dialog">
      		<div class="modal-content">
        			<div class="modal-header">
          			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          			<h4 class="modal-title" id="myModalLabel">Your Information</h4>
        			</div>

        			<div class="modal-body">  
                  <form action="../controller/studentstory.php" method="post">
                      <input type="hidden" name="S_id" value="<?php echo $S_id; ?>">
                      <div class="form-group">
                          <label class="control-label" for="textinput">Your CodeSchool ID:</label>
                          
                              <input name="CS_id" type="text" placeholder="Codeschool Username" class="form-control"> 
                          
                      </div>
                      <div class="form-group">
                          <label class="control-label" for="textinput">Your Github Username:</label>
                          
                              <input name="Git_id" type="text" placeholder="Github Username" class="form-control"> 
                          
                      </div>
                       <div class="form-group">
                          <label class="control-label" for="textinput">Your Codecademy ID:</label>
                          
                              <input name="CA_id" type="text" placeholder="Codeschool Username" class="form-control"> 
                          
                      </div>
                      
        			      <div class="form-group">
                    			<label class="control-label" for="textarea">My story</label>  
                      		
                        			<textarea rows="9" class="form-control" name="story" placeholder="Whats your Story"></textarea>
                      		
                  	</div>

                  	<div class="form-group">
                    			<label class="control-label" for="textarea">Here's why I need your money</label>  
                      		
                        			<textarea rows="9" class="form-control" name="reason" placeholder="Explain how you'll be utilizing the fund "></textarea>
                      		
                  	</div>
        			</div>

        			<div class="modal-footer">
          			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          			<button type="submit" class="btn btn-success">Save changes</button>
        			</div>
              </form>
      		</div>
    		</div>
  	
      </div>

      <!-- End -->

      <!-- Share my Profile -->
      <!-- End -->


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
              <p><a href="index.php" style="text-decoration:none;color:#111111;">Home </a></p>
              <p><a href="aboutus.php" style="text-decoration:none;color:#111111;">About Us</a></p>
              <p><a href= "#hiw" style="text-decoration:none;color:#111111;">How It Works</a></p>
              <p><a href="#faq" style="text-decoration:none;color:#111111;">FAQ</a></p>
              <p><a href="#contact" style="text-decoration:none;color:#111111;">Contact</a></p>
              </nav>
        </div>
    </div>
  <!-- Footer End -->

  <script type="text/javascript" src="./dist/js/jquery-2.1.0.min.js"></script>
  <script type="text/javascript" src="./dist/js/bootstrap.min.js"></script>

</body>

</html>
