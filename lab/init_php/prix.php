<?php
    $prix = readline('Ecrire le prix :');
    $Sommes = $prix;
    $compteur10 = 0;
    $compteur5 = 0;
    $compteur1 = 0;
    while ($prix != 0 ) {
        $prix = readline('Ecrire le prix');
        $Sommes = $Sommes + $prix;
        if ( $prix == 0){
            echo "Le montant a payer est de : ".$Sommes."euro"."\n";
         }   
    } 
    
    $argent = readline ("Entrer l'argent");
        while ($argent<$Sommes) {
            $argent = readline("La sommes inserer est inferieur à la sommes demandez, Entrer Argent : ");
        }
    $reste = $argent - $Sommes;
        while ($reste>=10){
            $reste = $reste -10;
            $compteur10 ++;
        }
        while($reste <=10 && $reste >=5){
            $reste = $reste - 5;
            $compteur5 ++;
        }
        while($reste != 0){
            $reste = $reste -1;
            $compteur1 ++;   
        }
        echo "Sommes payer : ".$argent."\n";
        echo "Nombre de billet de 10 : ".$compteur10."\n";
        echo " Nombre de billet de 5 : ".$compteur5."\n";
        echo" Nombre piece de 1 : ".$compteur1."\n";
       
?>