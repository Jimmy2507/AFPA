<?php
include 'Head.php';
include 'Header.php';
$mode = $_GET["mode"];
if ($mode != "ajout")
{
    $idChoisi = $_GET['id']; // on recupere l'id choisi par l'utilisateur
    $produit = ProduitsManager::findById($idChoisi); // on recupere le produit correspondant
}
?>
<form action="ActionProduits.php?mode=<?=$mode?>" method="post">

   <?php if ($mode!="ajout") echo '<input type="text" name="idProduit" value="'. $produit->getIdProduit().'"  hidden/> ';?>
    <div>
        <label for="libelleProduit">Libelle Produit : </label>
        <input name="libelleProduit" value="<?php if ($mode!="ajout") echo $produit->getLibelleProduit() ?>"  
                        <?php if($mode == "detail" || $mode == "supression") echo "disabled"?>/>
    </div>
    <div>
        <label for="prix">Prix : </label>
        <input name="prix"  value="<?php if ($mode!="ajout") echo $produit->getPrix() ?>"  
                        <?php if($mode == "detail" || $mode == "supression") echo "disabled"?> />
    </div>
    <div class="btn">
    <?php
    switch ($mode)
    {
        case "ajout": echo' <button type="submit">Ajouter</button>'; break;
        case "modif": echo' <button type="submit">Modifier</button>'; break;
        case "supression": echo' <button type="submit">Supprimer</button>'; break;
    
    }
    echo '
    <button type="reset"><a href="../../index.php">Annuler</a></button>
    </div>
</form>';

