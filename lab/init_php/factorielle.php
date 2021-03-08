<?php
    $resultat = 1;
    $nb = readline("Ecrire un nombre : ");
    for ($i=1; $i < $nb +1 ; $i++) { 
        $resultat = $resultat * $i;
    }
    echo $resultat;
?>