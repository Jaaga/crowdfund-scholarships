<?php

function studentlist(){
	    
	           $sql = "SELECT * from student";
	           
	           if(!($result = mysqli_query($sql))

               foreach ($result as $value)
               { 
                 $row=mysql_fetch_array($result); 
               	 
               }
               return ($row);
}
?>