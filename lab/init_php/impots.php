<?php
    $sexe = readline ("Quel est votre sexe ?");
    $age = readline ("Ecrire votre age : ");
    
        
        if($sexe =="homme" && $age>=20){
            echo "Imposable";  
        }elseif ($sexe =="femme" && $age >= 18 && $age <=35 ){
            echo "Imposable"; 
        }else{
            echo "Non imposable";    
        }
                
                    
            
            
        
    
?>