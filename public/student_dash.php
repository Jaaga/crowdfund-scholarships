<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   

    <title>Crowd Funding Scholarships</title>

    <!-- Bootstrap core CSS -->
    <link href="./dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  
<div class="container">
<div class="jumbotron" >

<?php
        $con1 = mysql_connect("localhost","root","123") or die("Couldn't select DB");
        $db = mysql_select_db("LearnEmp", $con1) or die("Couldn't select database."); 

        $con2 = mysql_connect("localhost","root","123") or die("Couldn't select DB"); 
        $db = mysql_select_db("LearnEmp", $con2)  or die("Couldn't select database."); 


       
        $S_id=$_GET['id'];

        $sql = "SELECT *  FROM donation where S_id = $S_id";                   
        $sql_result=mysql_query($sql,$con1) or die("Couldn't execute query 1."); 

        while($row1 = mysql_fetch_array($sql_result))                           
        {
           
           $D_id= $row1['D_id'];
           //$amt="select sum(amount) from donation where S_Id=$S_Id";


           
           $query ="SELECT * FROM donor WHERE D_iD=$D_id";       
           
           $query_result = mysql_query($query,$con2) or die("Couldn't execute query 2.");  
           echo "<table border='1'>
<tr>
<th>Donor's Name</th>
<th>Amount Donated</th>
</tr>";

           while($row2 = mysql_fetch_array($query_result))                             
           {

              echo "<tr>";
              echo '<td>'.$row2['name'].'</td>';
              echo '<td>'.$row1['amount'].'</td>';
              echo "</tr>";      
           }
           
        }

        mysql_close($connection1);
        mysql_close($connection2);
?>
</div>
</div>
</head>
</html>