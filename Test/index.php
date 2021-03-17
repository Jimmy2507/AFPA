<?php
require("./Services/methodes.php");
function chargementClasse($class){
            require("./class/".$class.".class.php");
        }
        spl_autoload_register("chargementClasse");
