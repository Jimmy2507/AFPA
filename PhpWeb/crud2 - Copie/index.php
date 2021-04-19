<?php
function afficherPage($page){
    $chemin= $page[0];
    $nom=$page[1];
    $titre=$page[2];
 include "PHP/VIEW/Head.php";
 include "PHP/VIEW/Header.php";
 include "PHP/VIEW/nav.php";
 include "PHP/VIEW/footer.php";
 include $chemin.$nom.".php";
 include "PHP/VIEW/footer.php";    
}

$routes = [
    "default"=>["PHP/VIEW/","ListeUser","Liste des Utilisateur"],
    "FormUser"=>["PHP/VIEW/","FormUser","Formulaire Utilisateur"],
    "ActionUser"=>["PHP/VIEW/","ActionUser","Action User"]
];

if (isset($_GET["page"]))
{

    $codePage = $_GET["page"];

    //Si cette route existe dans le tableau des routes
    if (isset($routes[$codePage]))
    {
        //Afficher la page correspondante
        AfficherPage($routes[$codePage]);
    }
    else
    {
        //Sinon afficher la page par defaut
        AfficherPage($routes["default"]);
    }

}
else
{
    //Sinon afficher la page par defaut
    AfficherPage($routes["default"]);

}

