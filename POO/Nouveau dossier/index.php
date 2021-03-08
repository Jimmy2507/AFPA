<?php
function chargementClasse($class){
    require("./entities/".$class.".class.php");
}
spl_autoload_register("chargementClasse");
$employe1 = new Employer("Neymar","Jean","1850389546458",1500.56,"soudeur");
$employe2 = new Employer("Jeremy","Simon","179028955812",179028955812,"assistant mécanicien");
$employe3 = new Employer("Deray","Odile","285097154678",1900.14,"magasinière");
$liste=[$employe1,$employe2,$employe3];
echo "Employer 1 :\n";
$employe1->effectueSonJob();
echo "Employer 2 :\n";
$employe2->effectueSonJob();
echo "Employer 3 :\n";
$employe3->effectueSonJob();
$cadre = new Cadre($liste);
$cadre->afficher();

?>