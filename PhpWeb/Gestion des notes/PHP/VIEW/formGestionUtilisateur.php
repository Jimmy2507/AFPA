<?php
$mode = $_GET['mode'];
if(isset($_GET['id'])){
    $utilisateur= UtilisateurManager::findById($_GET['id']);
    $idUtilisateur = $utilisateur->getIdUtilisateur();
}else{
    $utilisateur= new Utilisateur();
}
$listeMatiere = MatiereManager::getList();
switch($mode){
    case "ajouter":
        $sousTitre ='<h5>Ajouter un nouveau utilisateur</h5>';
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
}

echo $sousTitre;
echo '<form method="POST" action="?page=actionUtilisateur&mode=' . $mode . '" enctype="multipart/form-data">';
if ($mode != "ajouter") {
    echo '<input type="hidden" name="idUtilisateur" value="' . $utilisateur->getIdUtilisateur() . '">';
}
echo '
    <input type="text" name="pseudoUtilisateur" placeholder="Pseudo" value="' . $utilisateur->getLogin() . '" ' . $dis . '>
    <input type="password" name="motDePasse" placeholder="Mot de passe" value="'.$utilisateur->getMotDePasse().'" '.$dis.'>
    <input type ="text" name="nomUtilisateur" placeholder="Adresse mail" value="'.$utilisateur->getNomUtilisateur().'" '.$dis.'>
    <input type ="text" name="prenomUtilisateur" placeholder="Nom" value="'.$utilisateur->getPrenomUtilisateur().'" '.$dis.'>
    <input type ="text" name="role" placeholder="Prenom" value="'.$utilisateur->getRole().'" '.$dis.'>
    <input type ="text" name="idMatiere" placeholder="Adresse" value="'.$utilisateur->getIdMatiere().'" '.$dis.'>

    ';
    echo '<select name= "idMatiere">';
    foreach ($listeMatiere as $c) {
        if ($_GET["mode"]!="ajouter") {
            $sel="";
            if ($c->getIdMatiere()==$utilisateur->getIdMatiere()){
                $sel="selected";
            }
        }
        echo '<option value ="'.$c->getIdMatiere().'"'.$sel.$dis.'>'.$c->getLibelleMatiere().'</option>';
    }
    echo '</select>';
    echo $submit;
?>
<a href="?page=listeEnseignant" class="Retour">Annuler</a>
    
</form>

