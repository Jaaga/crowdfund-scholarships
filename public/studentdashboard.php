
<?php 
include ('../model/student.php');
include ('../model/user.php');

$S_id=$_GET['S_id'];
    

      $student= getStudent($S_id);
      $U_id=$student['U_id'];

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
    background-repeat: no-repeat; 
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

	

	

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
    
      <div class="navbar-header" style="height: 50px;">
    

        <a class="navbar-brand" href="index.php">
        <h1 style="font-family:'KGSecondChancesSketch' cursive; margin-top: -9px;">LearnEm<h1></a>
      </div>

<?php $link='listofstudents.php?U_id='.$U_id.''; ?>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
              <li><a href="<?php echo $link; ?>">Sponsor</a></li>
              <li><a href= "#hiw">How it Works</a></li>
        </ul>

        
      </div>
    </div>
</div>

<div class="container" >

		<div class="row">
			<div class="col-lg-3" align="left"  >
			

					<img src="./images/facebook-icon.png" width="25px"/>
					<img src="./images/Twitter_logo.png" width="25px"/>
					<img src="./images/linked-in.jpg" width="25px"/>
					&nbsp
			</div>

			

			<div class="col-lg-6">

				<h1 align="center" style="font-family:'KGSecondChancesSketch' cursive; font-size: 60px; margin-top: -30px " >
				<?php echo $student['sname']; ?>
				</h1>
			</div>
    		

                


			<div class="col-lg-3" align="right" >
   					
       			<form action="application.php">

       			

       			<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#appEdit">
  			
  					Edit Application
				</button><!-- button for pop up to edit the contents of the page -->
    				
    			</form>
    		</div>	
    	</div>

    	<br>
    

    
    	<div class="row">

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

        			<h3 style="font-family:'KGSecondChancesSketch' cursive;">Your Story</h2>

        			<br>

        			<p style="text-align:justify"><?php echo $Story['story']; ?>
					</p>
    			</div>
			</div>

		
			<div class="col-md-5"> 

				<div class="well" style="background-color:#33cc66; height:400px" id="bg" >
					<div class="sponsor_data">
						<h2 class="sponsor_data" style="font-family:'KGSecondChancesSketch' cursive;"> <b><?php echo $total; ?></b> donors backed </h2><br>
						<h2 class="sponsor_data" style="font-family:'KGSecondChancesSketch' cursive;"> <b><?php echo $totalAmount; ?></b> pledged<br> out of<b> Rs.<?php echo $student['scholar_AMT']; ?></b></h2>
						<h2 class="sponsor_data" style="font-family:'KGSecondChancesSketch' cursive;"> <b><?php echo $student['date']; ?></b> days to go!</h2>
					
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
</div>
		</div>
   
                <h3 align="center" style="font-family:'KGSecondChancesSketch' cursive;">PreWork Status</h3>
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
      </div></div>
      </div>
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


</div>

	<script type="text/javascript" src="./dist/js/jquery-2.1.0.min.js"></script>
  	<script type="text/javascript" src="./dist/js/bootstrap.min.js"></script>
</body>

</html>
