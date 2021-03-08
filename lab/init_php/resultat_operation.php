<?php
    for ($i=0;$i<2;$i++){
        $nbUser= readline ("Ecriver un nombre : "); //Demande de 2 valeurs a l'utilisateur.
        $tab[$i]= $nbUser;                          //Incrementer les valeurs de l'utilisateur dans un tableau.
    }
    $operateur = readline("Ecrire un operateur \"+,-,*,/\""); //Demande à l'utilisateur l'operateur qu'il souhaite utiliser.
    if ($operateur == "+"or $operateur == "-"or $operateur=="/" or $operateur=="*"){ //Verification operateur valide
        switch ($operateur) {                                                        //Calcul a faire
            case "+"://Adition
                echo $tab[0]+$tab[1];
                break;
            case "-"://Soustraction
                echo $tab[0]-$tab[1];
                break;
            case "*"://Multiplication
                echo $tab[0]*$tab[1];
                break;
            case "/" ://Division
                echo $tab[0]/$tab[1];
                break;
        }
    }else{
        echo "Operateur non valide";
    }    
    
    
?>