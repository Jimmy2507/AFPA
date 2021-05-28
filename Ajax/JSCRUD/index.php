<?php

    include "./PHP/outils.php";

    spl_autoload_register("chargerClasse");
    $mode=(isset($_GET['mode']))?$_GET['mode']:"";
    $routes=[
            'default'=>['PHP/vue/','ListeUser','Liste des utilisateur',false],

            //Listes
            "FormUser"=>["PHP/vue/","FormUser","Formulaire Utilisateur",false],
            "ActionUser"=>["PHP/vue/","ActionUser","Action User",false],

            //Formulaires

            //Action


            //API
            "listeAPI" => ["PHP/modele/API/", "ListeAPI", "Accueil",true]
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