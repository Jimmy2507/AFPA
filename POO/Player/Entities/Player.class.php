<?php
 class Player extends Character{
     public $_pseudo;
     public $_score;

     public function __construct($pseudo,$score){
         Parent::__construct(100,20);
         $this->_pseudo=$pseudo;
         $this->_score=$score;
        
     }
     
     public function setPseudo($pseudo){
         $this->_pseudo=$pseudo;
     }

     public function setScore($score){
         $this->_score=0;
     }
     public function get_Score(){
        return $this->_score;
    }
     
     

     public function moove(){
        $direction = readline("Dans quel direction voulez vous allez ?");
        
         switch (strtolower($direction)) {
             
             case 'nord':
                 echo "Le personnage va au nord.\n";
                 return 1;
                 break;
            case "ouest":
                echo"Le personnage va a louest.\n";
                return 1;
                break;
            case "est":
                echo"Le personnage va a l'est.\n";
                return 1;
                break;
            case "sud":
                echo"Le personnage va au sud.\n";
                return 1;
                break;
            case "quit":
                echo" vous avez quittez\n";
                return "quit";
                break;
             default:
                 echo "Erreur\n";
                 return 2;
                break;
         }
     }
 }
?>