<?php

	class Produits{

		/* ****************Attributs***************** */

		private $_idProduit;
		private $_libelleProduit;
		private $_prix;
		
		/* ****************Accesseurs***************** */
		
		public function setIdProduit($_idProduit){
			$this->_idProduit = $_idProduit;
		}

		public function getIdProduit(){
			return $this->_idProduit;
		}

		public function setLibelleProduit($_libelleProduit){
			$this->_libelleProduit = $_libelleProduit;
		}

		public function getLibelleProduit(){
			return $this->_libelleProduit;
		}

		public function setPrix($_prix){
			$this->_prix = $_prix;
		}

		public function getPrix(){
			return $this->_prix;
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
            return "";
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