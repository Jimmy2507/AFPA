<?php
$sommes = 0;
    for ($i=0; $i < 9 ; $i++) { 
        $note = readline ("Ecrire note");
        $tab[$i]= $note;
        $sommes = $sommes + $tab[$i];   
    }
    echo "Moyenne = ". $sommes / 9;
?>