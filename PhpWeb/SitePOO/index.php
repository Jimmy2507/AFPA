<?php
function chargementClasse($class){
    require("./class/".$class.".class.php");
}
spl_autoload_register("chargementClasse");

$titre = "test";

include('./Contenu/head.php');
include('./Contenu/header.php');
include('./Contenu/nav.php');
include('Liste.php');
include('./Contenu/page.php');
include('./Contenu/footer.php');






