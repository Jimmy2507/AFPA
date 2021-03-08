<?php
function chargerClasse($classe){
    require "../Entities/".$classe.".class.php";   
}
spl_autoload_register("chargerClasse");

$perso = new Personnage("toto","tata");
$Pouvoir = new Pouvoir("toto","tata","100","40");

$perso->presentation("toto","tata",100,90);

?>