<?php
class MatiereManager{
    public static function add(Matiere $objet){
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Matiere(idMatiere,libelleMatiere,) VALUES (:idMatiere,:libelleMatiere,)");
        $q->bindValue(":idMatiere",$objet->getIdMatiere());
        $q->bindValue(":libelleMatiere",$objet->getLibelleMatiere());
        $q->execute();
    }

    public static function update(Matiere $objet){
        $db = DbConnect::getDb();	$q = $db->prepare("UPDATE Matiere SET ***** WHERE *****");
        $q->bindValue(":idMatiere",$objet->getIdMatiere());
        $q->bindValue(":libelleMatiere",$objet->getLibelleMatiere());
        $q->execute();
    }

    public static function delete(Matiere $objet){
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Matiere WHERE idMatiere=" . $objet->getIdMatiere());
    }

    public static function findById($id){
        $db = DbConnect::getDb();
        $id = (int) $id;  //Verifie pour eviter injection sql
        $q = $db->query("SELECT * FROM Matiere WHERE idMatiere=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false){
            return new Matiere($results);
        }
        else{
            return false;
        }
    }
    public static function getList(){
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM Matiere order by libelleMatiere");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)){
            if ($donnees != false){
                $liste[] = new Matiere($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Roles
    }

}