<?php include('../model/student.php');
include('../model/user.php');
setlocale(LC_MONETARY, 'en_IN');

?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
  <title>Home</title>
  <link href="./dist/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" rel="stylesheet" href="./dist/css/bootstrapValidator.min.css"/>
  <link href="jumbotron.css" rel="stylesheet"> 
  <link href="./dist/css/custom.css" rel="stylesheet" type='text/css'>
    
<style type="text/css">

   @font-face{
      font-family:'KGSecondChancesSketch'; 
      src:url('fonts/KGSecondChancesSketch.ttf');
         }
  body{
   padding-top: 100px;
  }

 h2{
  text-align:center;
  }

 .image{
    background-image:url("../public/images/footsteps-sand.jpg");
    background-size: cover;
    height: 650px;
    background-attachment: fixed;
   margin: -70px;
    }
  .hiw-image{
     background-image:url("../public/images/book.jpg");
    background-size: cover;
    height: 650px;
    background-attachment: fixed;
   margin: -70px;

  }
  .faq-image{
      background-image:url("../public/images/classroom.jpg");
    background-size: cover;
    height: 650px;
    background-attachment: fixed;
   margin: -70px;
   
  }

  .faq
{
  padding-top: 100px;
}
/*.faq-background{
    background-color: rgba(111, 101, 101, 1);
    background-size: cover;
    height: 1400px;
    width: 100%;*/

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
              <li><a href= "#faq">Know More</a></li>
          

         <?php if(isset($_COOKIE["email"])){ 
                  $email=$_COOKIE['email'];
                 $whois=whois($email);
                ?> 
                <li><a href="userdashboard.php">UserDashboard</a>

                <?php if(is_numeric($whois)){ ?>
                 <li><a href="studentdashboard.php">StudentDashboard</a></ul>
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
  , lbl_button: "Donate"
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
  , lbl_button: "Donate"
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
    </div> 
  </div>


    <div class="container">
      <div class="row">
        <div class="x">
        <div class="col-lg-12"> 
          <div class="image">
            <div class="color">
             <!--<h1 style="font-size:70px; padding: 60px 0 0 20px;">Scholarships<br> that are Paid Forward</h1>-->
             <h1 style="font-size:5em; padding-top: 40px; padding-left: 55px;">Scholarships<br> that are Paid Forward</h1>
              <p style="font-size:1.5em; padding-top: 50.5px; padding-left: 55px; font-family: Times New Roman;">Help students seeking education by providing financial aid, enabling him or her 
              to fund the next candidate.</p>
            </div>
          </div>

          <div class="row" style="margin:-250px 0 100px 0;">
            <div class="col-lg-6" align="center">
              <h3 style="color:white;">Apply for Scholarship</h3>
                  <a href="usersignup.php">
              <button type="button" class="btn btn-danger btn-lg" align="center">Submit Profile</button>
               </a> 
            </div>
            <div class="col-lg-6" align="center">
              <h3 style="color:white;">View Scholarship Applications</h3>
                <a href="listofstudents.php"> 
              <button type="button" class="btn btn-success btn-lg" align="center">View Profiles</button>
              </a>
            </div>
            </div>
          </div>
          </div>      
        </div>
      </div>
    
        
    <br>

    
    <?php $students= featuredStudents();
          shuffle($students);
          ?>

    <div class="row" style="padding-top: 70px; padding-bottom: 40px;">
<?php foreach ($students as $student) {
  $profilelink='studentprofile.php?S_id='.$student['S_id'].'';
     ?>
        <a href="<?php echo $profilelink; ?>" style="text-decoration:none;color:#111111;"><div class="col-md-4" >
          <div class="well">
            <h3 class="feature">Featured</h3>
            <img src=<?php echo $student['image_path']?> class="feature-image">
            <h2><?php echo $student['sname']; ?> </h2>
            <p style="text-align: justify; padding:1em 1em;" ><?php echo $student['para'] ?></p>
          </div>
          
        </div>
        </a>
<?php } ?>
    </div>







<div class="hiw-image">
    <h1 style="text-align: center; font-family:'KGSecondChancesSketch' cursive; font-size:7em; padding: 250px;" id="hiw">How it Works</h1>
</div>
    <br>

  
    <div class="row" align ="center" style="padding-bottom: 50px;">
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







    <div class="faq-image">
       <div class="row">
           <h1  align="center" id="faq" style="font-family:'KGSecondChancesSketch' cursive; font-size:45px; padding-top: 300px; color: white; font-size: 7em;text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">
          Know More!</h1>
       </div>
    </div>

      
 

    <!--<div class="container">-->

    
      
       

 <div class="faq" style="text-align: justify; margin: 0 auto; width: 50%;">
     <div class="faq-background">
        <div class="oval-thought-border" style="text-align: justify; margin: 0 auto;">
              <h2>What is LearnEm?</h2>
                <p>
                  LearnEm is a social crowdfunding platform for
                   students who cannot afford higher education at their 
                  desired university or course. LearnEm enables the donor 
                  to identify a student's potential and accomplishments and 
                  make a contribution in order to help and empower the student.
                   </p>        
              </div>
                <br>
              <div class="oval-thought-border" style="text-align: justify; margin: 0 auto;">
                  <h2>Will the donor be paid back?</h2>
                  <p>The donor is not paid back. LearnEm works on the principle of 'Pay it Forward Loans'. 
                  When a donor makes a contribution towards a student in need, he/she will automatically oblige 
                  the student in question to make a contribution in the future to fund and help another student in need.
                   It's all about ensuring a better future delivered by the promising students on roll.</p>
              </div>
              <br>
              <div class="oval-thought-border" style="text-align: justify; margin: 0 auto;">
              <h2>How much should I donate?</h2>
              <p>When you have browsed through our list of students in need of funding, you can pick any one and donate
               any amount you prefer. The minimum amount is $5 (Rs.300). On every student's page you can view the funding
                required and how much the student has already been funded. You will receive a letter of gratitude from the student 
                and LearnEmp for your contribution.</p>
              </div>
    </div>
</div>
          <br>
   <div class="row">
      <div class="col-lg-4">

         <article style="text-align:justified; max-width:1000px; margin: 0 auto;">

          <h2 style="font-family:'KGSecondChancesSketch' cursive;">Get Involved</h2>
           <p class="content-faq">After you've sponsored your first student or even otherwise, we would like you to stay involved with us by keeping in touch via 
          <a href="www.facebook.com">Facebook </a> and <a href="www.twitter.com">Twitter.
          </a>If you would like to put in some time volunteering with our organization, feel free to drop us an email at <a href="mailto:volunteer@learnem.com">volunteer@learnem.com</a>.</p>
         </article>

        
      </div>

      <div class="col-lg-4">

      <h2 style="font-family:'KGSecondChancesSketch' cursive;">Get in Touch</h2>
      <p align="center"> 
      1, Penthouse 01<br>
      Rich Homes<br>
      Richmond Road<br>
      Bangalore - 560025<br>
      INDIA<br>
      </p>

      <iframe width="200" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://bit.ly/1fKde81">

      </iframe>

      <br>

      <small><a href="http://bit.ly/1otljDy" style="color:#0000FF;text-align:left" align="right">View Larger Map</a>
      </small>  
    </div>      
    <!--</div>-->
    <div class="col-lg-4">
        <h2 style="font-family:'KGSecondChancesSketch' cursive;">Explore</h2>
          <ul>
          <li><a href="index.php">Home </a> </li>
          <li><a href="#about">About Us</a> </li>
          <li><a href= "#hiw">How It Works</a> </li>
           <li> <a href="#faq">FAQ</a> </li>
           <li> <a href="#contact">Contact</a></li>  
      </ul>
    </div>
  </div>
  

        
      </div>
     

   </div>







   
    
    
      
    <!--    </div>
    </div>-->

    <br>

    <!--<div class="container1" align="center">-->

  <!-- Modal -->
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

  <script type="text/javascript" src="./dist/js/jquery-2.1.0.min.js"></script>
  <script type="text/javascript" src="./dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="./dist/js/validator.js"></script>
</body>

</html> 
