<?php
$u= new Plats($_POST);
// var_dump($_POST);
// var_dump($u);
switch ($_GET['mode']) {
    case "ajouter":
        PlatsManager::add($u);
        break;
        
    case "modifier":
        PlatsManager::update($u);
        break;
        
    case "detail":
        PlatsManager::findById($u);
        break;
    case "supprimer":
        PlatsManager::delete($u);
        break;

}
header("location:?page=ListePlat");