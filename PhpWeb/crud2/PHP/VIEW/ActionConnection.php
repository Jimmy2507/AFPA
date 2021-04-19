<?php
$uti = UserManager::findByPseudo($_POST['username']);
if ($uti != false)
{
    if (crypte($_POST['password']) == $uti->getPassword())
    {
        echo 'connection reussie';
        $_SESSION['utilisateur']=$uti;
        header("refresh:3;url=index.php?page=accueil");
    }
    else
    {
        echo 'le mot de passe est incorrect';
        header("refresh:3;url=index.php?page=connection");
    }
}
else
{
    echo "le pseudo n'existe pas";
    header("refresh:3;url=index.php?page=connection");
}