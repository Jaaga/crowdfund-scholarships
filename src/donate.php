<?php
include 'dbcon.php';
include 'donation.php';
dbopen();

 
 $D_id = $_POST['D_id'];
 $S_Id = $_POST['S_Id'];
 $amount= $_POST['amount'];

donate($D_id,$S_id,$amount);
?>


