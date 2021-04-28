<div class="ligne">
    <div class="EspaceV1"></div>
    <a href="?page=formGestionEleve&mode=ajouter">Ajouter</a>
    <div class="EspaceV1"></div>
</div>

    <?php
    $listeEleve = EleveManager::getList();
    if (count($listeEleve)>0){
        foreach ($listeEleve as $p) {
            echo '<div class="ligne">
                    <div class="EspaceV1"></div>
                        <div class= "Block colonne">
                            <div class="nom">nom :'.$p->getNomEleve().'</div>
                            <div class="nom">prenom :'.$p->getPrenomEleve().'</div>
                            <div class="nom">classe :'.$p->getClasse().'</div>
                            <div class="Produit">
                                <a href=?page=formGestionEleve&mode=modifier&id='.$p->getIdEleve().'>modifier</a>
                                <a href=?page=formGestionEleve&mode=supprimer&id='.$p->getIdEleve().'>supprimer</a>
                            </div>
                        </div>
                        <div class="EspaceV1"></div>
                    </div>';

        }
    }else{
        echo "<h2>Il n'y a pas d'Eleve'</h2>";
    }
    ?>
    <div class="ligne">
        <div class="EspaceV1"></div>
        <a href="?page=listeGestionAdmin">Retour</a>
        <div class="EspaceV1"></div>
    </div>
