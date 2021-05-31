<?php
class StagiaireManager
{
    public static function add(Stagiaire $objet)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Stagiaire(idStagiaire,nomStagiaire) VALUES (:idStagiaire,:nomStagiaire)");
        $q->bindValue(":idStagiaire", $objet->getIdStagiaire());
        $q->bindValue(":nomStagiaire", $objet->getNomStagiaire());
        $q->execute();
    }

    public static function update(Stagiaire $objet)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Stagiaire SET ***** WHERE *****");
        $q->bindValue(":idStagiaire", $objet->getIdStagiaire());
        $q->bindValue(":nomStagiaire", $objet->getNomStagiaire());
        $q->execute();
    }

    public static function delete(Stagiaire $objet)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Stagiaire WHERE idStagiaire=" . $objet->getIdStagiaire());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;  //Verifie pour eviter injection sql
        $q = $db->query("SELECT * FROM Stagiaire WHERE idStagiaire=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Stagiaire($results);
        } else {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM Stagiaire order by nomStagiaire");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $liste[] = new Stagiaire($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Roles
    }
    
}
