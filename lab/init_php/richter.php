<?php
    $nb_User = readline ("Entrez une valeur d'echelle");
    while($nb_User < 1){
        echo "Erreurs de saisie recommencer "."\n";
        $nb_User = readline ("Entrez une valeur d'echelle");
    }
    switch ($nb_User) {
        case '1':
            echo "Micro tremblement de terre,non ressenti";
            break;
        case '2':
            echo "Tres mineur. non ressenti mais detecté";
            break;
        case '3':
            echo "Mineur. causant rarement de dommages";
            break;
        case '4':
            echo "Leger. Secousses notables d'objets a l'interieur des maisons";
            break;
        case '5';
            echo"Modere. Legers dommages aux edifices bien construit";
            break;
        case '6';
            echo"Fort.Destructeur dans des zones allant jusqu'a 180 kilometres a la ronde si elles sont peuplées";
            break;
        case '7';
            echo"Majeur. dommage moderes a severes dans des zones plus vastes.";
            break;
        case '8';
            echo"Important. Dommage serieux dans des zones sur des milliers de kilometres a la ronde";
            break;
        case '9';
            echo"Devastateur. Devaste des zones sur des milliers de kilometres a la ronde";
            break;
        default :
            echo "Appocalypse";
        

        
      
    }
?>