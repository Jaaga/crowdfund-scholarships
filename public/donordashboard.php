<!DOCTYPE html>
<html lang="en">
<html>
<head>
  <title>Donor Dashboard</title>
  <link href="./dist/css/bootstrap.css" rel="stylesheet">
 <!-- <link href='http://fonts.googleapis.com/css?family=Cabin+Sketch' rel='stylesheet' type='text/css'>-->
  <style type="text/css">
    body{
background: url("./images/wood1.png");
background-repeat:repeat;

  padding-top: 80px;

}
    
    img {
    position: relative;
    float:left;
    }
  </style>
</head>

<body>
<div class="container">
	
	<!-- Navbar section -->
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    	<div class="container">
    
    		<div class="navbar-header" style="height: 50px;">
    
          
        		<a class="navbar-brand" href="home_v9.html"><h1 style="font-family:'Cabin Sketch' cursive; margin-top: -9px;">LearnEmp<h1></a>
        	</div>

        	<div class="collapse navbar-collapse">
            	<ul class="nav navbar-nav">
                	<li><a href="listofstudents_v8.html">Sponsor</a></li>
                	<li><a href="#">Sign Up</a></li>
           		</ul>

        		<div class="navbar-collapse collapse">
             		<form class="navbar-form navbar-right" role="form">
                		<div class="form-group">
                  			<input type="text" placeholder="Email" class="form-control">
                		</div>

                		<div class="form-group">
                			<input type="password" placeholder="Password" class="form-control">
                		</div>

                		<button type="submit" class="btn btn-success" style="font-family: verdana;">Sign in</button> 
                		&nbsp 
              		</form>
            	</div><!--/.navbar-collapse -->
        	</div>      	
    	</div>
	</div> 
<?php
        include('../model/donor.php');
        $D_id=$_GET['id'];
        $row= donorInfo($D_id);
         
        ?>

	<!-- Donor Detail Row-->
 	<div class="row">
    	<div class="col-md-12" >
     		<div class="well" >  
        		<img src="./images/donor.jpg" width="200px" height="200px" style="margin:10px;    margin-right:30px;"/> 
        		<button type="submit" class="btn btn-success" style="font-family: verdana; float:right; margin-right:50px; width:150px; margin-top:20px;"><h4>Edit Profile</h4></button>
        		<h2><?php echo $row;?> <h2/>
        		<p>Los Angeles, CA . Joined since Feb 2014 </p>
        		<p style="font-size:18px"> Born and raised in LA. Currently working selling electric vehicles and project planning for rad new projects taking place in LA. English Lit. graduate that loves to write and live life to the fullest!</>
        		<br>
        		<p style="font-size:26px" "text-type:bold">Donated to 9 Students -- Donate to More</p>
      		</div>
    	</div>
  	</div>

  

  	<!-- Heading for Donated list row-->
  	<div class="row">
    	<h1 style="text-align:center; font-family:Cabin Sketch"><?php echo $row;?> Donated Student List</h1>

    	<br>  
    </div>
