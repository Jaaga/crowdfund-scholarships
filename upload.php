<!--<html lang="en"> 
    <head>  
         
        <title>Upload form</title> 
     
    </head> 
     
    <body> 
     
    <form id="Upload" action="<?php  $uploadHandler ?>" enctype="multipart/form-data" method="post"> 
     
        <h1> 
            Upload form 
        </h1> 
        
         
        <p> 
            <label for="file">File to upload:</label> 
            <input id="file" type="file" name="file"> 
        </p> 
    </form> 
    </body> !-->
<html>
<body>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Upload Profile picture</label>  
  <div class="col-md-4"><form action="upload.php" method="post" enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Submit">
</form>
</div>
</div>

</body>
</html> 
</html> 
<?php


echo $_FILES["file"]["error"];
if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br>";
  }
else
  {
  echo "Upload: " . $_FILES["file"]["name"] . "<br>";
  echo "Type: " . $_FILES["file"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
  echo "Stored in: " . $_FILES["file"]["tmp_name"];
$temp=$_FILES["file"]['tmp_name'];
  $pic="images/".$_FILES['file']['name'];
  move_uploaded_file($temp,$pic);
	
  }
?>
