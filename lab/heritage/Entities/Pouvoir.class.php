<?php
class Pouvoir extends Personnage{
    protected $_pv;
    protected $_pc;



    public function __construct($pv,$pc,$noms,$prenoms){
        $this->_pv=$pv;
        $this->_pc=$pc;
        Parent ::__construct($noms,$prenoms);
      
    }
    public static function parle($noms,$prenoms,$pv,$pc){
         echo "Le personnage : $noms , $prenoms a $pv pv et $pc point combat ";
    }
    
 
}
?>