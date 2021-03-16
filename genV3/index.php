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

      mkdir("U:/59011-15-02/DWWM/".$nom."/class");
      index($nom);
     do {
            $nomClass = readline("Nom de la classe (stop):"); 
            if(strtolower($nomClass)!= "stop"){
            do {
                  $attribut[] = readline("Nom de l'attribut (stop pour stop) : ");
            } while (strtolower(end($attribut)) != "stop");
            array_pop($attribut);
            generer($nomClass,$attribut,$nom);
            }else{
                  break;
            }
            unset($attribut);
            
     } while (strtolower ($nomClass)!= "stop");
      

     



}



