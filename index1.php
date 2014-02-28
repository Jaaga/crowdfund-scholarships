<html>
<head>
<title>
	Upload an image
</title>
</head>
<body>
	<form action = "index.php" method="POST" enctype="multipart/form-data>
	File:
	<input type="file" name="image"> <input type="submit" value="upload">
	</form>
</body>
<?php
mysql_connect("localhost","root","123") or die(mysql_error());
mysql_select_db("publications"); or die(mysql_error())
$file = $_FILES['image']['tmp_name'];
if (!isset($file)) {
	echo "Please select an image";
} else {
	$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name = addslashes($_FILES['image']['name']);
	$image_size = getimagesize($_FILES['image']['tmp_name'])

if($image_size==FALSE)
	echo "That's not an image";
else
{
if(!$insert = mysql_query("INSERT INTO store VALUES('','$image_name','$image')"));
echo "Problem uploading image";
else
{
	$lastid = mysql_insert_id();
	echo "Image uploaded.<p />Your image:<p /><img src=get.php?id=$lastid>"
</html>