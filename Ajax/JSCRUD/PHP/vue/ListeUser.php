<div class="Espace"></div>
    <div class="Block Ligne">
        <div></div>
        <div class="Blocktexte Colonne">
            <div class="entete Ligne">
                <div class="Editer Colonne">Profiles : </div>
                <a href="?page=FormUser&mode=ajouter"> <button class="BoutonPlus">+</button> </a>
            </div>
<?php
$listeUser = UserManager::getList(false);
$listeRole = RolesManager::getList(false); 
echo'<select id="Role">
<option value ="default" >--Choisir Role--</option>';
foreach($listeRole as $role){
    echo'
        <option value="' . $role->getIdRole() . '" ' . $sel .$dis. ' >' . $role->getNomRole() . '</option>
    ';
}

echo'</select>';
echo '<div id="Contenu">

    </div>';
echo'<div class="EspaceH"></div> 
    </div> 
        <div></div> 
    </div>
    <div class="compter"></div>';

?>