<?php
$mode = $_GET['mode'];

switch ($mode) {
    case 'matieres':
        $bouton='<button class="Boutton"><a href="?page=formAjoutMatiere">Ajouter une matière</a></button>';
        $liste= MatiereManager::getList();
        break;

    case 'enseignants':
        $bouton='<button class="Boutton">Ajouter une enseignant</button>';
        $liste= UtilisateurManager::getList();
        break; 
        
    case 'eleves':
        $bouton='<button class="Boutton">Ajouter un éléve</button>';
        $liste= EleveManager::getList();
        break;
    case 'notes':
        $bouton='<select> </select>';
        $liste= SuiviManager::getList();
        break;
}


echo $bouton;
?>
<div class="Block ligne">
    <div class="Liste colonne">
        <div>Gestion de :</div>
        <ul>
            <li>L'éléve</li>
            <li>L'enseignants</li>
            <li>Notes</li>
            <li>Matieres</li>
        </ul>
    </div>
    <div>
    <?php 
    switch($mode){
        case 'matieres':
            foreach ($liste as $a) {
                echo $a->getLibelleMatiere();
            }
            break;
        case 'enseignants':
            foreach ($liste as $a) {
                echo $a->getIdMatiere().' '.$a->getLogin().' '.$a->getNomUtilisateur().' '.$a->getPrenomUtilisateur();
            }
            break;
        case 'eleves':

            break;

        case 'notes':

            break;
    }
    ?></div>
</div>
