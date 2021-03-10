<?php
class Employe{

    /*****************Attributs***************** */
    private $_nom;
    private $_prenom;
    private $_dateEmbauche;
    private $_poste;
    private $_salaire;
    private $_service;
    private static $_nbEmploye = 0;

    /*****************Accesseurs***************** */
    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    public function getDateEmbauche()
    {
        return $this->_dateEmbauche;
    }

    public function setDateEmbauche($dateEmbauche)
    {
        $this->_dateEmbauche = $dateEmbauche;
    }

    public function getPoste()
    {
        return $this->_poste;
    }

    public function setPoste($poste)
    {
        $this->_poste = $poste;
    }

    public function getSalaire()
    {
        return $this->_salaire;
    }

    public function setSalaire($salaire)
    {
        $this->_salaire = $salaire;
    }

    public function getService()
    {
        return $this->_service;
    }

    public function setService($service)
    {
        $this->_service = $service;
    }
    public static function getNbEmploye()
    {
        return self::$_nbEmploye;
    }

    public static function setNbEmploye($nbEmploye)
    {
        self::$_nbEmploye = $nbEmploye;
    }
    
     /*****************Constructeur******************/ 

    public function __construct(array $options = [])
    {
        if (!empty($options)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($options);
        }
        self::setNbEmploye(self::getNbEmploye()+1);
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
      
    public function cbAnnee(){
       $origin =new DateTime($this->getDateEmbauche());
       $interval = $origin->diff(new DateTime());
       $temp = $interval->format('%y');
       return $temp;
    }

    public function primeAnnuel(){
        return $this->getSalaire()  * 0.05;
    }

    public function primeAnciennete(){
        return $this->getSalaire()  * 0.02 * $this->cbAnnee();
    }

    public function prime(){
        return $this->primeAnnuel() + $this->primeAnciennete();
    }
    function versementPrime(){
        echo "La prime d'un montant de ".$this->prime()."k € à été versé sur le compte de ".$this->getNom();
    }

    
}

?>