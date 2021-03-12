<?php
require("./Services/methodes.php");
$nomClass = readline("Nom de la classe :");

do {
    $attribut[] = readline("Nom de l'attribut (stop pour stop) : ");
} while (strtolower(end($attribut)) != "stop");
array_pop($attribut);
generer($nomClass,$attribut);