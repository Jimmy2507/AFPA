<?php
class modelManager{
public static function add(model $objet){
    $db = DbConnect::getDb();
    $q = $db->prepare("INSERT INTO model(idModel,nomModel,idMarque,idVoiture,) VALUES (:idModel,:nomModel,:idMarque,:idVoiture,)");
$q->bindValue(":idModel",$objet->getIdModel());
$q->bindValue(":nomModel",$objet->getNomModel());
$q->bindValue(":idMarque",$objet->getIdMarque());
$q->bindValue(":idVoiture",$objet->getIdVoiture());
$q->execute();
            }

 public static function update(model $objet){
	$db = DbConnect::getDb();	$q = $db->prepare("UPDATE model SET ***** WHERE *****");
$q->bindValue(":idModel",$objet->getIdModel());
$q->bindValue(":nomModel",$objet->getNomModel());
$q->bindValue(":idMarque",$objet->getIdMarque());
$q->bindValue(":idVoiture",$objet->getIdVoiture());
	$q->execute();
}

public static function delete(model $objet){
$db = DbConnect::getDb();
$db->exec("DELETE FROM model WHERE idModel=" . $objet->getIdModel());
}

public static function findById($id){
    $db = DbConnect::getDb();
    $id = (int) $id;  //Verifie pour eviter injection sql
    $q = $db->query("SELECT * FROM model WHERE idmodel=" . $id);
    $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false){
            return new model($results);
        }
        else{
            return false;
        }
    }public static function getList(){
    $db = DbConnect::getDb();
    $liste = [];
    $q = $db->query("SELECT * FROM model order by nomRole");
    while ($donnees = $q->fetch(PDO::FETCH_ASSOC)){
        if ($donnees != false){
            $liste[] = new model($donnees);
        }
    }
    return $liste;  // tableau contenant les objets Roles
}

}