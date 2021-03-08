<?php
   $nb = readline("Ecrire un nombre : ");

   $nb = intval($nb);
   
       if ($nb>1){
           echo $nb. " est un nombre positif";
       }else if($nb == 0){
           echo $nb. " est neutre";
        }else{
            echo $nb. "Est un nombre negatif";
        } 
?>