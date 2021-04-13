<div class="Colonne">
<h1>Bienvenue</h1>

<form action="?page=Traitement" method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="nom" maxlength='30' pattern='[a-zA-Z-]'>
    </div>
    <div>
        <label for="name">Prenom :</label>
        <input type="text" id="name" name="prenom" maxlength='30'>
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="user_mail" maxlength='30' pattern ='[a-z0-9._%+-]+@[a-z0-9.-]+\.com{2,3}$' size = '29'>
    </div>
    <div>
        <label for="msg">Commentaire :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
    <div>
    <button type="submit">Envoyer le message</button>
    </div>
</form>
</div>