<?php

    include "./PHP/outils.php";

    spl_autoload_register("chargerClasse");
    $mode=(isset($_GET['mode']))?$_GET['mode']:"";
    $routes=[
            'default'=>['PHP/vue/','ListeUser','Liste des utilisateur'],

            //Listes
            "FormUser"=>["PHP/vue/","FormUser","Formulaire Utilisateur"],
            "ActionUser"=>["PHP/vue/","ActionUser","Action User"]

            //Formulaires

            //Action

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