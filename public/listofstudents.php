<?php 
include('../model/student.php');
include('../model/user.php');
session_start();

if(isset($_COOKIE['email'])){

$email=$_COOKIE['email'];
}

setlocale(LC_MONETARY, 'en_IN');
      
 ?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
  <title>Students</title>
  <link href="./dist/css/bootstrap.css" rel="stylesheet">
  
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
padding-top: 60px;
}
  

  img {
  position: relative;
  }

  .pitch {
  position: absolute;
  top: 80px;
  left: 100px;
  right:100px;
  width: 100%;
  margin: 0 auto;
  width: 1000px;
  height: 50px;
  color: white;
  }

  .col-lg-4{
  margin:18px;
  }
  #hiw{
  font-family:'Cabin Sketch' cursive;
  font-size: 72px;}
  </style>
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
    
      <div class="navbar-header" style="height: 50px;">
    
            <a class="navbar-brand" href="index.php">

            <h1 style="font-family:'KGSecondChancesSketch'; margin-top: -9px;">LearnEm<h1></a>
      </div>
      <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="listofstudents.php">Sponsor</a></li>
               <?php if(isset($_COOKIE["email"])){ 
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

              
      </div><!--/.navbar-collapse -->
    </div>
</div>
    
  
  <div class="container" align="center">
      <div class="row" style="margin-left: auto; margin-right: auto;">
    <h1 style="font-family:'KGSecondChancesSketch'" id="hiw">Meet the Students</h1></div>

  <?php $students= getStudentList();
        foreach($students as $student){ 
  ?>

  <?php 
               
            $profilelink='studentprofile.php?S_id='.$student['S_id'].'';

                $sum_amount=getFundedAmount($student['S_id']);
                $requiredamount = $student['scholar_AMT'];
                $percentage = (($sum_amount/$requiredamount)*100);
                //$DateApplied= $student['date'];
                $DateApplied=$student['date'];
                $CurrentDate= date("Y-m-d H:i:s");
                $diff=abs(strtotime($CurrentDate) - strtotime($DateApplied));
                //$remainingDay = date_diff($DateApplied,$CurrentDate);
                $years = floor($diff / (365*60*60*24));
                $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

                 //printf("%d years, %d months, %d days\n", $years, $months, $days);
                //echo $remainingDay;
                
                
  ?>
  <a href="<?php echo $profilelink; ?>" style="text-decoration:none;color:#111111;">  <div class="col-lg-4" style="width:350px; text-align: justify; padding-left: 0px; padding-right: 0px; margin-left: auto; margin-right: auto;">
      <div class="well" style="width: 340px;">
        <img src=<?php echo $student['image_path'];
         ?> alt="donate"align="center" style="height:200px; width:300px" ></img> 
        <br>
        <h3><?php echo $student['sname']; ?></h3>
        <p><?php echo $student['para']; ?></p>
        </a>
        <div class="progress">
              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $percentage; ?>%">
               <b style="color:#111111;"><?php echo $percentage; ?> Complete</b> 
                </div>
               </div>
           
              <p style="text-align:left">
              <?php if(!($days<30)) 
              { 
               $Expire="campaign is over"; 
                echo $Expire; 
              }
              else{
              ?>
              <b><?php echo $days; 
              }?></b> days left<b><br>
                
                <?php echo money_format('%i',$sum_amount);?></b> 
              pledged out of <?php echo money_format('%i',$requiredamount); ?>
                </p>
    <div class="row">
      <!--<div class="col-lg-6"><a class="btn btn-danger" href="<?php //echo $profilelink; ?>">Donate</a></div>-->
      <form method="POST" action="donate.php" data-toggle="validator">
          <input type="hidden" name="email" value="<?php echo $email ; ?>" >
          <input type="hidden" name="S_id" value="<?php echo $student['S_id']; ?>" >
          
          

          <div class="col-md-8" >

            <input name="amount" type="text" placeholder="Rs. "
             class="form-control input-md" pattern="([0-9]){1,10}"
            data-match-error="Please enter numerical value" > 
            <div class="help-block with-errors"></div>
          </div>


          <div class="col-md-4" >
          
            
              <!--<div class="col-lg-6">-->
                <input type="submit" value="Donate" class="btn btn-primary">                
         
          </div>

      </form>
    </div>



      </div>

      </div>
  <?php 
       }

  ?>
  </div>
            </div> 
        
          <!--<div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
              <span class="sr-only">40% Complete (success)</span>
            </div></div> -->
        

<hr>
<div class="container" align="center">
      <div class="row" style="margin-left: auto; margin-right: auto;">
  <footer class="footer" style="text-align:center">
    <nav>
      <ul style="padding-left: 0px;">
        <a href="index.php">Home </a> |http://localhost/public/listofstudents.php
        <a href= "aboutus.php">About Us</a> |
        <a href= "#hiw">How It Works</a> |
        <a href="#faq">FAQ</a> |
        <a href="#contact">Contact</a>  
      </ul>
    </nav> 
  </footer>
</div>
</div>


    <script type="text/javascript" src="./dist/js/validator.js"></script>
    <script type="text/javascript" src="./dist/js/jquery-2.1.0.min.js"></script>
    <script type="text/javascript" src="./dist/js/bootstrap.min.js"></script> 
</body>

</html> 