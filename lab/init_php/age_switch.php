<?php
    $age = readline ("Ecrire votre age : ");
    switch($age){
        case 6 : 
        case 7 :
            echo "Poussin";
            break;
        case 8 :
        case 9 : 
            echo "Pupille";
            break;
        case 10 :
        case 11:
        
            echo "Minime";
            break;
        case $age>=12 :
            echo "Cadet";
            break;
        default :
            echo "Age non pris en compte";     
    }
?>