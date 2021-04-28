<?php
    include "./PHP/outils.php";
    spl_autoload_register("chargerClasse");
    $mode=(isset($_GET['mode']))?$_GET['mode']:"";


    $routes=[
        "default"=>["PHP/VIEW/","formConnexion","Connexion"],

        //Listes
        "listeGestionAdmin"=>["PHP/VIEW/","listeGestionAdmin","Menu Proviseur"],

        //Formulaires
        "formConnexion"=>["PHP/VIEW/","formConnexion","Connexion"],
        "formGestionAdmin"=>["PHP/VIEW/","formGestionAdmin","Menu Proviseur"],
        "formAjoutMatiere"=>["PHP/ViEW/","formAjoutMatiere","Ajouter une matiere"],

        //Action
        "actionConnexion"=>["PHP/VIEW/","actionConnexion",'xx'],
        "actionDeconnexion"=>["PHP/VIEW/","actionDeconnexion","xx"],
        "actionAjoutMatiere"=>["PHP/VIEW/","actionAjoutMatiere","xx"],
    ];
Parametres::init();
DbConnect::init();
session_start(); 

if (isset($_GET['page'])){
    if(isset($routes[$_GET['page']])){
        chargerPage($routes[$_GET['page']]);
    }else{
        chargerPage($routes["404"]);

    }
}else{
    chargerPage($routes["default"]);
}