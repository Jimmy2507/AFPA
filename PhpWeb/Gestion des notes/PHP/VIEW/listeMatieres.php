<div class="ligne">
<div class="EspaceV1"></div>
<a href="?page=formGestionMatiere&mode=ajouter">Ajouter</a>
<div class="EspaceV1"></div>
</div>
<?php
$listeMatiere = MatiereManager::getList();
if (count($listeMatiere)>0){
    foreach ($listeMatiere as $p) {
        echo '<div class="ligne">
        <div class="EspaceV1"></div>
            <div class= "Block colonne">
        
        <div class="nom">Libelle :'.$p->getLibelleMatiere().'</div>
            <div class="Produit">
                <a href=?page=formGestionMatiere&mode=modifier&id='.$p->getIdMatiere().'>modifier</a>
                <a href=?page=formGestionMatiere&mode=supprimer&id='.$p->getIdMatiere().'>supprimer</a>
            </div>
            </div>
                        <div class="EspaceV1"></div>
                    </div>';

    }
}else{
    echo "<h2>Il n'y a pas de matiere'</h2>";
}
?>
 <div class="ligne">
        <div class="EspaceV1"></div>
        <a href="?page=listeGestionAdmin">Retour</a>
        <div class="EspaceV1"></div>
    </div>