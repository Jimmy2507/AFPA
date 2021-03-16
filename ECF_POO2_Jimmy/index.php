<?php
function chargementClasse($class){
    require("./class/".$class.".class.php");
}
spl_autoload_register("chargementClasse");

$auteur[]= new Auteur(array("Nom"=>"dupont","Prenom"=>"toto","DateNaissance"=>'2000-07-25',"DateDeces"=>null));
$auteur[]=new Auteur (array("Nom"=>"dupont","Prenom"=>"toto","DateNaissance"=>'1995-12-18',"DateDeces"=>'2015-01-01'));
$auteur[]=new Auteur(array("Nom"=>"auteur3","Prenom"=>"auteur3","DateNaissance"=>'1975-02-18',"DateDeces"=>'2020-10-18'));

$doc[]= new Document (array("Auteur"=>$auteur[1],"Titre"=>"Test","Emprunte"=>false));
$doc[]= new Document (array("Auteur"=>$auteur[2],"Titre"=>"Test","Emprunte"=>true));
$doc[]= new Document (array("Auteur"=>$auteur[0],"Titre"=>"Test3","Emprunte"=>false));

$livre[]= new Livre(array("Auteur"=>$auteur[1],"Titre"=>"Toto","Emprunte"=>false,"nbPage"=>150));
$video[]= new Video (array("Auteur"=>$auteur[2],"Titre"=>"Tata","Emprunte"=>true,"Soustitre"=>"Oui"));
$audio[]= new EnregistrementAudio(array("Auteur"=>$auteur[0],"Titre"=>"Tutu","Emprunte"=>false,"duree"=>5));
//Info sur les document
foreach ($doc as $d ) {
    echo $d->toString();    
}
//Info sur les auteurs
foreach($auteur as $a){
    echo $a->toString();
}
/*
//Verifie si le premier auteur et le 2nd sont identique 
if($auteur[0]->equalsTo($auteur[1])){
    echo "Les auteurs sont : identique\n\n"; //Si ils le sont ca l'affiche
}
//verifie si le doc 2 et le doc 1 sont identique
if($doc[1]->equalsTo($doc[0])){
    echo "Les 2 Documents sont : identique\n\n";
}
if ($doc[2]->equalsTo($doc[1])){
    echo "Les 2 Documents sont : identique\n\n";
}
*/
//Affichage Info Livre
echo $livre[0]->toString();
//Affichage Info Video
echo $video[0]->toString();
//Affichage Info Audio
echo $audio[0]->toString();