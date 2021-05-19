<div class="Ligne">
<div></div>
    <a href="?page=FormGestionPlat&mode=ajouter"><button class="boutonAjout">Ajouter</button></a>
    <div></div>
    <a href="?page=default"><button class="boutonGererPlat">Gerer les menus</button></a>
    <div></div>
</div>
<div class="EspaceH"></div>
<div class="Ligne">
<div class=""></div>
    <div>Plats</div>
    <div>Nombre de calories</div>
    <div class="Espace4"></div>
</div>
<div class="EspaceH"></div>
<?php
$listePlat = PlatsManager::getList();
if (count($listePlat)>0){
    foreach ($listePlat as $p) {
        echo '<div class="Ligne">
                    <div class="PetitEspace"></div>
                        <div class="Encadre Ligne Nom">
                            <div class="nom">'.$p->getLibellePlat().'</div>
                            <div class="calorie">'.$p->getNbCalories().'</div>
                        </div>
                    <div class="PetitEspace"></div>
                    <div class="Ligne">
                        <a href=?page=FormGestionPlat&mode=detail&id='.$p->getIdPlat().'><button class="button">detail</button></a>
                        <div></div>
                        <a href=?page=FormGestionPlat&mode=modifier&id='.$p->getIdPlat().'><button class="button">modifier</button></a>
                        <div></div>
                        <a href=?page=FormGestionPlat&mode=supprimer&id='.$p->getIdPlat().'><button class="button">supprimer</button></a>
                        <div></div>
                    </div>
            </div>
            <div class="EspaceH"></div>';

    }
}else{
    echo "<h2>Il n'y a pas de Menu</h2>";
}