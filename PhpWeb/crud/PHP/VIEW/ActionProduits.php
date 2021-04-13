<?php

include 'Head.php';
var_dump($_POST);
$pdt = new Produits($_POST);
switch ($_GET["mode"])
{
    case "ajout" : ProduitsManager::add($pdt);break;
    case "modif" : ProduitsManager::update($pdt);break;
    case "supression" : ProduitsManager::delete($pdt);break;
    
}
header("location:../../index.php");