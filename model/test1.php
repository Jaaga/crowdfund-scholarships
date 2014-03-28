<?php include ('donor.php'); 

            $students = getStudents('1');
            foreach($students as $student){
               echo $student['fname'];
               echo $student['S_id'];
               echo $student['D_id'];
               echo $student['para'];
               echo $student['amount'];
               
           }
            ?>
           


  