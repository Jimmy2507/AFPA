<?php

	class Texte{

		/* ****************Attributs***************** */

		private $_idTexte;
		private $_codeTexte;
		private $_codeLangue;
		private $_Texte;
		
		/* ****************Accesseurs***************** */
		
		public function setIdTexte($_idTexte){
			$this->_idTexte = $_idTexte;
		}

		public function getIdTexte(){
			return $this->_idTexte;
		}

		public function setCodeTexte($_codeTexte){
			$this->_codeTexte = $_codeTexte;
		}

		public function getCodeTexte(){
			return $this->_codeTexte;
		}

		public function setCodeLangue($_codeLangue){
			$this->_codeLangue = $_codeLangue;
		}

		public function getCodeLangue(){
			return $this->_codeLangue;
		}

		public function setTexte($_Texte){
			$this->_Texte = $_Texte;
		}

		public function getTexte(){
			return $this->_Texte;
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
            return "IdTexte : ".$this->getIdTexte()."CodeTexte : ".$this->getCodeTexte()."CodeLangue : ".$this->getCodeLangue()."Texte : ".$this->getTexte()."\n";;
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