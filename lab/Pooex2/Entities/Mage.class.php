<?php
    class Mage extends Personnage{
        private $_pv;
        public function __construct($nom,$prenom,$pv){
            Parent::__construct($nom,$prenom);
            $this->_pv=$pv;
        }
        public function set_pv($pv){
            $this->_pv=$pv;
        }
        public function get_pv(){
            return $this->_pv;
        }
        public function parler(){
            echo 'Je suis un Mage je mappel : '.Parent::get_prenom()."et jai :".$this->_pv."de point de vie";
        }
        public function lanceSort(){
            echo "Je lance un sort";
        }
        public function dialogue(){
            echo "Test";
        }
    }
?>