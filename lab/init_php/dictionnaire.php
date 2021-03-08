<?php
    $boolean = 0;
    $dico = array("Test1","Test2","Test3");
    $repUser = readline("Quel mot cherchez vous ?");
    for ($i=0; $i < count($dico) ; $i++) { 
        if ($dico[$i]= $repUser) {
            $boolean = 1;
        }
    }
    if ($boolean==1) {
        echo "Mot trouvé";
    }else{
        echo "Mot non trouvé";
    }
?>