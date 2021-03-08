<?php

$tab = array(6,5,3,8,2,9,1);
    for ($i=0; $i < count($tab)-1 ; $i++) { 
        $mini = $i;
        for ($k= $i +1; $k < count($tab) ; $k++) { 
            if ($tab[$k]>$tab[$mini]) {
                $mini = $k;
            }
        }
        if ($mini != $i) {
            $temp = $tab[$mini];
            $tab[$mini]=$tab[$i];
            $tab[$i] = $temp;
        }
    }
    foreach ($tab as $key ) {
        echo $key."\n";
    }
?>