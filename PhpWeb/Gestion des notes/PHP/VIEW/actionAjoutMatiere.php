<?php
var_dump($_POST);
$a = new Matiere($_POST);
var_dump($a);
MatiereManager::add($a);
//header("location:?page=formGestionAdmin&mode=matieres");