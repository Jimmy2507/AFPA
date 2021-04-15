<?php
function afficherPage($page){
    $chemin= $page[0];
    $nom=$page[1];
    $titre=$page[2];
 include "PHP/VIEW/Head.php";
 include "PHP/VIEW/Header.php";
 include "PHP/VIEW/nav.php";
 include $chemin.$nom.".php";
 include "PHP/VIEW/footer.php";    
}
function crypte($mot) //fonction qui crypte le mot de passe
{
    return md5(md5($mot) . strlen($mot));
}
$routes = [
    "default"=>["PHP/VIEW/","Accueil","Accueil"],
    "inscription" => ["PHP/VIEW/", "FormInscription", "Identification"],
    "actionInscription" => ["PHP/VIEW/", "actionInscription", "xx"],
    "connection" => ["PHP/VIEW/", "FormConnection", "Identification"],
    "actionConnection" => ["PHP/VIEW/", "actionConnection", "xx"],
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

