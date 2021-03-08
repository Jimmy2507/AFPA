<?php
    do{
        $chevauxPartants=readline("nombre de chevaux partant? ");
        $chevauxJoues=readline("nombre de chevaux joués? ");
    }while($chevauxJoues<=0 or $chevauxPartants<$chevauxJoues);
    
    $Ordre=1;
    $chevauxJouesFactorielle=1;

        for($i=1;$i<=$chevauxJoues;$i++){
            $chevauxJouesFactorielle=$chevauxJouesFactorielle*$i;
            $Ordre=$Ordre*($i+$chevauxPartants-$chevauxJoues);
        }

    $Desordre=$Ordre/$chevauxJouesFactorielle;

    echo "Dans l'ordre : 1 /". $Ordre." chance de gagner\n";
    echo "Dans le désordre : 1 /". $Desordre." chance de gagner";
    
?>