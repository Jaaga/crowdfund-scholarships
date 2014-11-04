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
      font-family:'Josefin Sans'; 
      src:url('fonts/JosefinSans-Regular.ttf');
         }

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
  .faq-image{
    background-image:url("../public/images/classroom.jpg");
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

  .faq
{
  padding-top: 100px;
}
/*.faq-background{
    background-color: rgba(111, 101, 101, 1);
    background-size: cover;
    height: 1400px;
    width: 100%;

  } */
  </style>
</head>

<body>

  <div class="container" >

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" style=" background-color: #25383c; border-color: #25383c;">
      <div class="container">
    
      <div class="navbar-header" style="height: 50px;">
    

        <a class="navbar-brand" href="index.php">

        <h1 style="font-family:'KGSecondChancesSketch'; margin-top: -9px;color: white; ">LearnEm<h1></a>

      </div>


      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
              <li><a href="listofstudents.php" style="color: white;">Sponsor</a></li>
              <li><a href= "#hiw" style="color: white;">How it Works</a></li>
              <li><a href= "#faq" style="color: white;">Know More</a></li>
          

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
  wallet_address: "1MZgG3NtUGWLinBhBf9GM97jUhikjuWeiP"
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
  wallet_address: "1MZgG3NtUGWLinBhBf9GM97jUhikjuWeiP"
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
              <a href="usersignup.php" class="btn btn-danger">Sign Up</a>
               
              <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Sign in</button> 
  
          </div>              
        </div><?php } ?>
      </div>
      </div>
    </div> 
  </div>


    <div class="container-fluid">
      <div class="row-fluid">
        <div class="col-lg-12"> 
          <div class="image">
            <div class="color">

             <h1 style="font-size:5em; padding-top: 0.5em; padding-left: 0.8em;font-family: 'Josefin Sans', 'sans-serif';">Scholarships<br> that are Paid Forward</h1>
              <p style="padding-top:1.5em; padding-left: 2.7em; font-family: 'Georgia'; font-size: 1.5em; ">Help students seeking education by providing financial aid, enabling them 
              to fund the next candidate.</p>
            
          <div class="row" style="padding-top:4em;">
            <div class="col-lg-6" align="center">
              <h3 style="color:white;font-family: 'Josefin Sans', 'sans-serif';">Apply for Scholarship</h3>
                  <a href="usersignup.php">
              <button type="button" class="btn btn-danger btn-lg" align="center">Submit Profile</button>
               </a> 
            </div>
            <div class="col-lg-6" align="center">
              <h3 style="color:white;font-family: 'Josefin Sans', 'sans-serif';">View Scholarship Applications</h3>
                <a href="listofstudents.php"> 
              <button type="button" class="btn btn-success btn-lg" align="center">View Profiles</button>
              </a>
            </div>
            </div>
            </div>
            </div>
          </div>
          </div>      
        </div>

        
    <br>

    <div class="container">
    <?php $students= featuredStudents();
          shuffle($students);
          ?>

    <div class="row" style="padding-top: 7em; padding-bottom: 4em;">
<?php 
$i=0;
foreach ($students as $student) {
  if($i==3) break;
  $profilelink='studentprofile.php?S_id='.$student['S_id'].'';
     ?>
        <a href="<?php echo $profilelink; ?>" style="text-decoration:none;color:#111111;">
          <div class="col-md-4" style="width:350px; text-align: justify; padding-left: 0px; padding-right: 0px; margin-left: auto; margin-right: auto;">
          <div class="well" style="width: 340px;">
            <h3 class="feature" style="font-family: 'Josefin Sans', 'sans-serif'; font-size: 28px;">Featured</h3>
            <img src=<?php echo $student['image_path']?> alt="donate"align="center" style="height:200px; width:300px"></img>
            <h2><?php echo $student['sname']; ?> </h2>
            <p style="text-align: justify; padding:1em;" ><?php echo $student['para'] ?></p>
          </div>
          
        </div>
        </a>
<?php 
$i++;
} ?>
    </div>
  </div>








<div class="hiw-image">
  <div class="row">
    <h1 align="center" id="hiw" style="font-family:'KGSecondChancesSketch'; font-size:7em; padding-top: 300px;">How it Works</h1>
</div>
</div>
    <br>

  
    <div class="row" align ="center" style="padding-bottom: 50px;">
      <div class="col-lg-4">
          <img src="./images/Donation.jpg" alt="donate" class="img-circle" align="center" style="Height:200px"></img> 
          <br><h3 style="font-family:'KGSecondChancesSketch';">MAKE A DONATION</h3>
          <p style="text-align: justify; padding:1em 1em;"><!--We select candidates for a scholarship based on certain criteria preset by our team.We consider economic background, academic performance and extra curricular skills while making our selections, but also look for that x-factor while making our choices.</p>-->
          View our student list and donate an amount. You can share the candidates profile to give them a further boost in achieving their goal. A little donation from your end could go a long way in helping someone for life.</p>
          <br>
      </div>

      <div class="col-lg-4">
        <img src="./images/Student_benefit.jpg" alt="donate" class="img-circle" style="height:200px"></img> 
        <br><h3 style="font-family:'KGSecondChancesSketch';">AID THE STUDENT</h3>
        <p style="text-align: justify; padding:1em 1em;">You as a donor choose the applicant you would like to sponsor. The student utilizes the loan for paying his/her academic fee and to cover basic necessities during the course.</p>
          <br><br>
      </div>

      <div class="col-lg-4">
          <img src="./images/Pay_it.jpg" alt="donate" class="img-circle" style="height:200px"></img> 
          <br><h3 style="font-family:'KGSecondChancesSketch';">STUDENT PAYS IT FORWARD</h3>
          <p style="text-align: justify; padding:1em 1em;"><!--The student who has been sponsored through our system gets inducted into an honour-based pay-it-forward process wherein once the student graduates and begins to earn, he/she is encouraged to sponsor another student.</p>-->
          A student who has been succesfully sponsored gets inducted into a pay-it-forward process wherein once the student graduates and begins to earn, he/she is encouraged to sponsor another student.
      </div>  
    </div>







    <div class="faq-image">
       <div class="row">
           <h1  align="center" id="faq" style="font-family:'KGSecondChancesSketch'; font-size:45px; padding-top: 300px; color: white; font-size: 7em;text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">
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
                and LearnEm for your contribution.</p>
              </div>
              <div class="oval-thought-border" style="text-align: justify; margin: 0 auto;">
              <h2>How can I get Involved?</h2>
              <p>After you've sponsored your first student or even otherwise, 
              we would like you to stay involved with us by keeping in touch via 
          <a href="www.facebook.com">Facebook </a> and <a href="www.twitter.com">Twitter.
          </a>If you would like to put in some time volunteering with our organization, 
          feel free to drop us an email at
           <a href="mailto:volunteer@learnem.com">volunteer@learnem.com</a>.</p>
              </div>
    </div>
</div>
          <br>

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
  

        
      </div>
     

   </div>







   
    
    
      
    <!--    </div>
    </div>-->

    <br>

    <!--<div class="container1" align="center">-->

  <!-- Modal Sign In-->
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
