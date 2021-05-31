<?php
$liste = InfoManager::getList(false);
?>
<div class="Colonne">
    <div class="EspaceH"></div>
    <div class="Ligne">
        <div></div>
        <div class="Ligne">
            <div>
                <select id="Formateur">
                    <option value="default">***Choisir un formateur***</option>
                     <?php 
                        // foreach ($liste as $elt) {
                        //     echo'<option value ="'.$elt->getIdFormateur().'>'.$elt->getNomFormateur().'</option>';
                        // }
                    ?>
                </select>
            </div>
            <div></div>
            <div>
                <select id="Stagiaire">
                    <option value="default">***Choisir un stagiaire***</option>
                </select>
            </div>
        </div>
        <div></div>
    </div>
    <div class="EspaceH"></div>  
    <div class="Ligne">
        <div></div>
        <div class="Ligne">
            <div>
                <select id="Offre">
                    <option value="default">***Choisir l'offre***</option>
                </select>
            </div>
            <div></div>
            <div>
                <select id="Annee">
                    <option value="default">***Choisir l'année***</option>
                </select>
            </div>
        </div>
        <div></div>
    </div>
</div>

