<?php
function chargementClasse($class){
    require("./class/".$class.".class.php");
}
spl_autoload_register("chargementClasse");
include "./Contenu/head.php";
include "./Contenu/header.php";
include "Liste.php";
var_dump($_GET);
var_dump($personne[$_GET["id"]]);