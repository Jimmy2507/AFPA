<?php
function chargerClasse($classe){
    require "./Entities/".$classe.".class.php";   
}
spl_autoload_register("chargerClasse");

echo "Création du client\n";
$client = new Client("Dupont","Paul","50236R",120);
$client->affiche();
echo "Le client reçois 50€\n";
$client->recevoir(50);
$client->affiche();
echo "Le client depense 10 €\n";
$client->depenser(10);
$client->affiche();
echo"Le client épargne 100€\n";
$client->epargner(100);
$client->affiche();
echo"on applique les intérêts au livret\n";
$client->get_livret()->appliqueInteret();
$client->affiche();


?>