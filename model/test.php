<?php 
include('dbcon.php');

    	$db=dbopen();
    	$sql="SELECT * from student where U_id='23'";
    	$result=$db->query($sql);
    	$row=mysqli_fetch_array($result);
    	$Id=$row['U_id'];
    echo $Id;
    ?>