<?php

  $id = $_GET['id'];
  // do some validation here to ensure id is safe

  $link = mysql_connect("localhost", "root", "123");
  mysql_select_db("LearnEmp");
  $sql = "SELECT image_path FROM student WHERE S_id=$id";
  $result = mysql_query("$sql");
  $row = mysql_fetch_assoc($result);
  mysql_close($link);

  header("Content-type: image/jpg");
  echo $row['image_path'];
?>

