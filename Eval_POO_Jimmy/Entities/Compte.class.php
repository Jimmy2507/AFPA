<?php
 class Compte{
     private $_numero;
     private $_montant;

     public function __construct($numero,$montant){
         $this->_numero=$numero;
         $this->_montant=$montant;
     }
     public function set_numero($numero){
        $this->_numero=$numero;
     }

     public function set_montant($montant){
        $this->_montant=$montant;
     }
     public function get_numero(){
        return $this->_numero;
     }

     public function get_montant(){
        return $this->_montant;
     }

     public function debiter($montant){  //methode debiter
      $this->set_montant($this->get_montant()-$montant); //soustrait le montant mis en argument au compte
     }

     public function crediter($montant){     //methode crediter
         $this->set_montant($this->get_montant()+$montant);  //Ajoute le montant mis en argument au compte
     }

 }
?>