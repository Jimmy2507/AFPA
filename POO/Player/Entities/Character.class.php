<?php
    abstract class Character{

        protected $_lifePoint;
        protected $_strenghtPoint;

        public function __construct($lifePoint,$strenghtPoint){
            $this->set_Vie($lifePoint);
            $this->set_Force($strenghtPoint);
        }

        public function set_Vie($lifePoint){
            $this->_lifePoint=$lifePoint;
        }

        public function set_Force($strenghtPoint){
            $this->_strenghtPoint=$strenghtPoint;
        }

        public function get_Vie(){
            return $this->_lifePoint;
        }
        public function get_Force(){
            return $this->_strenghtPoint;
        }

        public function attack($charactere){
             $charactere->set_Vie($charactere->get_Vie()-$this->_strenghtPoint);

        }
        
    }
    
?>