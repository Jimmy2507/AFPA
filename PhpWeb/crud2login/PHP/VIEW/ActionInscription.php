<?php

// var_dump($_POST);
if ($_POST['password'] == $_POST['confirmation'])
{
    // recherche si le pseudo existe
    $uti = UserManager::findByPseudo($_POST['username']);
    if ($uti == false)
    {
        $u = new User($_POST);
        //encodage du mot de passe
        $u->setPassword(crypte($u->getPassword()));
        UserManager::add($u);
    }else{
        echo "le pseudo existe deja";
    }
}else{
    echo "la confirmation ne correspond pas au mot de passe";
}