<?php
class marqueManager{
public static function add(marque $objet){
    $db = DbConnect::getDb();
    $q = $db->prepare("INSERT INTO marque(idMarque,nomMarque,) VALUES (:idMarque,:nomMarque,)");
$q->bindValue(":idMarque",$objet->getIdMarque());
$q->bindValue(":nomMarque",$objet->getNomMarque());
$q->execute();
            }

 public static function update(marque $objet){
	$db = DbConnect::getDb();	$q = $db->prepare("UPDATE marque SET ***** WHERE *****");
$q->bindValue(":idMarque",$objet->getIdMarque());
$q->bindValue(":nomMarque",$objet->getNomMarque());
	$q->execute();
}

public static function delete(marque $objet){
$db = DbConnect::getDb();
$db->exec("DELETE FROM marque WHERE idMarque=" . $objet->getIdMarque());
}

public static function findById($id){
    $db = DbConnect::getDb();
    $id = (int) $id;  //Verifie pour eviter injection sql
    $q = $db->query("SELECT * FROM marque WHERE idmarque=" . $id);
    $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false){
            return new marque($results);
        }
        else{
            return false;
        }
    }public static function getList(){
    $db = DbConnect::getDb();
    $liste = [];
    $q = $db->query("SELECT * FROM marque order by nomRole");
    while ($donnees = $q->fetch(PDO::FETCH_ASSOC)){
        if ($donnees != false){
            $liste[] = new marque($donnees);
        }
    }
    return $liste;  // tableau contenant les objets Roles
}

}