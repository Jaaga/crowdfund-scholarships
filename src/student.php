<?php
       include (common.php)
function getlist(){
	    
	           dbcall();

	           $sql="select * from student";
	           
	           $result= mysql_fetch_array(result);

}