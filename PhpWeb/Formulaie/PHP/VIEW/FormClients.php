<?php
switch ($_GET["mode"]) {
    case "Ajouter":
        echo '<form action="?page=ActionClients&mode=Ajouter" method="post">
     <div> 
        <label for="nomClient">Nom : </label>
        <input name="nomClient" value=""  />
    </div>
    <div> 
        <label for="prenomClient">Prenom : </label>
        <input name="prenomClient"  value=""   />
    </div>
    <div class="btn"> 
    <button type="submit">Ajouter</button>
    <button type="reset"><a href="../../index.php">Annuler</a></button>
    </div>
</form> ';
        break;
        case "Modifier":
            $idChoisi = $_GET['id']; // on recupere l'id choisi par l'utilisateur
$client = ClientsManager::findById($idChoisi); // on recupere le client correspondant

echo '
<form action="ModifierClient.php" method="post">
   <input type="text" name="idClient" value="'.$client->getIdClient().'" hidden/>
    <div> 
        <label for="nomClient">Nom : </label>
        <input name="nomClient" value="'.$client->getNomClient().'"  />
    </div>
    <div> 
        <label for="prenomClient">Prenom : </label>
        <input name="prenomClient"  value="'.$client->getPrenomClient().'"   />
    </div>
    <div class="btn"> 
    <button type="submit">Modifier</button>
    <button type="reset"><a href="../../index.php">Annuler</a></button>
    </div>
</form>';
            break;
    case "Supprimer":
        $idChoisi = $_GET['id']; // on recupere l'id choisi par l'utilisateur
$client = ClientsManager::findById($idChoisi); // on recupere le client correspondant

echo '
<form action="SupprimerClient.php" method="post">
   <input type="text" name="idClient" value="'.$client->getIdClient().'" hidden/>
    <div> 
        <label for="nomClient">Nom : </label>
        <input name="nomClient" value="'.$client->getNomClient().'" disabled/>
    </div>
    <div> 
        <label for="prenomClient">Prenom : </label>
        <input name="prenomClient"  value="'.$client->getPrenomClient().'"disabled/>
    </div>
    <div> 
        <label for="adresse">Adresse : </label>
        <input name="adresse"  value="'.$client->getAdresse().'" disabled />
    </div>
    <div> 
        <label for="ville">Ville : </label>
        <input name="ville"  value="'.$client->getVille().'" disabled />
    </div>
    <div class="btn"> 
    <button type="submit">Supprimer</button>
    <button type="reset"><a href="../../index.php">Annuler</a></button>
    </div>
</form>';
        break;
    default:
        
        break;;
}