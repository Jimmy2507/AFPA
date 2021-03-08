<?php
require('./fonction.php');
$mots = readline('Ecrire un mot : ');
$lettre = readline('Ecrire la lettre a enlever : ');
$lettre = str_split($lettre,1);
    echo purge($mots,$lettre);    
   

?>