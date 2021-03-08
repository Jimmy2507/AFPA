<?php
function chargerClasse($classe){
    require "../Entities/".$classe.".class.php";   
}
spl_autoload_register("chargerClasse");

    $personnage = new Personnage("toto","tata");
    $mage = new Mage("mage1","test",100);
    $personnage -> Mobile();
?>