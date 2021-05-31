<?php
class InfoManager
{
    public static function add(Info $objet)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Info(idInfo,idFormateur,idStagiaire,idOffre,idAnnee) VALUES (:idInfo,:idFormateur,:idStagiaire,:idOffre,:idAnnee)");
        $q->bindValue(":idInfo", $objet->getIdInfo());
        $q->bindValue(":idFormateur", $objet->getIdFormateur());
        $q->bindValue(":idStagiaire", $objet->getIdStagiaire());
        $q->bindValue(":idOffre", $objet->getIdOffre());
        $q->bindValue(":idAnnee", $objet->getIdAnnee());
        $q->execute();
    }

    public static function update(Info $objet)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Info SET ***** WHERE *****");
        $q->bindValue(":idInfo", $objet->getIdInfo());
        $q->bindValue(":idFormateur", $objet->getIdFormateur());
        $q->bindValue(":idStagiaire", $objet->getIdStagiaire());
        $q->bindValue(":idOffre", $objet->getIdOffre());
        $q->bindValue(":idAnnee", $objet->getIdAnnee());
        $q->execute();
    }

    public static function delete(Info $objet)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Info WHERE idInfo=" . $objet->getIdInfo());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;  //Verifie pour eviter injection sql
        $q = $db->query("SELECT * FROM Info WHERE idInfo=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Info($results);
        } else {
            return false;
        }
    }
    public static function getList()
    {
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM Info");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $liste[] = new Info($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Roles
    }

    public static function getListFiltre($id,$api)
    {
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM Info WHERE idFormateur =".$id);

        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {

            if($api) {
				$listeCreations[] = $donnees;
			}else{
                $liste[] = new Info($donnees);
            }
        }

        return $liste;  // tableau contenant les objets
    }
    
}