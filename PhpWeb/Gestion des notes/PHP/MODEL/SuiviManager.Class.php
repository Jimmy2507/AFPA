<?php
class SuiviManager{
    public static function add(Suivi $objet){
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Suivi(idSuivi,idMatiere,idEleve,note,coefficient,) VALUES (:idSuivi,:idMatiere,:idEleve,:note,:coefficient,)");
        $q->bindValue(":idSuivi",$objet->getIdSuivi());
        $q->bindValue(":idMatiere",$objet->getIdMatiere());
        $q->bindValue(":idEleve",$objet->getIdEleve());
        $q->bindValue(":note",$objet->getNote());
        $q->bindValue(":coefficient",$objet->getCoefficient());
        $q->execute();
    }

    public static function update(Suivi $objet){
	    $db = DbConnect::getDb();	$q = $db->prepare("UPDATE Suivi SET ***** WHERE *****");
        $q->bindValue(":idSuivi",$objet->getIdSuivi());
        $q->bindValue(":idMatiere",$objet->getIdMatiere());
        $q->bindValue(":idEleve",$objet->getIdEleve());
        $q->bindValue(":note",$objet->getNote());
        $q->bindValue(":coefficient",$objet->getCoefficient());
	    $q->execute();
    }   

    public static function delete(Suivi $objet){
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Suivi WHERE idSuivi=" . $objet->getIdSuivi());
    }

    public static function findById($id){
        $db = DbConnect::getDb();
        $id = (int) $id;  //Verifie pour eviter injection sql
        $q = $db->query("SELECT * FROM Suivi WHERE idSuivi=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false){
            return new Suivi($results);
        }
        else{
            return false;
        }
    }
    public static function getList(){
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM Suivi order by Note");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)){
            if ($donnees != false){
                $liste[] = new Suivi($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Roles
    }

}