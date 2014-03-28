<?php
     if ($_FILES["image_path"]["error"] > 0)
     {
         echo "Error: " . $_FILES["image_path"]["error"] . "<br>";
     }
     else
     {
         echo "Upload: " . $_FILES["image_path"]["name"] . "<br>";
         echo "Type: " . $_FILES["image_path"]["type"] . "<br>";
         echo "Size: " . ($_FILES["image_path"]["size"] / 1024) . " kB<br>";
         echo "Stored in: " . $_FILES["image_path"]["tmp_name"]. " <br>";
         $content = file_get_contents($_FILES["image_path"]["tmp_name"]);

         echo "Content: ".$content; 
     }
   ?>