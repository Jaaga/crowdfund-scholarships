<?php include('../model/student.php'); ?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
  <title>Home</title>
  <link href="./dist/css/bootstrap.css" rel="stylesheet">
  <link href="jumbotron.css" rel="stylesheet"> 
  <link href="./dist/css/custom.css" rel="stylesheet" type='text/css'>
    
  <style type="text/css">

   @font-face{
      font-family:'KGSecondChancesSketch'; 
      src:url('fonts/KGSecondChancesSketch.ttf');

     /* font-family: 'CabinSketch';
      src: url('fonts/CabinSketch-Regular.otf');*/
         }
  body{
   
    padding-top: 80px;
  }
  
  .feature { 
    position:relative;
    color:#fff;
    background:#3ea99f;
    font-size:1.5em;
    clear:both;
    padding:10px 10px 10px 20px;
    margin-left:20px;
    margin-right: 20px;
    margin-bottom:20px;
    text-align: center;
    /*text-shadow:0 -1px #d0284b, 0 1px #f96080;*/

  
    -moz-box-shadow:2px 2px 0 rgba(0,0,0,0.1);
    -webkit-box-shadow:2px 2px 0 rgba(0,0,0,0.1);
    -o-box-shadow:2px 2px 0 rgba(0,0,0,0.1);
    box-shadow:2px 2px 0 rgba(0,0,0,0.1);
    }
    .feature-image{
      height:200px;
       width:280px;
          
    margin-left:20px;
    margin-right: 20px;
    margin-bottom:20px;
    }

  .header-faq {
    /*This is the  header for FAQ(in the blue box)*/
  
    position:relative;
    color:#fff;
    background:#3ea99f;
    font-size:1.5em;
    clear:both;
    padding:10px 10px 10px 20px;
    margin-left:20px;
    margin-right: 20px;
    margin-bottom:0px;
    font-size: 28px;
    /*text-shadow:0 -1px #d0284b, 0 1px #f96080;*/
  
    -moz-box-shadow:2px 2px 0 rgba(0,0,0,0.1);
    -webkit-box-shadow:2px 2px 0 rgba(0,0,0,0.1);
    -o-box-shadow:2px 2px 0 rgba(0,0,0,0.1);
    box-shadow:2px 2px 0 rgba(0,0,0,0.1);
  }


  .content-faq{
    /*This is the actual content for FAQ(in the white box)*/
  
  
    background:white;
    color: black;
    width: -100px;
    padding:10px 10px 10px 20px;
    margin-left:20px;
    margin-right: 20px;
    margin-bottom:20px;
    border-radius: 5px;
    font-size: 18px;
    line-height: 30px;
  } 

  img {
    
    display: block;
    height: auto;
    max-width: 100%;
  }
  </style>
</head>

<body>

