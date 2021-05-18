<?php
$mode = $_GET['mode'];
if(isset($_GET['id'])){
    $eleve= EleveManager::findById($_GET['id']);
    $idEleve = $eleve->getIdEleve();
}else{
    $eleve= new Eleve();
}

switch($mode){
    case "ajouter":
        $sousTitre ='<h5>Ajouter un nouveaux eleve</h5>';
        $dis ="";
        $submit = '<button class="Boutton">Ajouter</button>';
        break;
    case "modifier":
        $sousTitre = '<h5>Modifier un  Eleve</h5>';
        $dis = "";
        $submit = '<button class="Boutton">Modifier</button>';
        break;
    case "supprimer":
        $sousTitre = '<h5>Supprimer un  Eleve</h5>';
        $dis = "disabled";
        $submit = '<button class="Boutton">Supprimer</button>';
        break;
}

echo $sousTitre;
echo '<form method="post" action="?page=actionEleve&mode='. $mode .'>';
if ($mode != "ajouter") {
    echo '<input type="hidden" name="idEleve" value="'.$eleve->getIdEleve().'">';
}
echo '<div class="ligne">
        <input type="text" name="nomEleve" placeholder="Nom" value="' . $eleve->getNomEleve() . '"'.$dis.'>
        <input type="text" name="prenomEleve" placeholder="Prenom" value="' . $eleve->getPrenomEleve() . '"'.$dis.'>
        <input type="text" name="classe" placeholder="Classe" value="' . $eleve->getClasse() . '"'.$dis.'>
    </div>';
    echo $submit;
?>
    <a href="?page=listeEleve" class="Retour">Annuler</a>
</form>

