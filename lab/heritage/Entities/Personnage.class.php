<?php
class Personnage{
    protected $_noms;
    protected $_prenoms;

    public function __construct($noms,$prenoms){
        $this->_noms=$noms;
        $this->_prenoms=$prenoms;
        
    }
    public static function presentation($noms,$prenoms,$pv,$pc){
        echo "Le personnage s'appelle : $noms , $prenoms ";
   }
   
}
?>