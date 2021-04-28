<?php
var_dump($_POST);
$u = new Eleve($_POST);
var_dump($u);
switch ($_GET['mode']) {
    case "ajouter":
        EleveManager::add($u);
        break;
        
    case "modifier":
        EleveManager::update($u);
        break;
    case "supprimer":
        EleveManager::delete($u);
        break;

}
header("location:?page=listeEleve");