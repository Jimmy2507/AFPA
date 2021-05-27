<?php
//fichier pour appel AJAX
include "../PersonneManager.Class.php";
include "../../Controller/Parametre.Class.php";
include "../../Controller/Personne.Class.php";
include "../DbConnect.class.php";
Parametres::init();
DbConnect::init();
echo json_encode(UserManager::getListAPI());