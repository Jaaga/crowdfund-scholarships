<?php 
session_start();
 if(!isset($_COOKIE['email']))
   {  
    header("location:../public/usersignup.php");
  } 
  setlocale(LC_MONETARY, 'en_IN');
 //if(isset($_POST['wrong'])){
  //$wrong="Wrong Password";
 //}
include('../model/user.php');
include ('../model/student.php');

        $email=$_COOKIE["email"];

        $row= userInfo($email);
        $U_id=$row['U_id'];
        $whois=whois($email);
        //$email=$row['email'];
        $url=get_gravatar($email); 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Donor Dashboard</title>
  <link href="./dist/css/bootstrap.css" rel="stylesheet">
  <link href="./dist/css/custom.css" rel="stylesheet" type='text/css'>
  <!-- <link href='http://fonts.googleapis.com/css?family=Cabin+Sketch' rel='stylesheet' type='text/css'>-->
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
  
  <style type="text/css">
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
    
    /*img {
    position: relative;
    float:left;
    }*/

    img {
    float:left;
    height: auto;
    width: auto;
    max-width: 94%;
    max-height: 600px;
    margin:10px; 
    margin-right:30px;
    }
  </style>
</head>

<body>

	
	<!-- Navbar section -->
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" style=" background-color: #25383c; border-color: #25383c;">
    	<div class="container">
    
    		<div class="navbar-header" style="height: 50px;">
    
          

   		<a class="navbar-brand" href="index.php"><h1 style="font-family:'KGSecondChancesSketch'; margin-top: -9px;color: white;">LearnEm</h1></a>

        </div>

        <div class="collapse navbar-collapse">
            	<ul class="nav navbar-nav">
                <li><a href="listofstudents.php" style="color: white;">AllStudents</a></li>
                <?php if(is_numeric($whois)){ ?>
                <li><a href="studentdashboard.php" style="color: white;">StudentDashboard</a></li>
               <?php
                }
                 ?>

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

              </div><!--/.navbar-collapse -->
            </div>
        </div><!--/.navbar-collapse -->
      </div>      	
  </div> 

<?php 
$students=getStudents($row['U_id']); 
$U_id=$row['U_id'];

