<?php
$age = readline ("Ecrire votre age : ");

    if(($age == 6)or($age==7)){
        echo "Poussin";
    }elseif(($age==8)||($age==9)){
        echo "Pupille";
    }elseif(($age==10)||($age==11)){
        echo "Minime";
    }elseif ($age >= 12){
        echo "Cadet";
    }else{
        echo "Age non valise";
    }

?>