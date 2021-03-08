<?php

    $a = 1;
    $b = 2;
    $c = 3;
    $temp1;

    $temp1 = $b;
    $b = $a;
    $a = $c;
    $c = $temp1;

    echo $a ."\n". $b ."\n". $c;

?>