<div class="container" >

  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
    
      <div class="navbar-header" style="height: 50px;">
    

        <a class="navbar-brand" href="index.php">
        <h1 style="font-family:'KGSecondChancesSketch' cursive; margin-top: -9px;">LearnEm<h1></a>
      </div>


      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
              <li><a href="listofstudents.php">Sponsor</a></li>
              <li><a href= "#hiw">How it Works</a></li>
        </ul>

        <div class="navbar-collapse collapse">
          <div class="navbar-form navbar-right">
              <a href="usersignup.php" class="btn btn-danger">SignUp</a>
                <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Sign in</button> 
          </div>              
        </div>
      </div>
    </div>
  </div> 
    
  
    
  <!--<div align="center">-->
  <div class="row">

      <div class="col-md-12">

        <img src="./images/jaaga-study1.png">

        <div class="pitch">
          <h2>Philanthropists leverage our trusted crowdfunding platform to provide financial aid to aspiring students empowering them to pay it forward</h2>
        </div>

        <!--</div>-->
        <!-- Standard button -->

        <div class="buttontext">
        <h3>Apply for Scholarship</h3>
        </div>

        <div class="studentbutton">
  
        <a href="usersignup.php">
          <button type="button" class="btn btn-danger btn-lg" align="center">Submit Profile</button>
        </a> 
        </div>
        <!-- Standard button -->

        <div class="buttontext2">
        <h3>View Scholarship Applications</h3>
        </div>

        <div class="donatebutton">
        <a href="listofstudents.php">
          <button type="button" class="btn btn-success btn-lg" align="center">View Profiles</button>
        </a> 
        </div>
      </div>
  </div>
  </div>
        
  <br>

    
  <?php $students= getStudentList(); ?>

  <div class="row">

        <div class="col-md-4" >
          <div class="well">
            <h3 class="feature">Featured</h3>
            <img src=<?php echo $students[0]['image_path']?> class="feature-image">
            <h2><?php echo $students[0]['fname']; ?> </h2>
            <p style="text-align: justify; padding:1em 1em;" ><?php echo $students[0]['para'] ?></p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="well">
            <h3 class="feature">Featured</h3>
            <img src=<?php echo $students[1]['image_path'] ?> class="feature-image"> 
            <h2><?php echo $students[1]['fname'] ?></h2>
            <p style="text-align: justify; padding:1em 1em;"><?php echo $students[1]['para'] ?></p>
          </div>
        </div>

        <div class="col-md-4" >
          <div class="well">
            <h3 class="feature">Featured</h3>
            <img src=<?php echo $students[2]['image_path'] ?> class="feature-image"> 
            <h2><?php echo $students[2]['fname'] ?></h2>
            <p style="text-align: justify; padding:1em 1em;"><?php echo $students[2]['para'] ?></p>
          </div>
        </div>
  </div>

  <h1 style="text-align:center; font-family:'KGSecondChancesSketch' cursive; font-size:48px;" id="hiw">How it Works</h1>

  <br>

  
  <div class="row" align ="center">
      <div class="col-lg-4">
          <img src="./images/Donation.jpg" alt="donate" class="img-circle" align="center" style="Height:200px"></img> 
          <br><h3 style="font-family:'KGSecondChancesSketch' cursive;">MAKE A DONATION</h3>
          <p style="text-align: justify; padding:1em 1em;"><!--We select candidates for a scholarship based on certain criteria preset by our team.We consider economic background, academic performance and extra curricular skills while making our selections, but also look for that x-factor while making our choices.</p>-->
          View our student list and donate an amount. You can share the candidates profile to give them a further boost in achieving their goal. A little donation from your end could go a long way in helping someone for life.</p>
          <br>
      </div>

      <div class="col-lg-4">
        <img src="./images/Student_benefit.jpg" alt="donate" class="img-circle" style="height:200px"></img> 
        <br><h3 style="font-family:'KGSecondChancesSketch' cursive;">AID THE STUDENT</h3>
        <p style="text-align: justify; padding:1em 1em;">You as a donor choose the applicant you would like to sponsor. The student utilizes the loan for paying his/her academic fee and to cover basic necessities during the course.</p>
          <br><br>
      </div>

      <div class="col-lg-4">
          <img src="./images/Pay_it.jpg" alt="donate" class="img-circle" style="height:200px"></img> 
          <br><h3 style="font-family:'KGSecondChancesSketch' cursive;">STUDENT PAYS IT FORWARD</h3>
          <p style="text-align: justify; padding:1em 1em;"><!--The student who has been sponsored through our system gets inducted into an honour-based pay-it-forward process wherein once the student graduates and begins to earn, he/she is encouraged to sponsor another student.</p>-->
          A student who has been succesfully sponsored gets inducted into a pay-it-forward process wherein once the student graduates and begins to earn, he/she is encouraged to sponsor another student.
      </div>  
  </div>
  


  
  <div class="row">
    <h1 class="faq-head" align="center" id="faq" style="font-family:'KGSecondChancesSketch' cursive;">
          There's More!</h1>
  </div>
 

  <!--<div class="container">-->

  <div class="row">
      
        <article class="faq-content" align="right" style="text-align:justified">

          <h3 class="header-faq">How does LearnEm work?</h3>
          <p class="content-faq">We're a social crowdfunding platform for students who cannot afford higher education at their desired university or course. LearnEm enables the donor to identify a student's potential and accomplishments and make a contribution in order to help and empower the student.</p>

          <br>
          <h3 class="header-faq">Will the donor be paid back?</h3>

          <p class="content-faq">The donor is not paid back. LearnEm works on the principle of 'Pay it Forward Loans'. When a donor makes a contribution towards a student in need, he/she will automatically oblige the student in question to make a contribution in the future to fund and help another student in need. It's all about ensuring a better future delivered by the promising students on roll.</p>

          <br>
          <h3 class="header-faq">How much should I donate?</h3>

          <p class="content-faq">When you have browsed through our list of students in need of funding, you can pick any one and donate any amount you prefer. The minimum amount is $5 (Rs.300). On every student's page you can view the funding required and how much the student has already been funded. You will receive a letter of gratitude from the student and LearnEm for your contribution.</p>
          <br>
          <br>
          <h2 class="header-faq" style="background-color: black;">Get Involved</h2>
           <p class="content-faq">After you've sponsored your first student or even otherwise, we would like you to stay involved with us by keeping in touch via 
          <a href="www.facebook.com">Facebook </a> and <a href="www.twitter.com">Twitter.
          </a>If you would like to put in some time volunteering with our organization, feel free to drop us an email at <a href="mailto:volunteer@learnem.com">volunteer@learnem.com</a>.</p>
        </article>
  </div>
      
  <!--    </div>
  </div>-->

  <br>

  <!--<div class="container1" align="center">-->
  <div class="row" align="center">
      <h1 style="font-family:'KGSecondChancesSketch' cursive;">Get in Touch</h1>
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
  <!--</div>-->

  <br>

  
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

  <!-- Modal -->
  <div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Login into Crowdfund</h4>
      </div>

      <div class="modal-body">
        <div class="navbar-collapse collapse">
              <form action="donorlogin.php" method="post">
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Username:</label>  
                    <div class="col-md-4">
                      <input id="email" name="email" type="text" placeholder="Username" class="form-control input-md"> 
                    </div>
                </div>

                <br>
                <br>
  
                <!--Text input-->
                
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Password:</label>

                    <div class="col-md-4">
                      <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md">
                    </div>
                </div>

                <br>
                <br>

                <div class="modal-footer">
                  <button type="submit" class="btn btn-default">Log In</button>
                </div> 
              </form>
        </div>
      </div>      
    </div>
    </div>
  </div>

  <script type="text/javascript" src="./dist/js/jquery-2.1.0.min.js"></script>
  <script type="text/javascript" src="./dist/js/bootstrap.min.js"></script>
</body>

</html> 
