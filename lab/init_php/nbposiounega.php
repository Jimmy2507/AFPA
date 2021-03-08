<?php
$nb = readline("Ecrire un nombre : ");

$nb = intval($nb);

    if ($nb>0){
        echo $nb. " est un nombre positif";
    }else{
        echo $nb. " est un nombre négatif";

    }
?>