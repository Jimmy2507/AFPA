<?php
$u= new Menus($_POST);
// var_dump($_POST);
// var_dump($u);
switch ($_GET['mode']) {
    case "ajouter":
        MenusManager::add($u);
        break;
        
    case "modifier":
        MenusManager::update($u);
        break;
        
    case "detail":
        MenusManager::findById($u);
        break;
    case "supprimer":
        MenusManager::delete($u);
        break;

}
header("location:?page=default");