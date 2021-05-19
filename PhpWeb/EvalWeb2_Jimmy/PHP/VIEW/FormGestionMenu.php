<?php
$mode = $_GET['mode'];
if(isset($_GET['id'])){
    $menu= menusManager::findById($_GET['id']);
    $idMenu = $menu->getIdMenu();
}else{
    $menu= new Menus();
}
$listeMenu = MenusManager::getList();

switch($mode){
    case "ajouter":
        $sousTitre ='<h5>Ajouter un nouveau menu</h5>';
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
        $sousTitre = '<h5>Détail du menu</h5>';
        $dis = "disabled";
        break;
}

echo '<form method="post" action="?page=ActionMenu&mode=' . $mode . '" enctype="multipart/form-data">';
if ($mode != "ajouter") {
    echo '<input type="hidden" name="idMenu" value="' . $menu->getIdMenu() . '">';
}

echo '
    <div>
        <div class="Ligne">
            <div></div>
            <input type="text" name="libelleMenu" placeholder="Libelle" value="' . $menu->getLibelleMenu() . '" ' . $dis . '>
            <div></div>
        </div>';

if($mode != "detail"){
    echo '<div class="Ligne">
            <div></div>
            '.$submit.'
            ';
}

// dans tous les cas, on met le bouton retour
?>
<div class="EspaceMilieu"></div>
    <div class="Ligne">
    <?php if($mode == "detail"){
        echo'<div></div>';
        }?>
        <a href="?page=default" class="Retour">Retour</a>
    <div></div>
    </div>
</div>
</form>




