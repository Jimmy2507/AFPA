<?php
function chargementClasse($class){
    require("./class/".$class.".class.php");
}
spl_autoload_register("chargementClasse");

$titre = "test";
include('./Contenu/head.php');
include('./Contenu/header.php');
include('./Contenu/nav.php');
include('./Contenu/page2.php');
include('./Contenu/footer.php');