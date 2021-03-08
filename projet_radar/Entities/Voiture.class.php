<?php
    class Voiture {
        private $_marque;
        private $_model;
        private $_immatriculation;
        private $_couleur;
        private $_vitesse;

        public function __construct($marque,$model,$immatriculation,$couleur){
            $this->set_marque($marque);
            $this->set_model($model);
            $this->set_immatriculation($immatriculation);
            $this->set_couleur($couleur);
            $this->_vitesse=0;
        }
        public function toString(){
            echo"Marque : $this->_marque \n Modéle : $this->_model \n Immatriculation : $this->_immatriculation \n Couleur : $this->_couleur";
        }

    public function set_marque(String $marque){
        $this ->_marque = $marque;
    }
    public function get_marque(){
       return $this ->_marque;
    }

    public function set_model(String $model){
        $this ->_model = $model;
    }
    public function get_model(){
       return $this ->_model;
    }

    public function set_couleur(String $couleur){
        $this ->_couleur=$couleur;
    }
    public function get_couleur(){
       return $this ->_couleur;
    }

    public function set_immatriculation($immatriculation){
        $this->_immatriculation=$immatriculation;
    }
    public function get_immatriculation(){
       return $this->_immatriculation;
    }
    public function set_vitesse(int $vitesse){
        $this->_vitesse=$vitesse;
    }
    public function get_vitesse(){
        return $this->_vitesse;
    }
    public function accelerer($vitesseRdm,$i){
        $this->_vitesse += $vitesseRdm;
        echo "La voiture $i avance a : ".$this->_vitesse."km/h \n";
    }
    
   

    
   
    

    }
?>