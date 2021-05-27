<?php
include "../PersonneManager.Class.php";
include "../../Controller/Parametre.Class.php";
include "../DbConnect.class.php";
Parametres::init();
DbConnect::init();
echo json_encode(UserManager::count());