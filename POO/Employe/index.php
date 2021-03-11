<?php
function chargementClasse($class){
    require("./class/".$class.".class.php");
}
spl_autoload_register("chargementClasse");

$agence1 = new Agence(array("Nom"=>"toto","Adresse"=>"96 rue de tata","CodePostale"=>"59240","Ville"=>"Dunkerque","Restauration"=>"ticket restaurant"));
$agence2 = new Agence(array("Nom"=>"tata","Adresse"=>"38 rue de tutu","CodePostale"=>"59210","Ville"=>"cdk","Restauration"=>"Restaurant"));
$agence3 = new Agence(array("Nom"=>"tutu","Adresse"=>"26 rue de ttoto","CodePostale"=>"59430","Ville"=>"stpol","Restauration"=>"ticket restaurant"));

$enfant[]= new Enfant(array("Nom"=>"toto","Prenom"=>"Titi","Age"=>11));
$enfant[]= new Enfant(array("Nom"=>"titi","Prenom"=>"sofiane","Age"=>8));
$enfant[]= new Enfant(array("Nom"=>"troisieme","Prenom"=>"pascal","Age"=>5));
$enfant[]= new Enfant(array("Nom"=>"quatrieme","Prenom"=>"ww","Age"=>19));
$enfant[]= new Enfant(array("Nom"=>"cinquieme","Prenom"=>"tto","Age"=>6));

$employe[] = new Employe(array("nom"=>"Toto","prenom"=>"Tata","dateEmbauche"=>"2012-09-11","poste"=>"employe","salaire"=>12,"service"=>"cuisine","Agence"=>$agence1,"Enfants"=>$enfant[2]));
$employe[] = new Employe (array("Nom"=>"Deschamps","Prenom"=>"Didier","dateEmbauche"=>"2021-01-01","poste"=>"employe","salaire"=>38,"Service"=>"soudeur","Agence"=>$agence3,"Enfants"=>$enfant[0]));
$employe[] = new Employe (array("Nom"=>"Deuf","Prenom"=>"John","dateEmbauche"=>"2020-03-12","poste"=>"employe","salaire"=>60,"Service"=>"serveur","Agence"=>$agence2,"Enfants"=>$enfant[3]));
$employe[] = new Employe (array("Nom"=>"Duriff","Prenom"=>"Sylvain","dateEmbauche"=>"2017-06-11","poste"=>"employe","salaire"=>72,"Service"=>"grand monarque","Agence"=>$agence1,"Enfants"=>$enfant[1]));
$employe[] = new Employe (array("Nom"=>"Sarkozy","Prenom"=>"Nico","dateEmbauche"=>"2015-07-06","poste"=>"employe","salaire"=>5,"Service"=>"boulanger","Agence"=>$agence3,"Enfants"=>[$enfant[4],$enfant[1]]));
echo "Il y a ".Employe::getNbEmploye()." employés.\n"; //Nombre d'employé
//Affiche le montant de la prime de chaque employe
foreach ($employe as $e ) {
    echo "La prime est de ".$e->prime()."k€"." pour Mr/Mme ".$e->getNom()."\n";
}
//Trie des employe sur le nom puis le prenom
usort($employe,array("Employe","compareTo2"));
var_dump($employe);
//calcul de la masse salariale
$masseSalariale = 0;
foreach ($employe as $e) {
    $masseSalariale += $e->masseSalariale();
}
echo "La masse salariale est de :".$masseSalariale."k€";
//tickets restaurants
foreach ($employe as $e) {
    echo "Mode de restauration pour ".$e->getPrenom().":".$e->getAgence()->getRestauration()."\n";    
}
//Cheque vacances
foreach ($employe as $e ) {
    echo $e->getPrenom()." ".$e->chequeVacances()."\n";
}
//cheque noel
foreach ($employe as $e) {
    if($e->getEnfants()->montantChequeNoel()!=0){
        echo "L'enfant de ".$e->getPrenom()." : ".$e->getEnfants()->getPrenom()." a ".$e->getEnfants()->getAge()." ans, il a donc droit a un cheque cadeau d'une valeur de : ".$e->getEnfants()->montantChequeNoel()."€\n";
    }
}


//Versement prime si la date du jour est egal au 30/11
if(date('d/m')=="30/11"){
    $employe1->versementPrime();
}

?>