<?php class Livre extends Document { 
/*****************Attributs***************** */
	 private $_nbPage;
/*****************Accesseurs***************** */
public function getNbPage(){
	return $this->_nbPage;
}
public function setNbPage($nbPage){
	$this->_nbPage = $nbPage;
}
/*****************Constructeur******************/ 
public function __construct(array $options = [])
{
    Parent::__construct($options);
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
}
/*****************Autres Méthodes***************** */ 
    /**
    * Transforme l'objet en chaine de caractères
    *
    * @return String
    */
   public function toString()
   {
       $aff = "Le livre : ".$this->getTitre()."\n";
       $aff .="Ecris par : ".$this->getAuteur()->getNom()." ".$this->getAuteur()->getPrenom()."\n";
       $aff .= "Comporte : ".$this->getNbPage()." pages\n";
       $aff .= $this->estEmprunter()."\n\n";
       return $aff;
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