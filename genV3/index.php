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

      mkdir("U:/59011-15-02/DWWM/".$nom."/class"); //Creation Dossier Class
      mkdir("U:/59011-15-02/DWWM/".$nom."/Services");//Creation Dossier Services 
      index($nom);      //Creation de l'index
      services($nom);   //Creation du fichier methode dans le dossier Services 
     do {
            $nomClass = readline("Nom de la classe (stop):");  //Demande nom de la classe
            if(strtolower($nomClass)!= "stop"){
            do {
                  $attribut[] = readline("Nom de l'attribut (stop pour stop) : ");
            } while (strtolower(end($attribut)) != "stop");
            array_pop($attribut); //enleve derniere case du tableau d'attribut (stop)
            generer($nomClass,$attribut,$nom); //genere la classe
            }else{
                  break;
            }
            unset($attribut); //Supprime le tableau d'attribut quand une classe est crée
            
     } while (strtolower ($nomClass)!= "stop");
      

     



}



