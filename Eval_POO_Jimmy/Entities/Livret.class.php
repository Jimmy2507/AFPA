<?php
 class Livret extends Compte{
    public function appliqueInteret(){
        parent::set_montant(parent::get_montant()*1.05); //Ajoute *1.05 de la somme presente dans le livret
    }

 }
?>