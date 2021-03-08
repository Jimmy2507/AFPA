<?php
$nbnega = 0;
$nbposi = 0;
 $nbval = readline ("Combien de valeurs voulez vous entrer ? ");
    for ($i=0; $i < $nbval ; $i++) { 
        $val = readline ("Entrer valeurs");
        $tab[$i]= $val;
        if ($tab[$i]>0) {
            $nbposi ++;
        }else{
            $nbnega ++;
        }
    }
    echo "Il y a ".$nbposi." nombre positif et ".$nbnega." nombre negatif.";
?>