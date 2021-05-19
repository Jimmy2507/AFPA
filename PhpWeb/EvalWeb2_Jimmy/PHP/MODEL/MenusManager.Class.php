<?php
class MenusManager{
    public static function add(Menus $objet){
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Menus(idMenu,libelleMenu) VALUES (:idMenu,:libelleMenu)");
        $q->bindValue(":idMenu",$objet->getIdMenu());
        $q->bindValue(":libelleMenu",$objet->getLibelleMenu());
        $q->execute();
    }

    public static function update(Menus $objet){
        $db = DbConnect::getDb();	$q = $db->prepare("UPDATE Menus SET idMenu=:idMenu,libelleMenu=:libelleMenu WHERE idMenu=:idMenu");
        $q->bindValue(":idMenu",$objet->getIdMenu());
        $q->bindValue(":libelleMenu",$objet->getLibelleMenu());
        $q->execute();
    }

    public static function delete(Menus $objet){
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Menus WHERE idMenu=" . $objet->getIdMenu());
    }

    public static function findById($id){
        $db = DbConnect::getDb();
        $id = (int) $id;  //Verifie pour eviter injection sql
        $q = $db->query("SELECT * FROM Menus WHERE idMenu=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
            if ($results != false){
                return new Menus($results);
            }
            else{
                return false;
            }
    }
    public static function getList(){
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM Menus");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)){
            if ($donnees != false){
                $liste[] = new Menus($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Roles
    }

}