<div class="ligne">
    <div class="EspaceV1"></div>
<a href="?page=formGestionUtilisateur&mode=ajouter">Ajouter</a>
<div class="EspaceV1"></div>
</div>
<?php
$listeUtilisateur = UtilisateurManager::getList();
if (count($listeUtilisateur)>0){
    foreach ($listeUtilisateur as $p) {
        echo '<div class="ligne">
            <div class="EspaceV1"></div>
            <div class= "Block colonne">
                <div class="nom">Pseudo:'.$p->getlogin().'</div>
                <div class="Produit">
                    <a href=?page=formGestionUtilisateur&mode=modifier&id='.$p->getIdUtilisateur().'>modifier</a>
                    <a href=?page=formGestionUtilisateur&mode=supprimer&id='.$p->getIdUtilisateur().'>supprimer</a>
                </div>
                </div>
            <div class="EspaceV1"></div>
        </div>';

    }
}else{
    echo "<h2>Il n'y a pas d'utilisateur</h2>";
}
?>
    <div class="ligne">
        <div class="EspaceV1"></div>
        <a href="?page=listeGestionAdmin">Retour</a>
        <div class="EspaceV1"></div>
    </div>