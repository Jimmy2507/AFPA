<div class="Espace"></div>
    <div class="Block Ligne">
        <div class="BlockGauche "></div>
        <div class="Blocktexte Colonne">
            <div class="entete Ligne">
                <div class="Editer Colonne">Profiles : </div>
                <a href="?page=FormUser&mode=ajouter"> <button class="BoutonPlus">+</button> </a>
            </div>   


<?php
$listeUser = UserManager::getList();

if (count($listeUser)>0) {
    foreach ($listeUser as $u ) {
      echo '
            <div class="username">User Name:'.$u->getUsername().'</div>
            <div class="Utilisateur">
            <a href="?page=FormUser&mode=detail&id='.$u->getIdUser().'"><button class="btn">Detail</button></a>
            <a href="?page=FormUser&mode=modifier&id='.$u->getIdUser().'"><button class="btn">Modifier</button></a>
            <a href="?page=FormUser&mode=supprimer&id='.$u->getIdUser().'"><button class="btn">Supprimer</button></a>  
            </div> 
    ';   
    }       echo'<div class="EspaceH"></div> 
    </div> 
        <div class="BlockGauche "></div> 
    </div>';

}else{
    echo '<h1>Pas D\'utilisateur !</h1>
    </div>';

}   
?>