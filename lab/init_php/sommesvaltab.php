<?php
$sommes = 0;
$nbval = readline ('Combien de valeurs voulez vous entrer ?');
    for ($i=0; $i < $nbval ; $i++) { 
        $val = readline ("Ecrire valeurs");
        $tab[$i]= $val;
        $sommes = $sommes + $tab[$i];   
    }
echo $sommes;
?>