<?php
$mode = $_GET['mode'];
if(isset($_GET['id'])){
    $plat= PlatsManager::findById($_GET['id']);
    $idPlat = $plat->getIdPlat();
}else{
    $plat= new Plats();
}
$listeMenu = MenusManager::getList();

switch($mode){
    case "ajouter":
        $sousTitre ='<h5>Ajouter un nouveau Plat</h5>';
        $dis ="";
        $submit = '<button>Ajouter</button>';
        break;
    case "modifier":
        $sousTitre = '<h5>Modifier un  utilisateur</h5>';
        $dis = "";
        $submit = '<button>Modifier</button>';
        break;
    case "supprimer":
        $sousTitre = '<h5>Supprimer un  utilisateur</h5>';
        $dis = "disabled";
        $submit = '<button>Supprimer</button>';
        break;
    case "detail":
        $sousTitre = '<h5>Détail du Plat</h5>';
        $dis = "disabled";
        break;
}

echo '<form method="post" action="?page=ActionPlat&mode=' . $mode . '" enctype="multipart/form-data">';
if ($mode != "ajouter") {
    echo '<input type="hidden" name="idPlat" value="' . $plat->getIdPlat() . '">';
}

echo '
    <div>
        <div class="Ligne">
            <div></div>
            <div>
            <input type="text" name="libellePlat" placeholder="Nom du plat" value="' . $plat->getLibellePlat() . '" ' . $dis . '>
            <input type="text" name="nbCalories" placeholder="Nombre de calories" value="'.$plat->getNbCalories().'" '.$dis.'>
            </div>
            <div></div>
        </div>';
    echo '<div class="Ligne">
    <div></div>
            <div><select name= "idMenu">';
            foreach ($listeMenu as $m) {
                if ($_GET["mode"]!="ajouter") {
                    $sel="";
                    if ($m->getIdMenu()==$plat->getIdMenu()){
                        $sel="selected";
                    }
                }
                echo '<option value ="'.$m->getIdMenu().'"'.$sel.$dis.'>'.$m->getlibelleMenu().'</option>';
            }
            echo '</select></div>
            <div></div>
            </div>';


if($mode != "detail"){
    echo '<div class="Ligne">
    <div></div>
    '.$submit.'
    <div class="EspaceMilieu"></div>';
}

// dans tous les cas, on met le bouton retour
?>
    <div class="Ligne">
    <?php 
    if($mode == "detail"){
        echo'<div></div>';
    }?>
    <a href="?page=ListePlat" class="Retour">Retour</a>
    <div></div>
    </div>
</div>
</form>
