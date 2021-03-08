<?php
    $tab1 = array(1,6,9,2,4,1,7);
    $tab2 = array(12,60,45,30,75);
    for ($i=0; $i < count($tab2); $i++) { 
        if ($tab1[$i]< $tab2[$i]) {
        array_push($tab1,$tab2[$i]);
        asort($tab1);   
        }
    }
    
    foreach ($tab1 as $key ) {
        echo $key." ";
    }
    
?>