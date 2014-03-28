<<<<<<< HEAD
<?php include ('test1.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!--other doc head stuff here-->
</head>
<body>
    <nav><ol><li><a href="#">Home</a></li></ol></nav>
    <!-- more body stuff blahh blahh-->
    <table>
        <tr>
            <th>ID</th>
            <th>First name</th>
            <th>Last name</th>
        </tr>
        <?php
            $students = getstudents('1');
            foreach($students as $student){
                echo"<tr><td>".$student['S_id']."</td><td>".$student['fname']."</td><td>".$student['lname']."</td></tr>";
            }
        ?>
    </table>
</body>
</html>
=======

//<?php
//include('student.php');
//donorLogin($_POST['email'],$_POST['pass']);
//giveDonation($_POST['3'],$_POST['8'],$_POST['20,000']);
//$students = getStudentList();
//foreach($students as $student){
//	echo $student['S_id'];
//}


//?>
>>>>>>> stash
