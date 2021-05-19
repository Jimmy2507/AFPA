<?php
    include "./PHP/outils.php";
    spl_autoload_register("chargerClasse");
    $mode=(isset($_GET['mode']))?$_GET['mode']:"";

    $routes=[
        
        "404"=>["PHP/VIEW/","404","404"],
        //Listes
        "default"=>["PHP/VIEW/","ListeMenu","Liste des Menus"],
        "ListePlat"=>["PHP/VIEW/","ListePlat","Liste des Plats"],
        //Formulaires
        "FormGestionMenu"=>["PHP/VIEW/","FormGestionMenu","Gestion des menus"],
        "FormGestionPlat"=>["PHP/VIEW/","FormGestionPlat",'Gestion des plats'],
        //Action
        "ActionMenu"=>["PHP/VIEW/","ActionMenu","xx"],
        "ActionPlat"=>["PHP/VIEW/","ActionPlat","xx"],

    ];

    Parametres::init();

    if (isset($_GET['page'])){
        if(isset($routes[$_GET['page']])){
            chargerPage($routes[$_GET['page']]);
        }else{
            chargerPage($routes["404"]);
        }
    }else{
        chargerPage($routes["default"]);
    }