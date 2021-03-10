<?php
function chargementClasse($class){
    require("./class/".$class.".class.php");
}
spl_autoload_register("chargementClasse");
$employe[] = new Employe(array("nom"=>"Toto","prenom"=>"Tata","dateEmbauche"=>"2012-09-11","poste"=>"employe","salaire"=>12,"service"=>"cuisine"));
$employe[] = new Employe (array("Nom"=>"Deschamps","Prenom"=>"Didier","dateEmbauche"=>"2021-01-01","poste"=>"employe","salaire"=>38,"Service"=>"soudeur"));
$employe[] = new Employe (array("Nom"=>"Deuf","Prenom"=>"John","dateEmbauche"=>"2020-03-12","poste"=>"employe","salaire"=>60,"Service"=>"serveur"));
$employe[] = new Employe (array("Nom"=>"Duriff","Prenom"=>"Sylvain","dateEmbauche"=>"2017-06-11","poste"=>"employe","salaire"=>72,"Service"=>"livreur"));
$employe[] = new Employe (array("Nom"=>"Sarkozy","Prenom"=>"Nico","dateEmbauche"=>"2015-07-06","poste"=>"employe","salaire"=>5,"Service"=>"boulanger"));
echo "Il y a ".Employe::getNbEmploye()." employés.\n";
foreach ($employe as $e ) {
    echo "La prime est de ".$e->prime()."k€"." pour Mr ".$e->getNom()."\n";
}
if(date('d/m')=="30/11"){
    $employe1->versementPrime();
}
?>