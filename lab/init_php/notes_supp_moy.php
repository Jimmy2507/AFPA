<?php
$sommes = 0;
$noteSupp = 0;

    $nbNote = readline("Nombres de note : ");

    for ($i=0; $i < $nbNote ; $i++) {  //Demander les notes a lutilisateur
        $notes=readline("Ecriver les notes ");
        $tab[$i] = $notes;
        $sommes = $sommes + $tab[$i]; //calcul de la sommes

    }
    $Moyenne = $sommes / $nbNote; //Calcul de la moyenne
    
    for ($k=0; $k < count($tab) ; $k++) {  //Notes supperieur

        if ($tab[$k]>$noteSupp) {
            $noteSupp ++;
        }
    }
    
    echo "La moyenne est de : ".$Moyenne ."\n";
    echo "Il y a : ".$noteSupp. " notes supperieur a la moyenne .";
?>