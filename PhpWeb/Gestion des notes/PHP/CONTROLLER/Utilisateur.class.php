<?php class Utilisateur { 
/*****************Attributs***************** */
	 private $_idUtilisateur;
	 private $_nomUtilisateur;
	 private $_prenomUtilisateur;
	 private $_role;
	 private $_idMatiere;
	 private $_login;
	 private $_motDePasse;
/*****************Accesseurs***************** */
public function getIdUtilisateur(){
	return $this->_idUtilisateur;
}
public function setIdUtilisateur($idUtilisateur){
	$this->_idUtilisateur = $idUtilisateur;
}
public function getNomUtilisateur(){
	return $this->_nomUtilisateur;
}
public function setNomUtilisateur($nomUtilisateur){
	$this->_nomUtilisateur = $nomUtilisateur;
}
public function getPrenomUtilisateur(){
	return $this->_prenomUtilisateur;
}
public function setPrenomUtilisateur($prenomUtilisateur){
	$this->_prenomUtilisateur = $prenomUtilisateur;
}
public function getRole(){
	return $this->_role;
}
public function setRole($role){
	$this->_role = $role;
}
public function getIdMatiere(){
	return $this->_idMatiere;
}
public function setIdMatiere($idMatiere){
	$this->_idMatiere = $idMatiere;
}
public function getLogin(){
	return $this->_login;
}
public function setLogin($login){
	$this->_login = $login;
}
public function getMotDePasse(){
	return $this->_motDePasse;
}
public function setMotDePasse($motDePasse){
	$this->_motDePasse = $motDePasse;
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