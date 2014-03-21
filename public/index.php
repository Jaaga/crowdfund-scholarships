<?php include('../model/student.php') ?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
  <title>Home</title>
  <link href="../dist/css/custom.css" rel="stylesheet" type='text/css'>
  <link href="../dist/css/bootstrap.css" rel="stylesheet">
  <link href="jumbotron.css" rel="stylesheet">
   
<style type="text/css">

	body{
background: url("./images/wood1.png");
background-repeat:repeat;
}
h4 { position:relative;
    color:#fff;
    background:#3ea99f;
    font-size:1.5em;
    clear:both;
    padding:10px 10px 10px 20px;
    margin-left:20px;
    margin-right: 20px;
    margin-bottom:20px;
    /*text-shadow:0 -1px #d0284b, 0 1px #f96080;*/

    -moz-box-shadow:2px 2px 0 rgba(0,0,0,0.1);
    -webkit-box-shadow:2px 2px 0 rgba(0,0,0,0.1);
    -o-box-shadow:2px 2px 0 rgba(0,0,0,0.1);
    box-shadow:2px 2px 0 rgba(0,0,0,0.1);
  }

h4:before{
    content:" ";
    background:url(../img/css/ribbon.png);
    display:block;
    width:10px;
    height:10px;
    position:absolute;
    bottom:0;
    left:0;
    margin-bottom:-10px;
    z-index:-1;
}</style>
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
    
      <div class="navbar-header" style="height: 50px;">
    
          
            <a class="navbar-brand" href="index.php"><h1 style="font-family:'Cabin Sketch' cursive; margin-top: -9px;">LearnEmp<h1></a>
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


  <div class="container1" align="center">
    
    <div align="center">

    <img src="./images/jaaga-study1.png"/>

      <div class="pitch">
        <h2>Philanthropists leverage our trusted crowdfunding platform to provide financial 
        aid to aspiring students empowering them to pay it forward</h2>
      </div>
    </div>
    <!-- Standard button -->

    <div class="buttontext">
      <h3>Apply for Scholarship</h3>
    </div>

    <div class="studentbutton">
  
      <a href="application.html">
      <button type="button" class="btn btn-danger btn-lg" align="center">Submit Profile</button>
      </a> 
    </div>
    <!-- Standard button -->

    <div class="buttontext2">
      <h3>View Scholarship Applications</h3>
    </div>

    <div class="donatebutton">
        <a href="listofstudents_v8.html">
        <button type="button" class="btn btn-success btn-lg" align="center">View Profiles</button>
        </a> 
      </div>
        <br>
