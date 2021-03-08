<?php

$nom1 = readline("Ecrire le premier nom");
$nom2 = readline("Ecrire le deuxieme nom");
$nom3 = readline ("Ecrire le troisieme nom"); 

if (($nom1 < $nom2) &&($nom2 < $nom3)){
    echo "Les noms sont dans l'ordre alphabetique";
}else{
    echo "Les noms ne sont pas dans l'ordre alphabetique";
}
    
?>