<?php
//var_dump($_POST);
$u = new Matiere($_POST);
//var_dump($u);
switch ($_GET['mode']) {

    case "ajouter":
        MatiereManager::add($u);
        break;
        
    case "modifier":
        MatiereManager::update($u);
        break;

    case "supprimer":
        MatiereManager::delete($u);
        break;

}
header("location:?page=listeMatieres");