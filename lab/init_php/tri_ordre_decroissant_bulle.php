<?php
    $tab = array(6,9,3,24,12,85);
    foreach ($tab as $key ) {
        echo $key." ";
    }
    $temp = 0;
    $boolean = 1;
    while ($boolean == 1) {
        $boolean = 0;
        for ($i=0; $i <count($tab)-1; $i++) { 
            if ($tab[$i]<$tab[$i+1]) {
                $temp = $tab[$i];
                $tab[$i]=$tab[$i+1];
                $tab[$i+1]=$temp;
                $boolean = 1;

            }
        }
    }
    echo "\n";
    foreach ($tab as $key ) {
        echo $key ." ";
    }
?>