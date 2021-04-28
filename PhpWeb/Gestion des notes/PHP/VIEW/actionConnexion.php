<?php
//var_dump($_POST);
$uti = UtilisateurManager::findByPseudo($_POST['login']);
if ($uti != false)
{
        if (crypter($_POST['motDePasse']) == $uti->getMotDePasse())
        {
            $_SESSION['utilisateur']=$uti;
                if($_SESSION['utilisateur']->getRole()=="admin"){
                    header("location:?page=listeGestionAdmin");
                }else{
                    header("location:?page=default");  
                }
            
        }
        else
        {
            echo 'le mot de passe est incorrect';
            header("refresh:1;url=?page=formConnexion");
        }
}else
{
    echo "Le pseudo n'existe pas";
    header("refresh:1;url=?page=formConnexion");
}