<?php 

$s = 80;
$d = 'mm';
$r = 'g';
$img = false;
$atts = array();
    $email="abhinay302@gmail.com";
    $url = 'http://www.gravatar.com/avatar/';
    $url .= md5( strtolower( trim( $email ) ) );
    $url .= "?s=$s&d=$d&r=$r";
    if ( $img ) {
        $url = '<img src="' . $url . '"';
        foreach ( $atts as $key => $val )
            $url .= ' ' . $key . '="' . $val . '"';
        $url .= ' />';
    echo  $url;
} ?>