<?php


	function donorsignup($name,$password,$email) {
		
		$sql="INSERT INTO donor (name, password,email)
VALUES
('$name','$password','$email')";

if(!mysql_query($sql))
{
	die('Error' .mysql_error());
}

//if (!mysqli_query($con,$sql))
  //{
  //die('Error: ' . mysqli_error($con));
//}
}

function displaywork($D_id,fname,amount) {
	$con1 = mysql_connect("localhost","root","123") or die("Couldn't select DB");
        $db = mysql_select_db("LearnEmp", $con1) or die("Couldn't select database."); 

        $con2 = mysql_connect("localhost","root","123") or die("Couldn't select DB"); 
        $db = mysql_select_db("LearnEmp", $con2)  or die("Couldn't select database."); 


       
        $D_id=$_GET['id'];

        $sql = "SELECT *  FROM donation where D_id = $D_id";                   
        $sql_result=mysql_query($sql,$con1) or die("Couldn't execute query 1."); 
        
        echo "<table border='1'>
               <tr>
               <th></th>
               <th>Student Name</th>
               <th>Amount Recieved</th>
               </tr>";
        while($row1 = mysql_fetch_array($sql_result))                           
        {
           
           $S_Id= $row1['S_Id'];
           //$amt="select sum(amount) from donation where S_Id=$S_Id";


           
           $query ="SELECT * FROM student WHERE S_ID=$S_Id";       
           
           $query_result = mysql_query($query,$con2) or die("Couldn't execute query 2.");  
           

           while($row2 = mysql_fetch_array($query_result))                             
           {

              echo "<tr>";
              echo '<td><img src="'.$row2['image_path'].'" ALT="some text" WIDTH=50 HEIGHT=50></td>';
              echo '<td>'.$row2['fname'].'</td>';
              echo '<td>'.$row1['amount'].'</td>';
              echo "</tr>";      
           }
           
        }
        echo "</table>";

        mysql_close($connection1);
        mysql_close($connection2);
}
?>
