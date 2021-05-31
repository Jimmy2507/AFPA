<?php
//fichier pour appel AJAX
echo json_encode(InfoManager::getListFiltre($id,true));