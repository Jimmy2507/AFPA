<?php
    class radar{
    const ammende_45="1point en moin et 45e d'ammende";
    const ammende_90="3points en moin et 90e d'ammende";
    const ammende_gendarme="Rendez-vous a la gendarmerie";
    private $_limitation;
    private $_vitesse;
        public function __construct($limitation){
            $this->set_limitation($limitation);
        }

    public function set_limitation(int $limitation){
        $this->_limitation=$limitation;
    }
    public function set_vitesse(int $vitesse){
        $this->_vitesse=$vitesse;
    }

    public function flash($vitesseRdm,$i){
        echo  $vitesseRdm;
        if($vitesseRdm<=$this->_limitation+10 && $vitesseRdm>$this->_limitation){
            echo"La voiture $i à été flashé.\n";
            echo self::ammende_45;
            return true;
        }else if ($vitesseRdm > $this->_limitation+10 && $vitesseRdm <= $this->_limitation+20 ){
            echo"La voiture $i à été flashé.\n";
            echo self::ammende_90;
            return true;
        }else if($vitesseRdm > $this->_limitation +20 ){
            echo"La voiture $i à été flashé.\n";
            echo self::ammende_gendarme;
            return true;
        }else{
            echo"Vitesse respecté";
        }
       return false;
    }


    }

?>