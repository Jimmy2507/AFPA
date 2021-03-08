<?php
$tab = array(1,2,3,4,5,6,7,8,9);
    foreach ($tab as $key ) {
        echo $key." ";
    }
for ($i=0; $i <=count($tab)%2; $i++) { 
    $temp = $tab[$i];
    $tab[$i]= $tab[count($tab)-1-$i];
    $tab[count($tab)-1-$i]=$temp;
}
echo "\n";
foreach ($tab as $key ) {
    echo $key." ";
}
?>