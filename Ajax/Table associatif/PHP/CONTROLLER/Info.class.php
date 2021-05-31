<?php class Info { 
/*****************Attributs***************** */
	 private $_idInfo;
	 private $_idFormateur;
	 private $_idStagiaire;
	 private $_idOffre;
	 private $_idAnnee;
/*****************Accesseurs***************** */
public function getIdInfo(){
	return $this->_idInfo;
}
public function setIdInfo($idInfo){
	$this->_idInfo = $idInfo;
}
public function getIdFormateur(){
	return $this->_idFormateur;
}
public function setIdFormateur($idFormateur){
	$this->_idFormateur = $idFormateur;
}
public function getIdStagiaire(){
	return $this->_idStagiaire;
}
public function setIdStagiaire($idStagiaire){
	$this->_idStagiaire = $idStagiaire;
}
public function getIdOffre(){
	return $this->_idOffre;
}
public function setIdOffre($idOffre){
	$this->_idOffre = $idOffre;
}
public function getIdAnnee(){
	return $this->_idAnnee;
}
public function setIdAnnee($idAnnee){
	$this->_idAnnee = $idAnnee;
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
}