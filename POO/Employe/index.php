<?php
function chargementClasse($class){
    require("./class/".$class.".class.php");
}
spl_autoload_register("chargementClasse");
$date = "2021-03-09";
$employe1 = new Employe(array("nom"=>"Toto","prenom"=>"Tata","dateEmbauche"=>"2012-09-11","poste"=>"cuisinier","salaire"=>12,"service"=>"cuisine"));
echo "La prime est de ".$employe1->prime()."k€"." pour Mr ".$employe1->getNom();


?>