<?php
$listeProduits = ProduitsManager::getList();
echo '<div class="liste colonne">';
echo '<a href="PHP/VIEW/FormProduits.php?mode=ajout"> <button>Ajouter</button></a>';
  
if (count($listeProduits)>0)
{
    foreach ($listeProduits as $pdt)
    {
        echo '<div> <div class = "client">' . $pdt->getLibelleProduit() . '</div>';
        echo '<div class="btn">
   <a href="PHP/VIEW/FormProduits.php?mode=detail&id=' . $pdt->getIdProduit() . '"> <button>Détail Formulaire</button></a>
    <div class="mini"></div>
    <a href="PHP/VIEW/FormProduits.php?mode=modif&id=' . $pdt->getIdProduit() . '"> <button>Modifier</button></a>
    <div class="mini"></div>
    <a href="PHP/VIEW/FormProduits.php?mode=supression&id=' . $pdt->getIdProduit() . '"> <button>Supprimer</button></a>
    </div></div>';
    }
}
else
{
    echo '<h1>Pas de Produits</h1>';
}

echo '</div>';
