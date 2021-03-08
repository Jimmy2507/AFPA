<?php
    
    $nb = readline("Ecrire un nombre");
    $pg = $nb;
        while($nb != "Stop"){
            $nb = readline('Ecrire un nombre');
            if ($nb > $pg && $nb != "Stop") {
                $pg = $nb;
            }
            
        }
    echo $pg;
?>