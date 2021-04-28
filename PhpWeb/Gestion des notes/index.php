<?php
    include "./PHP/outils.php";
    spl_autoload_register("chargerClasse");
    $mode=(isset($_GET['mode']))?$_GET['mode']:"";
    
    $routes=[
        "default"=>["PHP/VIEW/","formConnexion","Connexion"],
        "404"=>["PHP/VIEW/","404","404"],
        //Listes
        "listeGestionAdmin"=>["PHP/VIEW/","listeGestionAdmin","Menu Proviseur"],
        "listeEleve"=>["PHP/VIEW/","listeEleve","Liste des eleves"],
        "listeEnseignant"=>["PHP/VIEW/","listeEnseignant","Liste des enseignants"],
        "listeMatieres"=>["PHP/VIEW/","listeMatieres","Liste des Matieres"],
        "listeNotes"=>["PHP/VIEW/","listeNotes","Liste des notes"],
        //Formulaires
        "formConnexion"=>["PHP/VIEW/","formConnexion","Connexion"],
        "formGestionMatiere"=>["PHP/VIEW/","formGestionMatiere","Gestionnaire des matiere"],
        "formGestionEleve"=>["PHP/VIEW/","formGestionEleve","Gestion des Eleves"],
        "formAjoutMatiere"=>["PHP/ViEW/","formAjoutMatiere","Ajouter une matiere"],
        "formGestionUtilisateur"=>["PHP/VIEW/","formGestionUtilisateur","Gestion Enseignant"],
        //Action
        "actionConnexion"=>["PHP/VIEW/","actionConnexion",'xx'],
        "actionDeconnexion"=>["PHP/VIEW/","actionDeconnexion","xx"],
        "actionAjoutMatiere"=>["PHP/VIEW/","actionAjoutMatiere","xx"],
        "actionEleve"=>["PHP/VIEW/","actionEleve","xx"],
        'actionUtilisateur'=>['PHP/VIEW/','actionUtilisateur','xx'],
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