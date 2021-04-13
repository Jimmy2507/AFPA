<?php


    function chargerClasse($classe)
    {
        if (file_exists("Php/Controller/" . $classe . ".class.php"))
        {
            require "Php/Controller/" . $classe . ".class.php";
        }

        if (file_exists("Php/Model/" . $classe . ".class.php"))
        {
            require "Php/Model/" . $classe . ".class.php";
        }

    }
spl_autoload_register("chargerClasse");

function AfficherPage($tab){
    
    include "PHP/VIEW/Head.php";
    include "PHP/VIEW/Header.php";
    include "PHP/VIEW/nav.php";    
    require "./PHP/MODEL/ListeDonnees.php";
    include $tab["chemin"].$tab["page"].".php";
    include "PHP/VIEW/footer.php";
}

$routes = [
"default"=>["chemin"=>"./PHP/VIEW/","page"=>"Accueil","titre"=>"Accueil"],
"Accueil"=>["chemin"=>"./PHP/VIEW/","page"=>"Accueil","titre"=>"Accueil"],
"detail"=>["chemin"=>"./PHP/VIEW/","page"=>"detail","titre"=>"Detail"],
"erreur"=>["chemin"=>"./PHP/VIEW/","page"=>"erreur","titre"=>"Erreur"],
"Traitement"=>["chemin"=>"./PHP/VIEW/","page"=>"Traitement","titre"=>"Traitement"]

];

if (isset($_GET['page']))
{
    $codePage = $_GET['page'];
    if (isset($routes[$codePage]))
    {
        AfficherPage($routes[$codePage]);
    }
    else{
        AfficherPage($routes["erreur"]);
    }
}
else
{
    AfficherPage($routes["default"]);
}