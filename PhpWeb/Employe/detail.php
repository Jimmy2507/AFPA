<?php
include "Contenu/head.php";
include "Contenu/header.php";
include "Contenu/listeEmploye.php";
try { // execute les instructions et rpère les erreurs
    $db = new PDO('mysql:host=localhost;dbname=employe;charset=utf8', 'root', '');
}
catch (Exception $e) // si une erreur est levée, on agit en conséquence
{
    if ($e->getCode() == 1049)
    {
        echo "Base de données indisponible";
        die(); // permet d'arrêter l'execution
    }
    else if ($e->getCode() == 1045) // erreur identification
    {
        echo "La connexion a échouée";
        die();
    }
    else
    {
        die('Erreur : ' . $e->getMessage());
    }
}
    $requete = $db->query("SELECT nomemploye, prenomEmploye, ageEmploye FROM employes "); // $requete est un objet de type PDO_Statement
    $reponse = $requete->fetch(PDO::FETCH_ASSOC);
    var_dump($reponse);
    $emp = new Employe($reponse);
    
echo "on est connecté à la base de données";
    echo '<div class = "Titre">
            <h1>Detail de l\'employe '.$employe[$_GET["id"]]->getPrenom().'</h1></div>
    <div></div>
        <div class="Texte">
            <div></div>
                '.
                var_dump($pers)
                .'
            <div></div>
        </div>
        <div></div>
    ';
