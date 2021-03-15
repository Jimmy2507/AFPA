<?php
class Employe {

    /*****************Attributs***************** */
    private $_nom;
    private $_prenom;
    private $_dateEmbauche;
    private $_poste;
    private $_salaire;
    private $_service;
    private static $_nbEmploye = 0;
    private $_agence;
    private $_enfants =[];

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
    public function getAgence()
    {
        return $this->_agence;
    }

    public function setAgence(Agence $agence)
    {
        $this->_agence = $agence;
    }
    public function getEnfants()
    {
        return $this->_enfants;
    }

    public function setEnfants(array $enfants)
    {
        $this->_enfants = $enfants;
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
    static function compareTo($a, $b)
    {
        $al = strtolower($a->_nom.$b->_prenom);
        $bl = strtolower($b->_nom.$b->_prenom);
        if ($al == $bl) {
            return 0;
        }
        return ($al > $bl) ? +1 : -1;
    }
    public static function compareTo2($a, $b)
    {
        if ($a->getService() < $b->getService())
        {
            return -1;
        }
        else if ($a->getService() > $b->getService())
        {
            return 1;
        }
        else
        {
            return self::compareTo($a, $b);
        }

    }
    
    public function masseSalariale(){
        return $this->getSalaire() + $this->prime();
    }

    public function chequeVacances(){
        if($this->cbAnnee()>=1){
            return "peut disposé de cheque vacances";
        }else{
            return "ne peut pas disposé de cheque vacance";
        }
    }

    

   

    
}

?>