<?php
        $con1 = mysql_connect("localhost","root","123") or die("Couldn't select DB");
        $db = mysql_select_db("LearnEmp", $con1) or die("Couldn't select database."); 

        $con2 = mysql_connect("localhost","root","123") or die("Couldn't select DB"); 
        $db = mysql_select_db("LearnEmp", $con2)  or die("Couldn't select database."); 
       
        $D_id=$_GET['id'];

        $sql = "SELECT *  FROM donation where D_id = $D_id";                   
        $sql_result=mysql_query($sql,$con1) or die("Couldn't execute query 1."); 

        while($row1 = mysql_fetch_array($sql_result))                           
        {
           
           $ident = $row1['S_Id'];

           
           $query ="SELECT * FROM student WHERE S_ID=$ident";       
           
           $query_result = mysql_query($query,$con2) or die("Couldn't execute query 2.");  
           while($row2 = mysql_fetch_array($query_result))                             
           {
              echo "<br>".$row2['fname'];      
           }
        }

        mysql_close($connection1);
        mysql_close($connection2);
?>