<?php $students= getStudentList(); ?>
      <div class="row">
        <div class="col-md-4">
          <div class="well">
            <h4>Featured</h4>
          <img src="./images/student01.jpg" style="height:200px; width:300px">
            <h2><?php echo $students[0]['fname']; ?> </h2>
            <p style="text-align: justify">I am a brilliant student with a bright future but am unable to support my education due to a paucity of funds. Please do help fund me so that I can realise my dreams</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="well">
              <h4>Featured</h4>
            <img src="./images/student02.jpg" style="height:200px; width:300px"> 
            <h2><?php echo $students[1]['fname'] ?></h2>
            <p style="text-align: justify">I am a brilliant student with a bright future but am unable to support my education due to a paucity of funds. Please do help fund me so that I can realise my dreams</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="well">
              <h4>Featured</h4>
            <img src="./images/student03.jpg" style="height:200px; width:300px"> 
             <h2><?php echo $students[2]['fname'] ?></h2>
             <p style="text-align: justify">I am a brilliant student with a bright future but am unable to support my education due to a paucity of funds. Please do help fund me so that I can realise my dreams</p>
           </div>
          </div>
        </div>
      </div>

  <h1 style="text-align:center; font-family:'Cabin Sketch' cursive; font-size:48px;" id="hiw" >How it Works</h1>

  <br>

  <div class="container1" align="center">
    <div class="row">
        <div class="col-lg-4">
          <img src="./images/Donation.jpg" alt="donate" class="img-circle" align="center" style="Height:200px"></img> 
          <br><h3>MAKE A DONATION</h3>
          <p style="text-align: justify">Our system is simple. We select candidates for a scholarship based on certain criteria preset by our team.We consider economic background, academic performance and extra curricular skills while making our selections, but also look for that x-factor while making our choices.</p>

        <br>

        </div>

      <div class="col-lg-4">
        <img src="./images/Student_benefit.jpg" alt="donate" class="img-circle" style="height:200px"></img> 
        <br><h3>STUDENT BENEFITS FROM LOAN</h3>
        <p style="text-align: justify">You as a donor choose the candidate you would like to sponsor. The student utilizes the loan for paying his/her academic fee and to cover basic necessities during the course.</p>
          <br><br>
      </div>

        <div class="col-lg-4">
          <img src="./images/Pay_it.jpg" alt="donate" class="img-circle" style="height:200px"></img> 
          <br><h3>STUDENT PAYS IT FORWARD</h3>
          <p style="text-align: justify">The student who has been sponsored through our system gets inducted into an honour-based pay-it-forward process wherein once the student graduates and begins to earn, he/she is encouraged to sponsor another student.</p>
  
      </div>
    </div>
  </div>


  <div class="container1">
      <div class="row">
    
      <div class="col-lg-12" style="text-align:center">
          <h1 class="faq-head" align="center" id="faq" style="font-family:'Cabin Sketch' cursive;">There's More!</h1>

          </div>
      </div>
  </div>

    <div class="container1">
    <div class="row">
      <div style="text-align:right">
        <article class="faq-content" align="right" style="text-align:justified">

          <h4>How does LearnEmp work?</h4>
          <p>LearnEmp is a social crowdfunding platform for students who cannot afford higher education at their desired university or course. LearnEmp enables the donor to identify a student's potential and accomplishments and make a contribution in order to help and empower the student.</p>

          <br>
          <h4>Will the donor be paid back?</h4>

          <p>The donor is not paid back. LearnEmp works on the principle of 'Pay it Forward Loans'. When a donor makes a contribution towards a student in need, he/she will automatically oblige the student in question to make a contribution in the future to fund and help another student in need. It's all about ensuring a better future delivered by the promising students on roll.</p>

          <br>
          <h4>How much should I donate?</h4>

          <p>When you have browsed through our list of students in need of funding, you can pick any one and donate any amount you prefer. The minimum amount is $5 (Rs.300). On every student's page you can view the funding required and how much the student has already been funded. You will receive a letter of gratitude from the student and LearnEmp for your contribution.</p>
        
          </article>
      </div>
      
      </div>
  </div>

  <br>

  <div class="container1">
    <div class="row">
    <div class="col-lg-12">
      <h1 class="faq-head" style="font-family:'Cabin Sketch' cursive;">About Us</h1>
      </div>
    </div>

    <div class="row">
  
        <article class="faq-content">
            <h2>The Team</h2>
            <p>Founded in January 2014, LearnEmp comprises eight individuals from across India who are passionate about learning and sharing knowledge and skills. The team was brought together by Jaaga Study, an initiative by Freeman Murray. The team strives to level the play field by providing opportunities to students who do not have the means to pursue higher education due to a lack of funding. </p>

            <br>
     
        
        <div align="center">
          <br>
          <img src="./images/stephanie1.jpg" style="height:100px" alt="Stephanie" class="img-rounded">
            
              <img src="./images/manoj.jpg" style="height:100px; margin-left:30px" alt="Manoj" class="img-rounded">
            
              <img src="./images/abhinay.jpg" style="height:100px; margin-left:30px"  alt="Abhinay" class="img-rounded">

              <img src="./images/sushil.jpg" style="height:100px; margin-left:30px" alt="Sushil" class="img-rounded">

              <br>
              <br>

              <img src="./images/vaibhav.jpg" style="height:100px"  alt="Vaibhav" class="img-rounded" >

              <img src="./images/Sai.jpg" style="height:100px; margin-left:30px" alt="Sai" class="img-rounded">

              <img src="./images/RJ.JPG" style="height:100px; margin-left:30px" alt="Rajeef" class="img-rounded" >

              <img src="./images/sujay.jpg" style="height:100px; margin-left:30px" alt="Sujay" class="img-rounded">

              <br>
            </div>
        </article>
    
    </div>
    <br>

      <div class="faq-content">

     
        
      <h2 style="font-family:'Cabin Sketch' cursive;">Get Involved</h2>
      <p>After you've sponsored your first student or even otherwise, we would like you to stay involved with us by keeping in touch via 
      <a href="www.facebook.com">Facebook </a> and <a href="www.twitter.com">Twitter.
      </a>If you would like to put in some time volunteering with our organization, feel free to drop us an email at <a href="mailto:volunteer@learnemp.com">volunteer@learnemp.com</a>.</p>
    </div>
  </div>
  
    <div class="container1" align="center">
      <h2 style="font-family:'Cabin Sketch' cursive;">Get in Touch</h2>
      <p align="center"> 
      1, Penthouse 01<br>
      Rich Homes<br>
      Richmond Road<br>
      Bangalore - 560025<br>
      INDIA<br>
      </p>

    <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://bit.ly/1fKde81">

    </iframe>

    <br>

    <small><a href="http://bit.ly/1otljDy" style="color:#0000FF;text-align:left" align="right">View Larger Map</a>
    </small>        
    </div>

  <hr>

  <footer class="footer" style="text-align:center">
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
</body>

</html> 