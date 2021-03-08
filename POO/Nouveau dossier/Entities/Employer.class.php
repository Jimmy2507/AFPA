<?php
    class Employer{
       private $_nom;
       private $_prenom;
       private $_numSecu;
       private $_salaire;
       private $_job;

       public function __construct($nom,$prenom,$numSecu,$salaire,$job){
           $this->set_nom($nom);
           $this->set_prenom($prenom);
           $this->set_numSecu($numSecu);
           $this->set_salaire($salaire);
           $this->set_job($job);
       }
       
       public function set_Nom(String $nom){
        $this->_nom = $nom;
       }
       public function set_Prenom(String $prenom){
        $this->_prenom = $prenom;
       }

       public function set_NumSecu(String $numSecu){
        $this->_numSecu = $numSecu;
       }
        public function set_Salaire(float $salaire){
            $this->_salaire = $salaire;
        }

        public function set_Job(String $job){
            $this->_job= $job;
        }

        public function get_Nom(){
            return $this->_nom;
        }
        public function get_Prenom(){
            return $this->_prenom;
        }
        public function get_NumSecu(){
            return $this->_numSecu;
        }
        public function get_Salaire(){
            return $this->_salaire;
        }
        public function get_Job(){
            return $this->_job;
        }

        public function effectueSonJob(){
            echo "Nom : ".$this->get_Nom()." Prenom : ".$this->get_Prenom()." Num secu : ".$this->get_NumSecu()." Salaire : ".$this->get_Salaire()."€ Job : ".$this->get_job()."\n";
        }
    }
?>