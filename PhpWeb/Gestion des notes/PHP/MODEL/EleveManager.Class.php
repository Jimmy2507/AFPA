<?php
class EleveManager{
    public static function add(Eleve $objet){
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Eleve(idEleve,nomEleve,prenomEleve,classe,) VALUES (:idEleve,:nomEleve,:prenomEleve,:classe,)");
        $q->bindValue(":idEleve",$objet->getIdEleve());
        $q->bindValue(":nomEleve",$objet->getNomEleve());
        $q->bindValue(":prenomEleve",$objet->getPrenomEleve());
        $q->bindValue(":classe",$objet->getClasse());
        $q->execute();
    }

    public static function update(Eleve $objet){
        $db = DbConnect::getDb();	$q = $db->prepare("UPDATE Eleve SET ***** WHERE *****");
        $q->bindValue(":idEleve",$objet->getIdEleve());
        $q->bindValue(":nomEleve",$objet->getNomEleve());
        $q->bindValue(":prenomEleve",$objet->getPrenomEleve());
        $q->bindValue(":classe",$objet->getClasse());
        $q->execute();
    }

    public static function delete(Eleve $objet){
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Eleve WHERE idEleve=" . $objet->getIdEleve());
    }

    public static function findById($id){
        $db = DbConnect::getDb();
        $id = (int) $id;  //Verifie pour eviter injection sql
        $q = $db->query("SELECT * FROM Eleve WHERE idEleve=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false){
            return new Eleve($results);
        }
        else{
            return false;
        }
    }
    public static function getList(){
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM Eleve order by nomEleve");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)){
            if ($donnees != false){
                $liste[] = new Eleve($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Roles
    }

}