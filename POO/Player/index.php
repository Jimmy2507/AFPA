<?php
function chargementClasse($class){
    require("./entities/".$class.".class.php");
}
spl_autoload_register("chargementClasse");
    $pseudo = readline("Quel est votre pseudo ?");
    $player = new Player($pseudo,0);
    $score = $player->get_Score();
    echo $pseudo." a ".$player->get_Vie()." point de vie et ".$player->get_Force()." point d'attaque\n";
    
    do {
        if($player->get_Vie()>0){
            $direction = $player->moove();
            if($direction == 1 && $direction !="quit" && $direction != 2){
                $rdm = rand(1,3);
                if($rdm == 1 ){ //Attaque contre bandit manchot
                    echo "$pseudo affronte un bandit manchot ! \n";
                    $bandit = new BanditManchot();
                        echo "$pseudo a ".$player->get_Vie()." pv\n";
                        $rep= readline('Voulez vous jouez ?(O/N)');
                        if(strtolower($rep)=="o"){
                            $bandit->winOrLose();
                            if($bandit->winOrLose()){
                                echo "Tu gagne des points de vie !\n";
                                $player->set_Vie($player->get_Vie() + $bandit->howManyWeWinOrLose()) ;
                                echo "$pseudo a maintenant : ".$player->get_Vie()."pv\n";
                            }else{
                                echo "Tu perds des points de vie !\n";
                                $player->set_Vie($player->get_Vie() - $bandit->howManyWeWinOrLose()) ;
                                echo "$pseudo a maintenant : ".$player->get_Vie()."pv\n";
                            } 
                        }else{
                            echo "Aurevoir\n";
                        }
                    

                }elseif($rdm!=1){   //Attaque contre monstre
                    $monstre = new Monster();
                    $pvMonstre = $monstre->get_Vie();
                    echo "$pseudo affronte un monstre ! \n";
                    echo "$pseudo a : ".$player->get_Vie()." pv\n";
                    echo "Le monstre a : ".$monstre->get_Vie()."pv et ".$monstre->get_Force()." points de force\n";
                    do{
                        if($player->get_Vie()>0){
                            echo "$pseudo attaque !\n";
                            $player->attack($monstre);
                            if($monstre->get_Vie()<0){
                                $monstre->set_Vie(0);
                            }
                            echo "Le monstre a maintenant : ".$monstre->get_Vie()."pv \n";
                        }
                            
                        if($monstre->get_Vie()>0){
                            echo "Le monstre attaque !\n";
                            $monstre->attack($player);
                            if($player->get_Vie()<0){
                                $player->set_Vie(0);
                            }
                            echo "$pseudo a maintenant : ".$player->get_Vie()."pv\n";
                        }
                    }while($player->get_Vie()>0 && $monstre->get_Vie()>0);

                        if($player->get_Vie()<=0){
                            echo"\nGameOver\n\n";
                            break ;
                        }elseif($monstre->get_Vie()<= 0){
                            echo "$pseudo a tuer le monstre !\n";
                            if($pvMonstre>=20 && $pvMonstre<=60){
                                $score ++;
                                echo "Tu gagne +1 point\n";
                                
                            }elseif($pvMonstre>=61 && $pvMonstre<=100){
                                $score +=2;
                                echo "Tu gagne +2 points\n";
                                
                            }
                            
                        }
                    
                }
            }
        }else{
            echo "\nGameOver\n\n";
            break ;
        }
        

    } while ($direction != "quit");
    echo "$pseudo a un score de :".$score;
?>