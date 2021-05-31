<?php
class OffreManager
{
    public static function add(Offre $objet)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Offre(idOffre,libelleOffre) VALUES (:idOffre,:libelleOffre)");
        $q->bindValue(":idOffre", $objet->getIdOffre());
        $q->bindValue(":libelleOffre", $objet->getLibelleOffre());
        $q->execute();
    }

    public static function update(Offre $objet)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Offre SET ***** WHERE *****");
        $q->bindValue(":idOffre", $objet->getIdOffre());
        $q->bindValue(":libelleOffre", $objet->getLibelleOffre());
        $q->execute();
    }

    public static function delete(Offre $objet)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Offre WHERE idOffre=" . $objet->getIdOffre());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;  //Verifie pour eviter injection sql
        $q = $db->query("SELECT * FROM Offre WHERE idOffre=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Offre($results);
        } else {
            return false;
        }
    }
    public static function getList()
    {
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM Offre order by libelleOffre");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $liste[] = new Offre($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Roles
    }
}