$noofStudents=count($students);
?>
		
  <div class="container">
	  <!-- Donor Detail Row-->
 	  <div class="row">
    	<div class="col-md-12" >
      
     		<div class="well" style= "height: 265px;">
        		<img src="<?php
            if(file_exists($row['image'])){
                             echo $row['image']; }
                    else{ echo $url;}              
             ?>" alt="Please Update Your Picture" style="height: auto; width: auto; max-width: 40%; max-height: 200px;"/>
        		<button class="btn btn-success" style="font-family: verdana; float:right; margin-right:50px; width:150px; margin-top:20px;" data-toggle="modal" data-target="#myModal">
            <h4>Edit Profile</h4></button>
            

        		<h2><?php echo $row['name'];?> </h2>
        		<br>
        		<p style="font-size:26px" "text-type:bold">Donated to <?php echo $noofStudents ; ?> Students -- Donate to More</p>
      	</div>
    	</div>
    </div>
  </div>

 <h1> <?php echo $wrong; ?></h1>

  	<!-- Heading for Donated list row-->
     <div class="container" align="center">
      <div class="row" style="margin-left: auto; margin-right: auto; padding-bottom: 20px;">
     	<h1 style="text-align:center; font-family:'KGSecondChancesSketch' cursive;"><?php echo $row['name'];?>'s Donated Student List</h1>
    </div>
    <?php 

    foreach($students as $student):
               
            $profilelink='studentprofile.php?S_id='.$student['S_id'].'&U_id='.$U_id.'';

                $sum_amount=getFundedAmount($student['S_id']);
                $days=remainingDays($student['S_id']);
                $requiredamount = $student['scholar_AMT'];
                $percentage = floor(($sum_amount/$requiredamount)*100);
            
    ?>
  
  	      <a href="<?php echo $profilelink; ?>" style="text-decoration:none;color:#111111;"/>
    	    <div class="col-md-4" style="padding-left: 0px;">
        	<div class="well" >
        	   <!-- style="width: 340px;"-->
          	 <img src=<?php echo $student['image_path']; ?> alt="donate"align="center" style="height:200px; width:320px" ></img> 
          	 <br>

          	 <h3><?php echo $student['sname'];?></h3>
          	 <p ><?php echo $student['para'];?> </p></a>
          	 <div class="progress progress-striped">
                
          		  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $percentage; ?>%">
              	 <b style="color:#111111;"><?php echo $percentage."%"; ?> Complete</b>
           			</div>
          	 </div>

          	 <p style="text-align:left"><?php if(!($days<30)){
              $Expire="Campaign is Over";
              echo $Expire;
             } else{ ?>
             <b><?php echo 30-$days; }
             ?></b> days to go <b><br>
             <?php echo money_format('%i',$sum_amount);?></b> 
                pledged out of <br><?php echo money_format('%i',$requiredamount); ?>
              </p>
      
              <div class="row">
              <form method="POST" action="donate.php" data-toggle="validator">
                <input type="hidden" name="email" value="<?php echo $email ; ?>" >
                <input type="hidden" name="S_id" value="<?php echo $student['S_id']; ?>" >
                
                <div class="col-md-8">

                <input type="text" name="amount" placeholder="Rs. " class="form-control input-md"
                pattern="([0-9]){1,10}" data-match-error="Please enter numerical value" > 
                <div class="help-block with-errors"></div> 
                </div>

                <div class="col-md-4">
            
                <!--<div class="col-lg-6">-->
                <input type="submit" value="Donate" class="btn btn-primary"> 
                               
                </div>
              </form>
              </div>
          </div>
     	    </div>




    <?php endforeach; ?>
  </div>
  <hr>

  <!-- Footer -->
  <div class="container" align="center">
      <div class="row" style="margin-left: auto; margin-right: auto;">

   <footer class="footer" style="text-align:center" class="row">
      <nav>
        <ul style="padding-left: 0px;">
          <a href="index.php">Home </a> |
          <a href= "#about">About Us</a> |
          <a href= "#hiw">How It Works</a> |
          <a href="#faq">FAQ</a> |
          <a href="#contact">Contact</a>  
        </ul>
      </nav> 
    </footer>
  </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Edit Your Profile</h4>
      </div>
      <div class="modal-body">
         <form class="form-horizontal" role="form" action="../controller/updateuser.php" method="post" enctype="multipart/form-data">
         <input type="hidden" name="U_id" value="<?php echo $U_id; ?>">
        <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Your Name</label>  
                    <div class="col-md-4">
                      <input id="name" name="name" type="text" placeholder="Full Name" class="form-control input-md"> 
                    </div>
        </div>

                

        <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Current Password *</label>  
                    <div class="col-md-4">
                      <input id="old_password" name="old_password" type="password" placeholder="Old Password" class="form-control input-md"> 
                    </div>
        </div>

                

        <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">New Password</label>  
                    <div class="col-md-4">
                      <input id="new_password" name="new_password" type="password" placeholder="New Password" class="form-control input-md"> 
                    </div>
        </div>

               

                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Confirm Password</label>  
                    <div class="col-md-4">
                      <input id="conf_password" name="conf_password" type="password" placeholder="Confirm Password" class="form-control input-md"> 
                    </div>
                </div>

                <div class="form-group">
                      <label class="col-md-4 control-label">Change-Image:</label> 
                    <div class="col-md-6" >
                       <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-preview thumbnail" style="height: auto; width: auto; max-width: 40%; max-height: 600px;">
                        <img id="showimage" src="#" alt="your image" />

                       </div>
                      <div>

                        <span class="btn btn-file"><input type="file" name="image" onchange="readURL(this);"></span>
    
                      </div>
                   </div>
                </div>
               </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>




<script type="text/javascript" src="./dist/js/jquery-2.1.0.min.js"></script>
  <script type="text/javascript" src="./dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="./dist/js/validator.js"></script>


</body>


</html> 