<?php
//var_dump($_POST);
$u = new User($_POST);
$leNom = uniqid('prod_') . '.'.explode("/",$_FILES['image']['type'])[1];
move_uploaded_file($_FILES['image']['tmp_name'],"IMG/".$leNom);
$p->setImage("IMG/".$leNom);
//var_dump($u);
switch ($_GET['mode']) {
    case "ajouter":
            UserManager::add($u);
            break;
        
    case "modifier":
            UserManager::update($u);
            break;
        
    case "detail":
        UserManager::findById($u);
        break;
    case "supprimer":
        UserManager::delete($u);
        break;
}
header("location:?page=ListeUser");

