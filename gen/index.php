<?php
require("./Services/methodes.php");
$nomProjet = readline("Nom du projet :");
$chemin = readline("Ou crée le dossier ? (C:\ repo\DWWM)");
$chemin = "U:/59011-15-02/DWWM/";
if (is_dir($chemin)){
    mkdir($chemin, 0700);    
}
echo $chemin;

$nomClass = readline("Nom de la classe :");
do {
    $attribut[] = readline("Nom de l'attribut (stop pour stop) : ");
} while (strtolower(end($attribut)) != "stop");
array_pop($attribut);
generer($nomClass,$attribut,$chemin);

