<?php
require("iMobile.class.php");
     class Personnage implements iMobile{
        private $_nom;
        private $_prenom;
        public function __construct($nom,$prenom){
            $this->_nom=$nom;
            $this->_prenom=$prenom;
        }
        public function set_nom($nom){
            $this->_nom=$nom;
        }
        public function set_prenom($prenom){
            $this->_prenom=$prenom;
        }
        public function get_prenom(){
           return $this->_prenom;
        }

        

       final public function test1(){
            echo "Je suis un personnage";
        }
         public function Mobile(){
             echo"Le personnage avance";
         }

    }
?>