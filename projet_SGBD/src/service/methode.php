<?php
   function help($repUser){
    echo "1.create table nomTable(titreColonne1, titreColonne2,titreColonne3,tite); (création de table) \n
2.insert into table values(insertion de données dans une table)\n
3.SELECT * FROM nomTable; (Affiche tout le fichier en tableau) \n
4.SELECT nom_du_champ from nom_de_la_table; (Affiche la colonne entrer )\n
5.SELECT noms1,noms2 from nomTable (Affiche plusieurs colonne entrer)\n
4.quit (Pour quitter)\n";
}
/*****************************************CREATE_TABLE********************************************************** */
   function create_table($repUser){
    
    $nomfile= $repUser[2].".dwwm";
    $boolean = file_exists("../BDD/".$nomfile); //Verifie si le fichier existe deja
    if($boolean == false){                      //Si fichier nexiste pas
        $f = fopen("../BDD/".$nomfile,"x+");    //Ouverture + ecriture du fichier
            for($i=3;$i<count($repUser);$i++){  //boucle a partir du noms du fichier jusqu'a compter nb de colonne 
                fputs($f,$repUser[$i]);         //Ecrire dans le fichier a la premiere ligne les argument(1,2,3,4,...)
                if($i!=count($repUser)-1){      
                fputs($f,";");                  //mettre entre chaque champs ; sauf au dernier (-1)
                }
            }
        fclose($f);                             //fermeture du fichier
        echo "Fichier crée.\n";
    }else{
        echo"Erreur : Se fichier existe deja \n";   //Si fichier existe pas msg d'erreur
    }
    
    }
/****************************************INSERT_INTO************************************************************ */
   function insert ($repUser){
    $nomfile = $repUser[2].".dwwm";
    
    $boolean = file_exists("../BDD/".$nomfile); //Verifie si le fichier existe deja
    if($boolean==true){                         //Si fichier existe 
        $f = fopen("../BDD/".$nomfile,"r") ;    //Ouvrir le fichier en lecture
        $ligne = explode(";",fgets($f,4096));   //Premiere ligne, separe les colonne quand il y a ; (ligne = tableau d'en tete)
        fclose($f);                             //Fermeture du fichier
        $f = fopen("../BDD/".$nomfile,"a");     //Ouvre le fichier en ecriture


        if((count($repUser)-4)==count($ligne)){     //Si nombre de champs correspond au nombre de colonne (-4 pour ne pas compter INSERT INTO nomtable VALUES )
                
                    fputs($f,"\r\n");               //retour a la ligne (jecris un retour a la ligne)
                    for ($i=4; $i<count($repUser) ; $i++) {         //Boucle sur les valeurs a inserer
                        $repUser[$i]=str_replace("'","",$repUser[$i]); //Enleve les ' 
                        fputs($f,$repUser[$i]);                     //Ecrit chaque valeur dans le fichier
                        if($i!=count($repUser)-1){                  //mettre entre chaque champs ; sauf au dernier (-1)
                            fputs($f,";");
                        } 
                    } 
                    fclose($f);     //Fermeture du fichier
                
        }else{
            echo "Nombre de colonne incorrect\n\r";
        }
    }else{
        echo "Se fichier n'existe pas \n";
    }

}
/****************************************SELECT_FROM************************************************************ */
function select($repUser){
    $nomfile = $repUser[3].".dwwm";
    if(!file_exists("../BDD/".$nomfile)){           //Test si le fichier existe
        echo "Se fichier n'existe pas\n";
    }else{
        $f = fopen("../BDD/".$nomfile,"r") ;       //Ouverture en lecture
        while(!feof($f)){                           //Aller jusqua la fin du fichier
            $ligne = explode(";",fgets($f,4096));   //Recupere 1 ligne
            for ($i = 0; $i < count($ligne);$i++){      //Boucle sur les valeurs de la ligne
                $ligne= str_replace("\n","",$ligne);    //Enleve les retour a la ligne
                $ligne = str_replace("\r","",$ligne);   //Enleve le retour a la ligne
                $ligne = str_replace("\t","",$ligne);   //Enleve la tabulation (Si il y a)
                echo $ligne[$i]." ";
            }
            echo "\n";
        }
    }
}

function selectColonne($repUser){
    $repUser = str_replace(";","",$repUser);
    $nomfile = $repUser[3].".dwwm";
    if(!file_exists("../BDD/".$nomfile)){           //Test si le fichier existe
        echo "Se fichier n'existe pas\n";
    }else{
        $f = fopen("../BDD/".$nomfile,"r") ; //Si existe alors on louvre
        $j = 0;

        while(!feof($f)){ //Jusqua la fin du fichier
            $ligne = explode(";",fgets($f,4096)); //Recupere chaque ligne
            for ($i = 0; $i < count($ligne);$i++){
                $tableau[$j][$i] = $ligne[$i]; //exporte le fichier en tableau
            }
            $j++;
        }
        $champaAfficher = explode(",",$repUser[1]); //Creation du tableau des champs a afficher
        for ($i=0; $i < count($champaAfficher); $i++) { //Boucle sur le tableau des champs
            $boolean = false; 
            for ($k=0; $k < count($tableau[0]); $k++) { //Boucle sur lentete du tableau(les titres)
                $tableau[0][$k]=str_replace("\n","",$tableau[0][$k]); //suppresion des retour a la ligne
                $tableau[0][$k]=str_replace("\r","",$tableau[0][$k]); //retour chariot
                if ($tableau[0][$k]==$champaAfficher[$i]) { //Verification si champs est valide
                   $boolean=true;
                   break; 
                }
            }
            if($boolean==false){ //si champs a lindice k n'est pas trouver
                echo "Au moin un des champs est incorrect.\n";
                break;    
            }
            
        }
        if($boolean==true){ //Si tout les champs sont correct
        
            for ($i=0; $i < count($tableau) ; $i++) { //Ligne du tableau
                for ($k=0; $k < count($champaAfficher) ; $k++) {      //Noms a afficher
                    for ($j=0; $j < count($tableau[0]) ; $j++) { //Colonne du tableau
                        $tableau[$i][$j]=str_replace("\n","",$tableau[$i][$j]);
                        $tableau[$i][$j]=str_replace("\r","",$tableau[$i][$j]);
                        $tableau[0][$j]=str_replace("\n","",$tableau[0][$j]);
                        $tableau[0][$j]=str_replace("\r","",$tableau[0][$j]);
                        if($champaAfficher[$k]==$tableau[0][$j]){ //Test Nom a afficher par rapport a la colonne j du fichier(lentete)
                            echo $tableau[$i][$j]." ";
                        }
                    } 
                
                }
                echo "\n";
            }
        }
        
    }   
}
/***************************************VERIFICATION************************************************************/  
    function verifLenght($repUser){
        $boolean = true;
        for ($i=0; $i < count($repUser) ; $i++) {  //Boucle les champs
            if(strlen($repUser[$i])>25){    //Si champs > 25 caracteres 
                $boolean = false;           //bool=false
                echo "Erreurs nombre de caracteres superieur a 25 ! \n";
                break;
            }
            
        }
        return $boolean;
    }

?>