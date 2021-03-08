<?php
    class Cadre extends Employer{
        private $_listeEmploye;
        public function __construct($liste){
            Parent::__construct("Alain","Deloin","1840259453666",2100.23,"chef maintenance");
            $this->set_listeEmploye($liste);
        }  
        public function set_listeEmploye($liste){
            $this->_listeEmploye= $liste;
        }
        public function get_listeEmployer(){
            return $this->_listeEmploye;
        }
        public function afficher(){
            foreach ($this->get_listeEmployer() as $key ) {
                echo $key;
            }
        }
    }
?>