<?php
    
    function chargerClasse($classe){
        require "../Entities/".$classe.".class.php";   
    }
    spl_autoload_register("chargerClasse");
    $isFlash=false;
    do{
        $nbVoiture=readline("Nombre de voiture :");
    }while ($nbVoiture<2);
    for ($i=1; $i <= $nbVoiture ; $i++) { 
        $marque=readline("Quelle est la marque de la voiture $i ? ");
        $model=readline("Quelle est le model de la voiture $i ");
        $immatriculation=readline("Quelle est l'immatriculation de la voiture $i ");
        $couleur=readline("Quelle est la couleur de la voiture $i");
        ${"voiture".$i} = new Voiture($marque,$model,$immatriculation,$couleur);
    }
    $limitation = readline("Quelle est la limitation de vitesse : ");
    $radar =new radar($limitation);
    do{
    for ($i=1; $i <=$nbVoiture; $i++) { 
        $vitesseRdm = rand(1,25);
        ${"voiture".$i}->accelerer($vitesseRdm,$i);
        $isFlash = $radar->flash(${"voiture".$i}->get_vitesse(),$i);
        if($isFlash){
            break;
        }
    }
    }while($isFlash==false);
    
    ${"voiture".$i}->toString();
    

?>