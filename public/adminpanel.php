<?php
include ('../model/student.php');

$students= getStudentList();
        foreach($students as $student){ ?>

       <form action="." method="post">
       <label class="radio"><input type="checkbox" name="service"/><?php echo $student['name'] ?></label>
       </form>

<?php

?>