<?php
    require('./service/methode.php');
        do{
            
            $userName = readline("Username: ");
            $mdp = readline("Password : ");
            $login = $userName.";".$mdp;
            $fichierLogin = fopen("../BDD/config.ini","r");
            
                if($fichierLogin){//Si lecture du fichier s'est bien dérouler
                    
                    $boolean = false;
                    $ligne = fgets($fichierLogin,4096); //Lit ligne par ligne 4096 octets
                    while(!feof($fichierLogin)){        //Tant qu'on est pas à la fin du fichier
                        $ligne = fgets($fichierLogin,4096);
                        if(strstr($ligne,$login)){      //Compare si login est present dans le fichier
                            $boolean=true;              //Si present bool = true
                            break;                      //et sort de la boucle
                        }
                    }
                    fclose($fichierLogin);              //ferme le fichier
                }
                if ($boolean) {                     //Si le login est bon
                    echo"Identifiant correct"."\n";
                    $repUser = "";
                }else{                              //Si login faux
                    echo "Identifiant inccorect "."\n";
                    $repUser = readline("(quit) pour quitter, (Entrer pour continuer)");
                }

//**********************************************************COMMANDE SQL************************************************************************************* */

        }while(($boolean != true) && ($repUser != "quit"));         //Faire jusqu'a ce que lidentifiant est bon ou que lutilisateur n'ecris pas "quit"
    if($repUser !="quit"){
        echo "help pour plus d'information"."\n"."quit pour quitter"."\n";
    
        do{
            $repUser = readline("SQL :>");              //Affichage console des requete sql
            $repUser1=$repUser;                         //Stock la commande dans une variable  pour le create table
        
            if ($repUser == "help"){ //Ouverture menu help
                help($repUser);
                
            }elseif($repUser=="quit"){      //Si requete = quit alors on sort de la boucle while
                exit();                     //si quit alors on sort de la boucle

            }else{

                if(substr($repUser,-1)!=";"){           //Controle si les commandes finissent bien par un ;
                    echo "La commande dois se finir par un \";\"\n";
                }else{
            
                    if (substr($repUser,0,6)!="select") {           //Si ce n'est pas la commande select
                        $repUser = str_replace("("," ",$repUser);   //remplace ( par rien
                        $repUser = str_replace(")","",$repUser);    //remplace ) par rien
                        $repUser = str_replace(";","",$repUser);    //remplace ; par rien
                        $repUser = str_replace(", "," ",$repUser);  //remplace ,  par rien
                        $repUser = str_replace(","," ",$repUser);   //remplace , par rien
                    }
                    $repUser =  explode(" ",$repUser);              //Transforme la commande en tableau, chaque espace pour nouvelle colonne

                                    //CREATE TABLE
                    if(strtolower($repUser[0]) =="create" && strtolower($repUser[1])== "table"){ //Creation de la table + creation fichier
                        if(substr($repUser1,-2)==");"){     //Si fin de commande create table = );
                            if(verifLenght($repUser)){      //verifie la longueur des caractere si +25 ne fonctionne pas
                                
                                create_table($repUser);
                            }
                        }else{
                            echo "Syntaxe non respecté, la commande doit finir par \");\" \n";
                        }

                                            //INSERT INTO
                    }elseif($repUser[0] == "insert" && $repUser[1] =="into" && $repUser[3]== "values"){                                
                        $temp=substr($repUser1,strpos($repUser1,"("),-2); //Recuperer les champ apres "("
                        if(substr($repUser1,-2)==");"){ //Si caractere de fin = );
                            $temp = explode(",",$temp); //Crée un tableau de champs(' val 1)
                            $boolean=true;
                            foreach ($temp as $key ) {
                                if (substr($key,0,1)!="'"&& substr($key,-1)!="'") { //Si chaque valeur ne commence pas et ne fini pas par "'"
                                $boolean=false; //Boolean = false
                                break; 
                                }
                            }
                            if($boolean==false){ 
                                echo "Syntaxe non respecté, \" ' \" manquant. "; //Il manque les ' entre chaque champs
                            }else{
                                
                                insert($repUser);    
                            }
                            
                                
                        }else{
                            echo "Syntaxe non respecté, la commande doit finir par \");\" \n";  //La commande ne finis pas par );
                        }
                        
                                //SELECT * from
                    }elseif($repUser[0] == "select" && $repUser[1] =="*" && $repUser[2]=="from"){
                        $repUser[3] = substr($repUser[3],0,-1);
                        select($repUser);

                                //SELECT noms FROM nomstable
                    }elseif($repUser[0]== "select" && $repUser[2] =="from"){
                        selectColonne($repUser);

                    }elseif (strpos($repUser[0],"quit")===false) {
                        echo "Commande incorrect !\n ";    
                    }
                }
            }
        }while(true);
    }
               
            

        

        

?>