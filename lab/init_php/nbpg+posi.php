<?php
    
    $nb = readline("Ecrire un nombre");
    $pg = $nb;
    $i = 1;
    $ordre = 1;
        while($nb != "Stop"){
            $nb = readline('Ecrire un nombre');
            $i = $i + 1;
            if ($nb > $pg && $nb != "Stop") {
                $pg = $nb;
                $ordre = $i;
            }
            
        }
    echo "Le nombre le plus grand est : ".$pg." il a été écrit en ".$ordre;
?>