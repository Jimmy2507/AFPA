<?php
function autoload($classe){
    require "./Class/".$classe.".class.php";
}
spl_autoload_register("autoload");

try{
    $db = new PDO('mysql:host=localhost;dbname=exercice1;port=3306', 'root',"");
}
catch(Exception $e){
    if($e->getCode()==1049){
        echo "La BDD est incorrect";
        die();
    }else if($e->getCode()==1045){
        echo "erreur dans le mot de passe";
    }else{
        die('erreur: '.$e->getMessage());
    }
    
}
echo "BDD connecté";
for ($i=1; $i <= 6 ; $i++) { 
    $requete = $db->query("SELECT idClient,nomClient,prenomClient from clients where idClient = $i");
    $reponse = $requete->fetch(PDO::FETCH_ASSOC);
    // var_dump($reponse);
    ${'client'.$i} = new Clients($reponse);
    echo '<div>'.${'client'.$i}->toString().'</div>';  
}

