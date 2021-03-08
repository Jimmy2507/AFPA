<?php
 $tab1 = array(1,6,9,2,4,1,7);
 $tab2 = array(12,60,45,30,75);
 $tab3 = array_merge ($tab1 , $tab2);
 asort($tab3);
 foreach ($tab3 as $key ) {
     echo $key." ";
 }
?>