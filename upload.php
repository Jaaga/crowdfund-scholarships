<html>
<body>
 <div class="col-md-4"><form action="upload.php" method="post" enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file">
<input type="submit" name="submit" value="Submit"></form>
</div>
</body>
</html>
 
<?php


if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br>";
  }
else
  {
  
$temp=$_FILES["file"]['tmp_name'];
  $pic="images/".$_FILES['file']['name'];
  move_uploaded_file($temp,$pic);
	
  }
?>
