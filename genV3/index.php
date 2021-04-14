<?php
require("./Services/methodes.php");
$nom = readline("Nom du projet : "); // Le nom du répertoire à créer

// Vérifie si le répertoire existe :
if (is_dir($nom)) {
      echo 'Le répertoire existe déjà!';  
}
// Création du nouveau répertoire
else { 
      mkdir("U:/59011-15-02/DWWM/".$nom);
      echo 'Le répertoire '.$nom.' vient d\'être créé!'."\n";      
      mkdir("U:/59011-15-02/DWWM/".$nom."/CSS");
      CSS($nom);
      mkdir("U:/59011-15-02/DWWM/".$nom."/PHP"); //Creation du Dossier PHP
      mkdir("U:/59011-15-02/DWWM/".$nom."/PHP/CONTROLLER"); //Creation Dossier CONTROLLER
      mkdir("U:/59011-15-02/DWWM/".$nom."/PHP/MODEL");     //Creation du Dossier MODEL
      mkdir("U:/59011-15-02/DWWM/".$nom."/PHP/VIEW");       //Creation du Dossier VIEW
      CreeHead($nom);
      index($nom);      //Creation de l'index
      $nomBDD = readline("Quel est le nom de la BDD : "); 
      dbConnect($nom,$nomBDD);            //CREATION FICHIER dbConnect

     do { //CREATION DES CLASS
            $nomClass = readline("Nom de la classe (stop):");  //Demande nom de la classe
            
            if(strtolower($nomClass)!= "stop"){
            Manager($nom,$nomBDD,$nomClass);//CREATION MANAGER PAS FINI
            do {
                  $attribut[] = readline("Nom de l'attribut (stop pour stop) : ");
            } while (strtolower(end($attribut)) != "stop");
            array_pop($attribut); //enleve derniere case du tableau d'attribut (stop)
            genererClass($nomClass,$attribut,$nom); //genere la classe
            }else{
                  break;
            }
            unset($attribut); //Supprime le tableau d'attribut quand une classe est crée
            
     } while (strtolower ($nomClass)!= "stop");

     
      

     



}



