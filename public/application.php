   <?php 
   
      if(isset($_POST['name'])){
        $name=$_POST['name'];
        
        $email=$_POST['email'];
        $U_id=$_POST['U_id'];
      }
      else{
        header("location:../public/usersignup.php");
        } ?>
  <!DOCTYPE html>
<html>
  <head>

  <style>
    @font-face{
      font-family:'KGSecondChancesSketch'; 
      src:url('fonts/KGSecondChancesSketch.ttf');

     /* font-family: 'CabinSketch';
      src: url('fonts/CabinSketch-Regular.otf');*/
         }
    body 
    {
    background: url("./images/backb.jpg");
    background-repeat:repeat;
    padding-top: 80px;
    }
    /*.well{
    position: relative;
    top: 100px;
    } */
  </style>

  <link href="./dist/css/bootstrap.css" rel="stylesheet">
  <link href='./dist/css/custom.css" rel="stylesheet" type="text/css'>
  </head>

  <body>

  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" style=" background-color: #25383c; border-color: #25383c;">
      <div class="container">
      
        <div class="navbar-header" style="height: 50px;">
      
            
              <a class="navbar-brand" href="index.php"><h1 style="font-family:'KGSecondChancesSketch'; margin-top: -9px;color: white;">LearnEm<h1></a>
            </div>
            <div class="collapse navbar-collapse">

           </div>
        </div>
        </div> 

        </div>
  </div>

  <?php
      if(isset($_POST['invalid'])){
        $Invalid=$_POST['invalid'];
        $U_id=$_POST['U_id'];
        $sname=$_POST['sname'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $Phone_Number=$_POST['Phone_Number'];
        $address=$_POST['address'];
        $pincode=$_POST['pincode'];
        $country=$_POST['country'];
        $course=$_POST['course'];
        $scholar_AMT=$_POST['scholar_AMT'];
        $para=$_POST['para'];

      }
  ?>

  <div class="container">

    <div class="col-md-2">
    </div>
    
    <div class="col-md-8">
      <div class="well" >
        <form class="form-horizontal" action="../controller/applicant.php" 
        method="post" autocomplete="on" enctype="multipart/form-data" data-toggle="validator" role="form">
        
        <fieldset>

          <!-- Form Name -->
          <h1 style= "text-align: center; padding: 0 0 50px 0;">Application for Scholarship</h1>
        
          <input type="hidden" name="U_id" value="<?php echo $U_id;?>" >
          <!-- Text input-->
          <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Your Name:</label> 
          <div class="col-md-4">
            <input name="sname" type="text" class="form-control input-md" 
            value="<?php echo $name; ?>"
            pattern="([A-z ]){1,}" data-error="Please use only alphabets">
            <div class="help-block with-errors"></div>

          </div>
          </div>



          <!-- Multiple Radios -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="radios">Gender:</label>
            <div class="col-md-4">
              <div class="radio">
              <label for="radios-0">
                <input type="radio" name="gender" id="radios-0" value="F" checked="checked">
                Female
              </label>
              </div>
              <div class="radio">
              <label for="radios-1">
                <input type="radio" name="gender" id="radios-1" value="M">
                Male
              </label>
              </div>
            </div>
          </div>

      
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">E-mail:</label>  
            <div class="col-md-4">
              <input name="email" type="email" class="form-control input-md" 
              value="<?php echo $email; ?>" data-error="Invalid Email Address" required>
              <div class="help-block with-errors"></div>
              <span style="color:crimson;"><?php echo $Invalid; ?></span>    
            </div>
          </div>
      
      

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Contact Number:</label>  
            <div class="col-md-4">
            <input name="Phone_Number" type="text" placeholder="Contact Number" 
            value="<?php echo $Phone_Number; ?>" class="form-control input-md" pattern="([0-9]){1,10}"
            data-match-error="Please enter numerical value">
            <div class="help-block with-errors"></div>
              
            </div>
          </div>

          <!-- Text area-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="textarea">Address:</label>
            <div class="col-md-4">                     
              <textarea class="form-control" name="address" 
              pattern="^([_A-z0-9]){3,}$" ></textarea>
              <div class="help-block with-errors"></div>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Pin Code:</label>  
            <div class="col-md-4">
            <input name="pincode" type="text" placeholder="Pin Code" 
            value="<?php echo $pincode; ?>" class="form-control input-md" pattern="([0-9]){1,10}"
            data-match-error="Please enter numerical value">
            <div class="help-block with-errors"></div>
            
            </div>
          </div>

          <!-- Select Basic -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="selectbasic">Country:</label>
            <div class="col-md-4">
              <select name="country" class="form-control">
                <option value="#">Select Country</option>
                <option value="Armenia">India</option>
                <option value="Armenia">Other</option>
              </select>
            </div>
          </div>

        

          <!-- Select Basic -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="selectbasic">Course:</label>
            <div class="col-md-4">
              <select name="course" class="form-control">
                <option value="#">Select Course</option>
                <option value="Php">PHP</option>
                <option value="Python">Python</option>
                <option value="html/css">HTML/CSS</option>
              </select>
            </div>
          </div>

          <!-- Textarea -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="textarea" >Introduce yourself</label>
            <div class="col-md-4">                     
              <textarea class="form-control" name="para"
               placeholder="Introduce yourself in 120 characters" pattern="^([_A-z0-9]){3,}$" maxlength="120"></textarea>
            </div><br>
            <div class="help-block with-errors"></div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Scholarship Amount:</label>  
            <div class="col-md-4">
            <input name="scholar_AMT" type="text" value="<?php echo $scholar_AMT; ?>" 
            placeholder="enter the amount required" class="form-control input-md"
            pattern="([0-9]){1,10}" data-match-error="Please enter numerical value">
            <div class="help-block with-errors"></div>

            </div>
          </div>




          <!-- for uploading anyfile-->
        
          <!--Upload image starts here-->
          <div class="form-group">
          <label class="col-md-4 control-label">Upload-Image:</label> 
          <div class="col-md-6" >
          <div class="fileupload fileupload-new" data-provides="fileupload">
            <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;">
              <img id="showimage" src="#" alt="your image" />

              </div>
              <div>

                <span class="btn btn-file"><input type="file" name="image_path" onchange="readURL(this);"></span>
          
              </div>
            </div>
          </div>
          </div>
          <!--upload image ends here-->


      


          <!-- Button -->
          <div class="form-group">
              <label class="col-md-4 control-label-sm" for="singlebutton"></label>
              <div class="col-md-4" align="center">
                <button type="submit" name="singlebutton" class="btn btn-success btn-lg">Submit!</button>
              </div>
          </div>
        </fieldset>

        </form>
      </div> 
    </div> 

    <div class = "col-md-2">
    </div>
  

  
    
    
      </div>

      <hr>

<div class="container" align="center">
      <div class="row" style="margin-left: auto; margin-right: auto;">
    <footer class="footer" style="text-align:center">
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

  <script language="javascript" src="./dist/js/jquery-2.1.0.min.js"></script>
  <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#showimage').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }</script>
  <script type="text/javascript" src="./dist/js/validator.js"></script>
  </body>

</html>

