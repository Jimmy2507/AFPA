<?php
class FormateurManager
{
    public static function add(Formateur $objet)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Formateur(idFormateur,nomFormateur) VALUES (:idFormateur,:nomFormateur)");
        $q->bindValue(":idFormateur", $objet->getIdFormateur());
        $q->bindValue(":nomFormateur", $objet->getNomFormateur());
        $q->execute();
    }

    public static function update(Formateur $objet)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Formateur SET ***** WHERE *****");
        $q->bindValue(":idFormateur", $objet->getIdFormateur());
        $q->bindValue(":nomFormateur", $objet->getNomFormateur());
        $q->execute();
    }

    public static function delete(Formateur $objet)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Formateur WHERE idFormateur=" . $objet->getIdFormateur());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;  //Verifie pour eviter injection sql
        $q = $db->query("SELECT * FROM Formateur WHERE idFormateur=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Formateur($results);
        } else {
            return false;
        }
    }
    public static function getList()
    {
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM Formateur order by nomFormateur");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $liste[] = new Formateur($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Roles
    }
}
