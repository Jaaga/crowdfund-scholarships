<html>

<head>
	<title>Student Dashboard</title>
	<link href="./dist/css/bootstrap.css" rel="stylesheet">
	<link href="./dist/css/slider.css" rel="stylesheet">
  <link href="./dist/css/custom.css" rel="stylesheet" type='text/css'>
  

	<style>
		body{
background: url("./images/wood1.png");
background-repeat:repeat;
}

		#bg{
    	background:url('./images/crowd_n.jpg');
    	height: 500px;
    	margin-top: 90px;
		}

	#student_dash{
     background:url('./images/student.jpg');
      
      margin-top: 15px;
      
    }
    
	</style>
</head>

<body>

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
	
      
    <br>
    <br>
    <br>

	<div class="container">
    	<div class="row">
        	<div class="col-md-4">
		
				<div class="profilename">
					<h3 align="left" style="font-family: Cabin Sketch;"> Welcome Vaibhav !</h3>
				</div>

				<br>

				
				<img src="./images/student.jpg"  style="height:200px; width:500px" id="student_dash" class="img-responsive">
				
				

				<input type="file" id="profile_pic" name="upload" style="visibility: hidden; width: 1px; height: 1px" multiple />

				<a href="" onclick="document.getElementById('profile_pic').click(); return false">

          		<span class="glyphicon glyphicon-edit"></span>

        		</a>
	 			 

     			<br><br>

		   		<div class="well" width="50%">
		   		<a class="edit"href="#">

              	<span class="glyphicon glyphicon-edit"></span>
        
        		</a>

        		<h3><b>Student Story</b></h3>
        		<br>
        		<p>Hey Guys! Please sponsor me for my new adventure with Jaaga. Currently, I have learnt HTML, CSS and Javascript on my own through Codecademy.
        		<br>
        		
 
    				
				</p>
    				</div>
		
			</div>

			<div class="col-md-4">
    			
				

    			<br><br>
				

 				<div class="well" width="50%" id="prework">

					<a class="edit" href="#" >

            			<span class="glyphicon glyphicon-edit"></span>
          			</a>
  					<h3>PreWork Status </h3>
    				<p>CodeAcademy</p>
      				<div class="progress">
        				<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
        					<span class="sr-only">40% Complete (success)</span>
        				</div>
      				</div>

     				<p>CodeSchool</p>
     				<div class="progress">
        				<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
    						<span class="sr-only">20% Complete</span>
    					</div>
    				</div>

    				<p>TeamTreehouse</p>
      				<div class="progress">
        				<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
        					<span class="sr-only">40% Complete (success)</span>
        				</div>
      				</div>


    				<p>CodeJam</p>
      				<div class="progress">
        				<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
        					<span class="sr-only">40% Complete (success)</span>
        				</div>
      				</div>

      				<p>W3School</p>
      				<div class="progress">
        				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
        					<span class="sr-only">40% Complete (success)</span>
        				</div>
      				</div>
	  
				</div>
			</div>


			<div class="col-md-4">
				
				<div class="viewprofile">
   					<form action="studentprofile_v7.html">
       					<button type="submit" class="btn btn-success" style="font-family: verdana;">&nbsp&nbsp&nbspView Profile&nbsp&nbsp&nbsp</button>
       				</form>
       				<form action="application.html">

       					<button type="submit" class="btn btn-success" style="font-family: verdana;">Edit Application</button>
    				
    				</form>
    			</div>	


    			<div class="well" style="background-color:#33cc66; height:200px" id="bg" >
			  
						<div class="sponsor_data">
							<h2> <b>34 </b>Donors Backed </h2>
							<h2> <b>Rs.40,000</b> Pledged </h2>
							<h2> <b>4</b> days to go</h2>
  							
    					</div>

  				</div>

  				<div class="well" width="30%">
  					<a class="edit"href="#">

             			<span class="glyphicon glyphicon-edit"></span>
           			 </a>
        			<h3><b>How I will spend your money</b></h3>
        			<br>
        			<p>Lorem Ipsum Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem 

        			<br><br>
 
    				
					</p>
    			</div>

        	</div>
    	</div>
    </div>
    
        
	<footer class="footer" style="text-align:center">
  		<nav>
    		<ul>
    			<a href="home_v7.html">Home </a> |
    			<a href= "#about">About Us</a> |
      			<a href= "#hiw">How It Works</a> |
      			<a href="#faq">FAQ</a> |
      			<a href="#contact">Contact</a>  
    		</ul>
  		</nav> 
	</footer>
</body>

</html>