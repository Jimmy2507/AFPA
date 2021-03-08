<?php
//*****************************FONCTION VOYELLES*****************************//
    function voyelles($mots){                               
        $mots = str_split($mots,1);
        $nbVoyelles = 0;
        $voyelle = array ("a","e","i","o","u","y");

        foreach ($mots as $letter){
        if(in_array($letter, $voyelle))
            $nbVoyelles++;
        }
        return $nbVoyelles;   
    }         
//*****************************FONCTION PURGE********************************//                                  

    function purge($mots,$lettre){
        
        $mots = str_split($mots,1);
        
        
        for ($i=0; $i < count($mots) ; $i++) {
             
            for ($j=0; $j < count($lettre); $j++) { 

                if ($mots[$i]==$lettre[$j]) {
                    $mots[$i]="";
                }
            }   
        }
        return implode($mots);
    }
 //****************************FONCTION INVERSE*******************************//
 
    function inverse($mot){
        if(strlen($mot)==1){

            return $mot;

        }else{

            return inverse(substr($mot,1,(strlen($mot)-1))).substr($mot,0,1);

        }

    }
?>