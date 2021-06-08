<?php
class voitureManager{
public static function add(voiture $objet){
    $db = DbConnect::getDb();
    $q = $db->prepare("INSERT INTO voiture(idVoiture,modelVoiture,marqueVoiture,) VALUES (:idVoiture,:modelVoiture,:marqueVoiture,)");
$q->bindValue(":idVoiture",$objet->getIdVoiture());
$q->bindValue(":modelVoiture",$objet->getModelVoiture());
$q->bindValue(":marqueVoiture",$objet->getMarqueVoiture());
$q->execute();
            }

 public static function update(voiture $objet){
	$db = DbConnect::getDb();	$q = $db->prepare("UPDATE voiture SET ***** WHERE *****");
$q->bindValue(":idVoiture",$objet->getIdVoiture());
$q->bindValue(":modelVoiture",$objet->getModelVoiture());
$q->bindValue(":marqueVoiture",$objet->getMarqueVoiture());
	$q->execute();
}

public static function delete(voiture $objet){
$db = DbConnect::getDb();
$db->exec("DELETE FROM voiture WHERE idVoiture=" . $objet->getIdVoiture());
}

public static function findById($id){
    $db = DbConnect::getDb();
    $id = (int) $id;  //Verifie pour eviter injection sql
    $q = $db->query("SELECT * FROM voiture WHERE idvoiture=" . $id);
    $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false){
            return new voiture($results);
        }
        else{
            return false;
        }
    }public static function getList(){
    $db = DbConnect::getDb();
    $liste = [];
    $q = $db->query("SELECT * FROM voiture order by nomRole");
    while ($donnees = $q->fetch(PDO::FETCH_ASSOC)){
        if ($donnees != false){
            $liste[] = new voiture($donnees);
        }
    }
    return $liste;  // tableau contenant les objets Roles
}

}