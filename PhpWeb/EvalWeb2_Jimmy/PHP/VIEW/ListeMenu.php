<div class="Ligne">
    <div></div>
    <a href="?page=FormGestionMenu&mode=ajouter"><button class="boutonAjout">Ajouter</button></a>
    <div></div>
    <a href="?page=ListePlat"><button class="boutonGererPlat">Gerer les plats</button></a>
    <div></div>
</div>
<div class="EspaceH"></div>
<?php
$listeMenu = MenusManager::getList();
if (count($listeMenu)>0){
    foreach ($listeMenu as $m) {
        echo '<div class="Ligne">
                    <div class="PetitEspace"></div>
                    <div class="Nom Encadre">'.$m->getLibelleMenu().'</div>
                    <div class="PetitEspace"></div>
                    <div class="Ligne">
                        <a href=?page=FormGestionMenu&mode=detail&id='.$m->getIdMenu().'><button class="button">detail</button></a>
                        <div></div>
                        <a href=?page=FormGestionMenu&mode=modifier&id='.$m->getIdMenu().'><button class="button">modifier</button></a>
                        <div></div>
                        <a href=?page=FormGestionMenu&mode=supprimer&id='.$m->getIdMenu().'><button class="button">supprimer</button></a>
                        <div></div>
                    </div>
            </div>
            <div class="EspaceH"></div>';

    }
}else{
    echo "<h2>Il n'y a pas de Menu</h2>";
}