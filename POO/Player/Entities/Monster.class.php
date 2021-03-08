<?php
class Monster extends Character{
    public function __construct(){
        Parent::__construct(rand(20,100),rand(5,10));

    }
}
?>