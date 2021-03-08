<?php
    $a = 1;
    $b= 2;
    $temp;

    $temp = $b;
    $b = $a;
    $a = $temp;

    echo $a ."\n". $b;
    

?>