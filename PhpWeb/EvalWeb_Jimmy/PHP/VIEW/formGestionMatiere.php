<?php
$mode = $_GET['mode'];
if(isset($_GET['id'])){
    $matiere= MatiereManager::findById($_GET['id']);
    $idProduit = $matiere->getIdMatiere();
}else{
    $matiere= new Matiere();
}

switch($mode){
    case "ajouter":
        $sousTitre ='<h5>Ajouter une nouvelle matiere</h5>';
        $dis ="";
        $submit = '<button class="Boutton">Ajouter</button>';
        break;
    case "modifier":
        $sousTitre = '<h5>Modifier une matiere</h5>';
        $dis = "";
        $submit = '<button class="Boutton">Modifier</button>';
        break;
    case "supprimer":
        $sousTitre = '<h5>Supprimer une matiere</h5>';
        $dis = "disabled";
        $submit = '<button class="Boutton">Supprimer</button>';
        break;
}

echo $sousTitre;
echo '<form method="post" action="?page=actionAjoutMatiere&mode=' . $mode . '" enctype="multipart/form-data">';
if ($mode != "ajouter") {
    echo '<input type="hidden" name="idMatiere" value="' . $matiere->getIdMatiere() . '">';
}

echo '
    <input type="text" name="libelleMatiere" placeholder="Libelle" value="' . $matiere->getLibelleMatiere() . '"'.$dis.'>';
    echo $submit;

// dans tous les cas, on met le bouton annuler
?>
    <a href="?page=listeMatieres" class="Retour">Annuler</a>
</div>
    </div> 
    </div>

</form>

