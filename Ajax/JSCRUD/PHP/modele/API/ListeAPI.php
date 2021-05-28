<?php
//fichier pour appel AJAX
echo json_encode(UserManager::getList(true));