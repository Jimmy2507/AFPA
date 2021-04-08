<?php
include "Contenu/head.php";
include "Contenu/header.php";
include "Contenu/listeEmploye.php";

    echo '<div class = "Titre">
            <h1>Detail de l\'employe '.$employe[$_GET["id"]]->getPrenom().'</h1></div>
    <div></div>
        <div class="Texte">
            <div></div>
                '."Nom: ".$employe[$_GET["id"]]->getNom()."<br>Prenom: ".$employe[$_GET["id"]]->getPrenom().
                "<br>Entreprise: ".$employe[$_GET["id"]]->getAgence()->getNom(). 
                "<br>Service: ".$employe[$_GET["id"]]->getService()."<br>Salaire: ".$employe[$_GET["id"]]->getSalaire()."K euro/an".
                "<br>Date d'embauche: ".$employe[$_GET["id"]]->getDateEmbauche().'
            <div></div>
        </div>
        <div></div>
    ';
