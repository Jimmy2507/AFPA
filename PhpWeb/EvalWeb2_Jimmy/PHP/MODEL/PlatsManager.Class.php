<?php
class PlatsManager{
    public static function add(Plats $objet){
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Plats(idPlat,libellePlat,nbCalories,idMenu) VALUES (:idPlat,:libellePlat,:nbCalories,:idMenu)");
        $q->bindValue(":idPlat",$objet->getIdPlat());
        $q->bindValue(":libellePlat",$objet->getLibellePlat());
        $q->bindValue(":nbCalories",$objet->getNbCalories());
        $q->bindValue(":idMenu",$objet->getIdMenu());
        $q->execute();
    }

    public static function update(Plats $objet){
        $db = DbConnect::getDb();	$q = $db->prepare("UPDATE Plats SET idPlat=:idPlat,libellePlat=:libellePlat,nbCalories=:nbCalories,idMenu=:idMenu WHERE idPlat=:idPlat");
        $q->bindValue(":idPlat",$objet->getIdPlat());
        $q->bindValue(":libellePlat",$objet->getLibellePlat());
        $q->bindValue(":nbCalories",$objet->getNbCalories());
        $q->bindValue(":idMenu",$objet->getIdMenu());
        $q->execute();
    }

    public static function delete(Plats $objet){
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Plats WHERE idPlat=" . $objet->getIdPlat());
    }

    public static function findById($id){
        $db = DbConnect::getDb();
        $id = (int) $id;  //Verifie pour eviter injection sql
        $q = $db->query("SELECT * FROM Plats WHERE idPlat=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
            if ($results != false){
                return new Plats($results);
            }
            else{
                return false;
            }
    }
    public static function getList(){
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM Plats order by libellePlat");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)){
            if ($donnees != false){
                $liste[] = new Plats($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Roles
    }

}