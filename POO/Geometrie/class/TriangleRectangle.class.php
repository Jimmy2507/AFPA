<?php class TriangleRectangle { 
/*****************Attributs***************** */
	 private $_Base;
	 private $_Hauteur;
/*****************Accesseurs***************** */
public function getBase(){
	return $this->_Base;
}
public function setBase($Base){
	$this->_Base = $Base;
}
public function getHauteur(){
	return $this->_Hauteur;
}
public function setHauteur($Hauteur){
	$this->_Hauteur = $Hauteur;
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
   public function perimetre(){
       return $this->getBase()+$this->getHauteur()+sqrt($this->getBase()**2+$this->getHauteur()**2);
   }
   public function aire(){
       return $this->getBase()*$this->getHauteur()/2;
   }
   public function AfficherTriangle(){
       $afficher="\n*****Triangle*****\n";
       $afficher .= "Base : ".$this->getBase()."\nHauteur : ".$this->getHauteur()."\nPerimetre : ".$this->perimetre()."\nAire : ".$this->aire();
       return $afficher;
   }
}