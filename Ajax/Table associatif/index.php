<?php

include "./PHP/outils.php";

spl_autoload_register("chargerClasse");
$mode=(isset($_GET['mode']))?$_GET['mode']:"";
$routes=[
        'default'=>['PHP/VIEW/','Accueil','Accueil',false],

        //Listes
        

        //Formulaires

        
        //Action


        //API
        "ListeAPI" => ["PHP/MODEL/API/", "ListeAPI", "Accueil",true]
]; 
Parametres::init();
DbConnect::init();

if (isset($_GET['page'])){
    if(isset($routes[$_GET['page']])){
        chargerPage($routes[$_GET['page']]);
    }else{
        chargerPage($routes["404"]);

    }
}else{
    chargerPage($routes["default"]);
}