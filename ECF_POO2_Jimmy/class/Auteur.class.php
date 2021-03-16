<?php class Auteur { 
/*****************Attributs***************** */
	 private $_nom;
	 private $_prenom;
	 private $_dateNaissance;
	 private $_dateDeces;
/*****************Accesseurs***************** */
public function getNom(){
	return $this->_nom;
}
public function setNom($nom){
	$this->_nom = $nom;
}
public function getPrenom(){
	return $this->_prenom;
}
public function setPrenom($prenom){
	$this->_prenom = $prenom;
}
public function getDateNaissance(){
	return $this->_dateNaissance;
}
public function setDateNaissance($dateNaissance){
	$this->_dateNaissance = $dateNaissance;
}
public function getDateDeces(){
	return $this->_dateDeces;
}
public function setDateDeces($dateDeces){
	$this->_dateDeces = $dateDeces;
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
       $aff = $this->getNom()." ".$this->getPrenom()."\n";
       $aff .= $this->estVivant()?"Est vivant\n\n":"Est mort\n\n";
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
       if($this->getNom()==$obj->getNom() && $this->getPrenom()== $obj->getPrenom()){
        return true;
       }
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
   public function estVivant(){
       if($this->getDateDeces()==null){
           return true;
       }
   }

}