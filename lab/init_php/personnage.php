<?php
    $nbUser = readline ("Ecrire un nombre : ");
    while($nbUser != 6 && $nbUser != 4 && $nbUser != 8 && $nbUser != 2){
        echo "Erreurs de saisie recommencer "."\n";
        $nbUser = readline ("Ecrire un nombre : ");
}       
    switch ($nbUser) {
        case "6" :
            echo "Le personnage va a droite";
            break;
        case "4" :
            echo "Le personnage va a gauche";       
            break;
        case "8" :
            echo "Le personnage va en haut";
            break;
        case "2" :
            echo "Le personnage va en bas";
            break;
      
        }            
            
       
?>