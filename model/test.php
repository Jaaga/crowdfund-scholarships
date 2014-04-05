<?php
$Id="ansal";
$jsonurl ='https://www.codeschool.com/users/'.$Id.'.json';
        $json = file_get_contents($jsonurl,0,null,null);
        $json_output = json_decode($json,true);

     foreach($json_output as $val){

        $user=$val;

     }
        ?>