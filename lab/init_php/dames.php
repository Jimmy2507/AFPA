<?php

do {
    $lignePion = readline("Quelle est la ligne: ");
}while( $lignePion <0 OR $lignePion > 8);
$lignePion --;
do {
    $colonnePion = readline("Quelle est la colone : ");
}while( $colonnePion <0 OR $colonnePion > 8);
$colonnePion --;
do {
    $boolean = false;
        for( $ligne = 0;$ligne<8;$ligne++){
            for( $colonne = 0;$colonne<8;$colonne++){
                if( $ligne == $lignePion && $colonne == $colonnePion){
                    $tab[$ligne][$colonne] = " x";
                }else{
                    $tab[$ligne][$colonne] = " O";
                }
            }

        }
        foreach($tab as $ligne){
            foreach($ligne as $colonne){ 
                echo $colonne;
            }
            echo "\n";
        }
    $Deplacement = readline("Entrer 0 pour aller en haut a gauche,Entrer 1 pour aller en haut a droite, Entrer 2 pour aller en bas a gauche, Entrer 3 pour en bas a droite");
        
    if($Deplacement == 0){ //en haut a gauche
        $lignePion --;
        $colonnePion --;
    }elseif($Deplacement == 1){//en haut a droite
        $lignePion --;
        $colonnePion ++;
    }elseif( $Deplacement == 2){//en bas a gauche
        $lignePion++;
        $colonnePion--;
    }elseif( $Deplacement == 3){//en bas droite
        $lignePion++;
        $colonnePion ++;
    }
   
    if($colonnePion <0 OR $colonnePion > 7 OR $lignePion < 0 OR $lignePion > 7){
        echo "Sorti du plateau";
        $boolean=true;
    }  
}while($boolean ==false);

?>