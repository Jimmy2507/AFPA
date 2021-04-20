<?php
class UserManager{
public static function add(User $objet){
    $db = DbConnect::getDb();
    $q = $db->prepare("INSERT INTO User(idUser,prenomUser,nomUser,mailUser,numTel,fonctionUser,) VALUES (:idUser,:prenomUser,:nomUser,:mailUser,:numTel,:fonctionUser,)");
$q->bindValue(":idUser",$objet->getIdUser());
$q->bindValue(":prenomUser",$objet->getPrenomUser());
$q->bindValue(":nomUser",$objet->getNomUser());
$q->bindValue(":mailUser",$objet->getMailUser());
$q->bindValue(":numTel",$objet->getNumTel());
$q->bindValue(":fonctionUser",$objet->getFonctionUser());
$q->execute();
            }

 public static function update(User $objet){
	$db = DbConnect::getDb();	$q = $db->prepare("UPDATE User SET ** WHERE **");
$q->bindValue(":idUser",$objet->getIdUser());
$q->bindValue(":prenomUser",$objet->getPrenomUser());
$q->bindValue(":nomUser",$objet->getNomUser());
$q->bindValue(":mailUser",$objet->getMailUser());
$q->bindValue(":numTel",$objet->getNumTel());
$q->bindValue(":fonctionUser",$objet->getFonctionUser());
	$q->execute();
}

public static function delete(User $objet){
$db = DbConnect::getDb();
$db->exec("DELETE FROM User WHERE idUser=" . $objet->getIdUser());
}

public static function findById($id){
    $db = DbConnect::getDb();
    $id = (int) $id;  //Verifie pour eviter injection sql
    $q = $db->query("SELECT * FROM User WHERE idUser=" . $id);
    $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false){
            return new User($results);
        }
        else{
            return false;
        }
    }public static function getList(){
    $db = DbConnect::getDb();
    $liste = [];
    $q = $db->query("SELECT * FROM User order by nomRole");
    while ($donnees = $q->fetch(PDO::FETCH_ASSOC)){
        if ($donnees != false){
            $liste[] = new User($donnees);
        }
    }
    return $liste;  // tableau contenant les objets Roles
}

}