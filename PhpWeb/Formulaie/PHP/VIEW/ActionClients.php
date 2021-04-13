<?php
switch($_GET["mode"]){
    case "Ajouter":
        var_dump($_POST);
        $cl = new Clients($_POST);
        var_dump($cl);
        ClientsManager::add($cl);
        header("location:../../index.php");
        break;

    case "modifier":
        break;
}