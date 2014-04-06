<?php
        include('../model/user.php');
        include ('../model/student.php');

        $U_id=$_GET['U_id'];
        $row= userInfo($U_id);
        $email=$row['email'];
        $url=get_gravatar($email); 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Donor Dashboard</title>
  <link href="./dist/css/bootstrap.css" rel="stylesheet">
  <link href="./dist/css/custom.css" rel="stylesheet" type='text/css'>
 <!-- <link href='http://fonts.googleapis.com/css?family=Cabin+Sketch' rel='stylesheet' type='text/css'>-->
  <style type="text/css">
@font-face{
      font-family:'KGSecondChancesSketch'; 
      src:url('fonts/KGSecondChancesSketch.ttf');

     /* font-family: 'CabinSketch';
      src: url('fonts/CabinSketch-Regular.otf');*/
         }
  
    body{
     
      background-repeat:repeat;

    padding-top: 80px;

    }
    
    /*img {
    position: relative;
    float:left;
    }*/

    img {
    float:left;
    position: relative;
    display: block;
    height: auto;
    max-width: 100%;
  }
  </style>
</head>

<body>

	
	<!-- Navbar section -->
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    	<div class="container">
    
    		<div class="navbar-header" style="height: 50px;">
    
          
        		<a class="navbar-brand" href="index.php"><h1 style="font-family:'KGSecondChancesSketch' cursive; margin-top: -9px;">LearnEm</h1></a>
        	</div>

        	<div class="collapse navbar-collapse">
            	<ul class="nav navbar-nav">
                <li><a href="listofstudents.php?U_id=<?php echo $U_id; ?>">AllStudents</a></li>
           		</ul>

        		<div class="navbar-collapse collapse">
             		<div class="navbar-form navbar-right"> 
              </div><!--/.navbar-collapse -->
            </div>
            	</div><!--/.navbar-collapse -->
        	</div>      	
    	</div> 
<?php 
$students=getStudents($U_id); 
$noofStudents=count($students);
?>
		
  <div class="container">
	  <!-- Donor Detail Row-->
 	  <div class="row">
    	<div class="col-md-12" >
     		<div class="well" >
      
        		<img src="<?php echo $url; ?>" alt="Please Update Your Picture" width="200px" height="200px" style="margin:10px;    margin-right:30px;"/>
        		<button type="submit" class="btn btn-success" style="font-family: verdana; float:right; margin-right:50px; width:150px; margin-top:20px;"><h4>Edit Profile</h4></button>
        		<h2><?php echo $row['name'];?> </h2>
        		<br>
        		<p style="font-size:26px" "text-type:bold">Donated to <?php echo $noofStudents ; ?> Students -- Donate to More</p>
      	</div>
    	</div>
    </div>

  

  	<!-- Heading for Donated list row-->
  	<div class="row">
    	<h1 style="text-align:center; font-family:Cabin Sketch"><?php echo $row['name'];?> Donated Student List</h1>

    	<br>  
    </div>
<?php 

    foreach($students as $student):
               
            $profilelink='studentprofile.php?S_id='.$student['S_id'].'&U_id='.$U_id.'';

                $sum_amount=getFundedAmount($student['S_id']);
                $requiredamount = $student['scholar_AMT'];
                $percentage = (($sum_amount/$requiredamount)*100);
            
  ?>
  
  	<div class="row">
          <a href="<?php echo $profilelink; ?>" style="text-decoration:none;color:#111111;">
    	<div class="col-md-4" >
        	<div class="well" >
        	           <!-- style="width: 340px;"-->
          		<img src=<?php echo $student['image_path']; ?> alt="donate"align="center" style="height:200px; width:320px" ></img> 
          		<br>

          		<h3><?php echo $student['sname'];?></h3>
          		<p ><?php echo $student['para'];?> </p></a>

          		<div class="progress progress-striped">
                
          		<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-    valuemax="100" style="width: <?php echo $percentage; ?>%">
              		<b style="color:#111111;"><?php echo $percentage; ?> Complete</b>
           			</div>
          		</div>

          		<p style="text-align:left"><b>4</b> days to go <b><?php echo "Rs. ".$sum_amount;?></b> 
              pledged out of <?php echo $requiredamount; ?>
            		</p>
      <div class="row">
        <form method="POST" action="donate.php">
          <input type="hidden" name="U_id" value="<?php echo $U_id ; ?>" >
          <input type="hidden" name="S_id" value="<?php echo $student['S_id']; ?>" >
         <div class="col-md-8">

            <input type="text" name="amount" placeholder="$ " class="form-control input-md" > 

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
  <div class="row">
    <footer class="footer" style="text-align:center" class="row">
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
  </div>

</div>
</div>
</body>

</html> 