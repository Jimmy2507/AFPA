<?php
$titre = "test";
include('./Contenu/head.php');
include('./Contenu/header.php');
include('./Contenu/nav.php');
include('./Contenu/page.php');
include('./Contenu/footer.php');

function chargementClasse($class){
    require("./class/".$class.".class.php");
}
    spl_autoload_register("chargementClasse");

    $personne[] = new Personne(array("Prenom"=>"Toto","Nom"=>"Tata","Age"=>18));
    $personne[]= new Personne(array("Prenom"=>"Tutu","Nom"=>"Toto","Age"=>32));
    $personne[]= new Personne(array("Prenom"=>"Didier","Nom"=>"Tata","Age"=>45));
    $personne[]= new Personne(array("Prenom"=>"Pascal","Nom"=>"Tata","Age"=>8));


