<?php
$erreur =false;
$u = new Utilisateur ($_POST);
// var_dump($_POST);
// var_dump($u);
switch ($_GET['mode']) {
    case "ajouter":
    UtilisateurManager::add($u);
        break;
        
    case "modifier":
    UtilisateurManager::update($u);
        break;
        
    case "supprimer":
    UtilisateurManager::delete($u);
        break;

}
header("location:?page=listeEnseignant");