<?php 
$D_id=$_GET['id'];
$students=getStudents($D_id);
    foreach($students as $student):
      ?>
	<!-- First row of students -->
  	<div class="row">
    	<div class="col-lg-4" >
        	<div class="well" >
        	<!-- style="width: 340px;"-->
          		<img src=<?php echo $student['image_path']; ?> alt="donate"align="center" style="height:200px; width:320px" ></img> 
          		<br>
          		<h3><?php echo $student['fname'];?></h3>
          		<p ><?php echo $student['para'];?> </p>
        
          		<div class="progress">
            		<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-    valuemax="100" style="width: 40%">
              			<span class="sr-only">40% Complete (success)</span>
           			</div>
          		</div>

          		<p style="text-align:left"><b>4</b> days to go <b> &nbsp&nbsp&nbsp<?php echo "RS".$student['scholar_AMT'];?></b> pledged
            		&nbsp&nbsp<button type="button" class="btn btn-success" style="margin-bottom:5px">Donate</button></p>
        	</div>
     	</div>
  <?php endforeach; ?>
      	<div class="col-lg-4" >
        	<div class="well" >
        		<a href="studentprofile_v10.html">
            	<img src="./images/student.jpg" alt="donate" style="height:200px; width:320px"></img>
          		</a>

          		<br>

          		<h3>Vaibhav</h3>
          		<p>Hey Guys! Please sponsor me for my new adventure with Jaaga. Currently, I have learnt HTML, CSS and Javascript on my own...</p>

          		<div class="progress">
            	<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
            		<span class="sr-only">40% Complete (success)</span>
            	</div>
          		</div>

        		<p style="text-align:left"><b>4</b> days to go <b>&nbsp&nbsp&nbspRs.40,000</b> pledged
          		&nbsp&nbsp<a href="studentprofile_v10.html">
          		<button type="button" class="btn btn-success" style="margin-bottom:5px">Donate</button></a>
          		</p>
        	</div>
      	</div>

      	<div class="col-lg-4" >
        	<div class="well">
          		<img src="./images/student01.jpg" alt="donate"  style="height:200px; width:320px"></img> 
          		<br><h3>Maria</h3>
          		<p> Hey Guys! Please sponsor me for my new adventure with Jaaga. Currently, I have learnt HTML, CSS and Javascript on my own...</p>

        		<div class="progress">
            		<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-    valuemax="100" style="width: 40%">
                		<span class="sr-only">40% Complete (success)</span>
            		</div>
          		</div>

         		<p style="text-align:left"><b>4</b> days to go <b>&nbsp&nbsp Rs.40,000</b> pledged
         		&nbsp<a href="studentprofile_v10.html">

          		<button type="button" class="btn btn-success" style="margin-bottom:5px">Donate</button>
          		</a>
          		</p>
        	</div>
      	</div> 
    </div>

  	
  	<!--second Row-->
    
    <div class="row">
    	<div class="col-lg-4" >
        	<div class="well">
          		<img src="./images/science7.jpg" alt="donate"align="center" style="height:200px; width:320px" ></img> 
          		<br>
          		<h3>Neha</h3>
          		<p >I am a brilliant student with a bright future but am unable to support my education due to a paucity of funds. </p>
        
          		<div class="progress">
            		<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-    valuemax="100" style="width: 40%">
            			<span class="sr-only">40% Complete (success)</span>
            		</div>
            	</div>
          	

        		<p style="text-align:left"><b>4</b> days to go <b> &nbsp&nbsp&nbspRs.40,000</b> pledged
             	&nbsp&nbsp<button type="button" class="btn btn-success" style="margin-bottom:5px">Donate</button></p>
        	</div>
     	</div>
  
    	<div class="col-lg-4" >
        	<div class="well">
          		<a href="studentprofile_v5.html">
            	<img src="./images/student3.jpg" alt="donate" style="height:200px; width:320px"></img>
          		</a>

          		<br>

				<h3>Anton</h3>
          		<p>Hey Guys! Please sponsor me for my new adventure with Jaaga. Currently, I have learnt HTML, CSS and Javascript on my own...</p>

          		<div class="progress">
            		<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
           				<span class="sr-only">40% Complete (success)</span>
            		</div>
          		</div>

          		<p style="text-align:left"><b>4</b> days to go <b>&nbsp&nbsp&nbspRs.40,000</b> pledged
          		&nbsp&nbsp<a href="studentprofile_v7.html">
          		<button type="button" class="btn btn-success" style="margin-bottom:5px">Donate</button></a>
          		</p>
        	</div>
    	</div>

    	<div class="col-lg-4">
        	<div class="well">
          		<img src="./images/student2.jpg" alt="donate"  style="height:200px; width:320px"></img> 
          		<br><h3>Robin</h3>
          		<p> Hey Guys! Please sponsor me for my new adventure with Jaaga. Currently, I have learnt HTML, CSS and Javascript on my own...</p>

          		<div class="progress">
            		<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-    valuemax="100" style="width: 40%">
                		<span class="sr-only">40% Complete (success)</span>
            		</div>
          		</div>

          		<p style="text-align:left"><b>4</b> days to go <b>&nbsp&nbsp Rs.40,000</b> pledged
          		&nbsp<a href="studentprofile_v7.html">

          		<button type="button" class="btn btn-success" style="margin-bottom:5px">Donate</button>
          		</a>
          		</p>
        	</div>
   		</div>
   	</div>
    
   	<!-- Third Row -->
    <div class="row">
    	<div class="col-lg-4" >
        	<div class="well" >
          		<img src="./images/628x471.jpg" alt="donate"align="center" style="height:200px; width:320px" ></img> 
          		<br>
          		<h3>Aparna</h3>
          		<p >I am a brilliant student with a bright future but am unable to support my education due to a paucity of funds.</p>
        
          		<div class="progress">
            		<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-    valuemax="100" style="width: 40%">
              			<span class="sr-only">40% Complete (success)</span>
            		</div>
         	 	</div>

         	 	<p style="text-align:left"><b>4</b> days to go <b> &nbsp&nbsp&nbspRs.40,000</b> pledged
            	&nbsp&nbsp<button type="button" class="btn btn-success" style="margin-bottom:5px">Donate</button></p>       
        	</div>
      	</div>
  
      	<div class="col-lg-4" >
        	<div class="well" >
          		<a href="studentprofile_v5.html">
            	<img src="./images/indian_student_computer.jpg" alt="donate" style="height:200px; width:320px"></img>
          		</a>

          		<br>

          		<h3>Prashant</h3>
          		<p>Hey Guys! Please sponsor me for my new adventure with Jaaga. Currently, I have learnt HTML, CSS and Javascript on my own...</p>

          		<div class="progress">
            		<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
            			<span class="sr-only">40% Complete (success)</span>
            		</div>
          		</div>

          		<p style="text-align:left"><b>4</b> days to go <b>&nbsp&nbsp&nbspRs.40,000</b> pledged
          		&nbsp&nbsp<a href="studentprofile.php">
          		<button type="button" class="btn btn-success" style="margin-bottom:5px">Donate</button></a></p>
        	</div>
      	</div>

    	<div class="col-lg-4" >
        	<div class="well">
          		<img src="./images/Indian-student.jpg" alt="donate"  style="height:200px; width:320px"></img> 
          		<br><h3>Soniya</h3>
          		<p> Hey Guys! Please sponsor me for my new adventure with Jaaga. Currently, I have learnt HTML, CSS and Javascript on my own...</p>

          		<div class="progress">
            		<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-    valuemax="100" style="width: 40%">
                		<span class="sr-only">40% Complete (success)</span>
            		</div>
          		</div>

          		<p style="text-align:left"><b>4</b> days to go <b>&nbsp&nbsp Rs.40,000</b> pledged
          		&nbsp<a href="studentprofile_v7.html">

          		<button type="button" class="btn btn-success" style="margin-bottom:5px">Donate</button>
          		</a>
          		</p>
        	</div>
      	</div>     
    </div>
</div> <!-- Main Container Close -->

<hr>

<!-- Footer -->
<div class="row">
    <footer class="footer" style="text-align:center" class="row">
      <nav>
        <ul>
          <a href="home_v3.html">Home </a> |
          <a href= "#about">About Us</a> |
          <a href= "#hiw">How It Works</a> |
          <a href="#faq">FAQ</a> |
          <a href="#contact">Contact</a>  
        </ul>
      </nav> 
    </footer>
</div>
</body>

</html> 