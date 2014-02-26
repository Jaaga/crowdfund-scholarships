

 
<?php


echo $_FILES["file"]["error"];
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
