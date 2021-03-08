<?php

    require("./colorVoiture.php");
    $colorUser= readline('Ecrire la couleur de votre voiture : ');
    $couleur= new ColorVoiture();
    $couleur -> couleurdelavoiture($colorUser);

?>