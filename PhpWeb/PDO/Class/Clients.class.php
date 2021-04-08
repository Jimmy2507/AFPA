<?php

	class Clients{

		/* ****************Attributs***************** */

		private $_idClient;
		private $_nomClient;
		private $_prenomClient;
		
		/* ****************Accesseurs***************** */
		
		public function setIdClient($_idClient){
			$this->_idClient = $_idClient;
		}

		public function getIdClient(){
			return $this->_idClient;
		}

		public function setNomClient($_nomClient){
			$this->_nomClient = $_nomClient;
		}

		public function getNomClient(){
			return $this->_nomClient;
		}

		public function setPrenomClient($_prenomClient){
			$this->_prenomClient = $_prenomClient;
		}

		public function getPrenomClient(){
			return $this->_prenomClient;
		}

		/* ****************Constructeur***************** */

		public function __construct(array $options = []){
        if (!empty($options)){ // empty : renvoi vrai si le tableau est vide
            $this->hydrate($options);
        }
        }

        public function hydrate($data){
            foreach ($data as $key => $value){
                $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
                if (is_callable(([$this, $methode]))){ // is_callable verifie que la methode existe
                    $this->$methode($value);
                }
            }
        }
        
        /* ****************Autres Méthodes***************** */
        
        /**
         * Transforme l'objet en chaine de caractères
         *
         * @return String
         */
        public function toString(){
            return "id : ".$this->_idClient."<br>Nom: ".$this->_nomClient."<br>Prenom: ".$this->_prenomClient;
        }

        /**
         * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
         *
         * @param [type] $obj
         * @return bool
         */
        public function equalsTo($obj){
            return true;
        }

        /**
         * Compare 2 objets
         * Renvoi 1 si le 1er est >
         *        0 si ils sont égaux
         *        -1 si le 1er est <
         *
         * @param [type] $obj1
         * @param [type] $obj2
         * @return void
         */

        public static function compareTo($obj1, $obj2){
            return 0;
        }
        
	}

?>