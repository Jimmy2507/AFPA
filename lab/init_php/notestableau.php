<?php
  $tab = array("Franck"=>14,"Kesary"=>16,"Jimmy"=>15);
  foreach ($tab as $key => $value) {
      echo $key." ".$value." "."\n";

  } 
  
  $tab["Houssam"] =13;
  foreach ($tab as $key => $value) {
    echo $key." ".$value." "."\n";
} 
   unset($tab["Franck"]);
   echo "Notes la plus grande : ".max($tab)."\n ";
   echo "Notes la plus petite : ". min($tab)."\n";

   ksort($tab);

  echo "Trié ordre alphabetique"."\n";

   foreach ($tab as $key => $value) {
     echo $key." ".$value." "."\n";
   }
   echo "Trie notes :"."\n";
   arsort($tab);
   foreach ($tab as $key => $value) {
     echo $key." ".$value." "."\n";
   }

  $moy = array_sum($tab)/ count($tab);
  echo "La moyenne est de : ".$moy;
  
?>