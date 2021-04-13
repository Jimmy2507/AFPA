<?php
$listeClients = ClientsManager::getList();
echo '<div class="liste colonne">';
echo '<a href="PHP/VIEW/FormClients.php?mode=Ajouter"> <button>Ajouter</button></a>';
  
if (count($listeClients)>0)
{
    foreach ($listeClients as $unClient)
    {
        echo '<div> <div class = "client">' . $unClient->getNomClient() . ' ' . $unClient->getPrenomClient() . '</div>';
        echo '<div class="btn">
    <a href="PHP/VIEW/Detail.php?id=' . $unClient->getIdClient() . '"> <button>Détail</button></a>
    <div class="mini"></div>
    <a href="PHP/VIEW/FormDetail.php?id=' . $unClient->getIdClient() . '&mode=detail"> <button>Détail Formulaire</button></a>
    <div class="mini"></div>
    <a href="PHP/VIEW/FormModifier.php?id=' . $unClient->getIdClient() . '&mode=detail"> <button>Modifier</button></a>
    <div class="mini"></div>
    <a href="PHP/VIEW/FormSuppression.php?id=' . $unClient->getIdClient() . '&mode=detail"> <button>Supprimer</button></a>
    </div></div>';
    }
}
else
{
    echo '<h1>Pas de Clients</h1>';
}

echo '</div>';
