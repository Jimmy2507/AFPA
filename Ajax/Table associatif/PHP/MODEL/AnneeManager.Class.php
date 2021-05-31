<?php
class AnneeManager
{
    public static function add(Annee $objet)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Annee(idAnnee,annee) VALUES (:idAnnee,:annee)");
        $q->bindValue(":idAnnee", $objet->getIdAnnee());
        $q->bindValue(":annee", $objet->getAnnee());
        $q->execute();
    }

    public static function update(Annee $objet)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Annee SET ***** WHERE *****");
        $q->bindValue(":idAnnee", $objet->getIdAnnee());
        $q->bindValue(":annee", $objet->getAnnee());
        $q->execute();
    }

    public static function delete(Annee $objet)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Annee WHERE idAnnee=" . $objet->getIdAnnee());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;  //Verifie pour eviter injection sql
        $q = $db->query("SELECT * FROM Annee WHERE idAnnee=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Annee($results);
        } else {
            return false;
        }
    }
    public static function getList()
    {
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM Annee");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $liste[] = new Annee($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Roles
    }
}
