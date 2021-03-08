<?php
    class Client{
        private $_nom;
        private $_prenom;
        private $_compte;
        private $_livret;
        //Constructeur
        public function __construct($nom,$prenom,$numero,$montant){
            $this->_nom = $nom;
            $this->_prenom = $prenom;
            $this->_compte = new Compte($numero,$montant);
            $this->_livret = new livret("45789L",1200);
        }
        //setter et getter
        public function set_nom($nom){
            $this->_nom = $nom;
        }
        public function set_prenom($prenom){
            $this->_prenom = $prenom;
        }
        public function get_nom(){
            return $this->_nom;
        }
        public function get_prenom(){
            return $this->_prenom;
        }
        public function set_compte($numero,$montant){ //set lobjet compte
            $this->_compte= new Compte($numero,$montant);
        }
        public function get_compte(){
            return $this->_compte;
        }
        public function set_livret(){   //set lobjet livret
            $this->_livret= new Livret("45789L",1200);
        }
        public function get_livret(){
            return $this->_livret;
        }

        public function recevoir($montant){     //Methode recevoir qui credite une somme en argument sur le compte
            $this->get_compte()->crediter($montant);
        }

        public function depenser($montant){         //Methode depenser qui deduis une somme en argument sur le compte
            $this->get_compte()->debiter($montant);
        }
        public function epargner($montant){         //methode epargner
            $this->get_livret()->crediter($montant);    //prend la somme mise en argument et ladditionne a la somme deja presente sur le livret
            $this->get_compte()->debiter($montant);     //deduis la somme mise en argument du compte
        }
        public function affiche(){
            echo "  Le client ".$this->get_nom()." ".$this->get_prenom()." a ".$this->get_compte()->get_montant()."€ sur son compte ".$this->get_compte()->get_numero()." et ".$this->get_livret()->get_montant()."€ sur son livret ".$this->get_livret()->get_numero()."\n";
        }
    }
?>