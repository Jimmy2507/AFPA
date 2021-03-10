<?php
 class voiture {
 
     /*****************Attributs***************** */
     private $_marque;
     private $_modele;
     private $_test;
 
     /*****************Accesseurs***************** */
 /**
      * Get the value of _marque
      */ 
      public function get_marque()
      {
           return $this->_marque;
      }
 
      /**
       * Set the value of _marque
       *
       * @return  self
       */ 
      public function set_marque($_marque)
      {
           $this->_marque = $_marque;
 
           return $this;
      }
 
      /**
       * Get the value of _modele
       */ 
      public function get_modele()
      {
           return $this->_modele;
      }
 
      /**
       * Set the value of _modele
       *
       * @return  self
       */ 
      public function set_modele($_modele)
      {
           $this->_modele = $_modele;
 
           return $this;
      }
     
      /*****************Constructeur******************/ 
 
     public function __construct(array $options = [])
     {
         if (!empty($options)) // empty : renvoi vrai si le tableau est vide
         {
             $this->hydrate($options);
         }
     }
     public function hydrate($data)
     {
         foreach ($data as $key => $value)
         {
             $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
             if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
             {
                 $this->$methode($value);
             }
         }
         var_dump($data);
     }
 
     /*****************Autres Méthodes***************** */
     
     /**
      * Transforme l'objet en chaine de caractères
      *
      * @return String
      */
     public function toString()
     {
         return "";
     }
 
     /**
      * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
      *
      * @param [type] $obj
      * @return bool
      */
     public function equalsTo($obj)
     {
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
     public static function compareTo($obj1, $obj2)
     {
         return 0;
     }
 }
 $voiture = new voiture(["Marque"=>"audi","Modele"=>"Q3"]);