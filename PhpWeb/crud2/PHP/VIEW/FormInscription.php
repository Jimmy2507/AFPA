
<div class="Espace"></div>
    <div class="Block Ligne">
        <div class="BlockGauche "></div>
        <div class="Blocktexte Colonne">
            <div class="entete Ligne">
                <div class="Editer Colonne">S'inscrire : </div>
            </div> <div id="DivSousTitre">
        </div>
<?php
$listeRole=RolesManager::getList();
?>

<form action="index.php?codePage=actionInscription" method="POST">
    <div>
        <label for="username">UserName</label>
        <input type="text" name="username" required />
    </div>
    <div class="espaceHor"></div>
    <div>
        <label for="password">mot De Passe</label>
        <input type="password" name="password" required />
    </div>
    <div class="espaceHor"></div>
    <div>
        <label for="confirmation">Confirmation du mot de passe</label>
        <input type="password" name="confirmation" required />
    </div>
    <div class="espaceHor"></div>
    <div>
        <label for="role">Role (1 admin 2 user)</label>
        <input type="text" name="role" required />
    </div>
    <div class="espaceHor"></div>
    <div>
    <div class="espaceHor"></div>
    <div><button type="submit">Valider</button></div>
    
</form>

</div>
<div class="EspaceH"></div>

    <a href="?page=ListeUser" class=" crudBtn crudBtnRetour">Retour</a>

</div>
    
        </div>
        <div class="BlockGauche "></div>
    </div>
</form>
