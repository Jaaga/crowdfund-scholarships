<?php

function studentlist(){
	    
	           $sql="SELECT * from student";
	           
	           $result = mysqli_query($sql);
               while($row = mysqli_fetch_array($result))
               {
               	 return array($row['S_id'],$row['fname'],$row['lname'],$row['image_path']);
               }

}
?>