<?php
require('./fonction.php');
    $mots = readline('Ecrire un mot : ');
do{
    
    $lettre = readline('Ecrire la lettre a enlever : ');
    $lettre = str_split($lettre,1);
        if (count($lettre)==1){
            echo purge($mots,$lettre);    
        }else{
            echo "Vous n'avez pas ecris qu'une seul lettre"."\n";
        }
}while (count($lettre)!=1);   

?>