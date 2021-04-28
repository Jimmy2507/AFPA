<body>
<header class="colonne">
    <div class="Entete">
        <div class="Logo"></div>
        <div class="EspaceV1"></div>
        <div class="Titre colonne">
            <h1>GESTION DES NOTES</h1>
            <h3>connection</h3>
        </div>
        <div class="EspaceV1"></div>
        <?php
            if(isset($_SESSION["utilisateur"])){
                echo'<button class="Boutton"><a href="?page=actionDeconnexion">DECONNECTEZ-VOUS</a></button>';
            }else{
                echo'<button class="Boutton"><a href="?page=formConnexion">CONNECTEZ-VOUS</a></button>';
            }
        ?>
        
    </div>
        
</header>
<div class="Trait"></div>