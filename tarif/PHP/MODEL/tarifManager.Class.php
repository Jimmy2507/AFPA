<?php
class tarifManager{
public static function add(tarif $objet){
    $db = DbConnect::getDb();
    $q = $db->prepare("INSERT INTO tarif(idTarif,Tarif,) VALUES (:idTarif,:Tarif,)");
$q->bindValue(":idTarif",$objet->getIdTarif());
$q->bindValue(":Tarif",$objet->getTarif());
$q->execute();
            }

 public static function update(tarif $objet){
	$db = DbConnect::getDb();	$q = $db->prepare("UPDATE tarif SET ***** WHERE *****");
$q->bindValue(":idTarif",$objet->getIdTarif());
$q->bindValue(":Tarif",$objet->getTarif());
	$q->execute();
}

public static function delete(tarif $objet){
$db = DbConnect::getDb();
$db->exec("DELETE FROM tarif WHERE idTarif=" . $objet->getIdTarif());
}

public static function findById($id){
    $db = DbConnect::getDb();
    $id = (int) $id;  //Verifie pour eviter injection sql
    $q = $db->query("SELECT * FROM tarif WHERE idtarif=" . $id);
    $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false){
            return new tarif($results);
        }
        else{
            return false;
        }
    }public static function getList(){
    $db = DbConnect::getDb();
    $liste = [];
    $q = $db->query("SELECT * FROM tarif order by nomRole");
    while ($donnees = $q->fetch(PDO::FETCH_ASSOC)){
        if ($donnees != false){
            $liste[] = new tarif($donnees);
        }
    }
    return $liste;  // tableau contenant les objets Roles
}

}