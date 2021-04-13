<?php
class ClientsManager
{

    public static function add(Clients $cl)
    {
        $db = DbConnect::getDb();
        $requete = $db->prepare("INSERT INTO clients( NomClient, PrenomClient) VALUES (:nom,:prenom)");
        $requete->bindValue(":nom", $cl->getNomClient());
        $requete->bindValue(":prenom", $cl->getPrenomClient());
        $res = $requete->execute();
    }
    public static function update(Clients $cl)
    {
        $db = DbConnect::getDb();
        $requete = $db->prepare("UPDATE clients SET NomClient=:nom,PrenomClient=:prenom WHERE idClient = :idClient");
        $requete->bindValue(":nom", $cl->getNomClient());
        $requete->bindValue(":prenom", $cl->getPrenomClient());
        $requete->bindValue(":idClient", $cl->getIdClient());
        $requete->execute();
    }
    public static function delete(Clients $cl)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM clients WHERE idClient = " . $cl->getIdClient());
    }
    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $requete = $db->query("SELECT * FROM clients WHERE idClient = " . $id);
        $resultat = $requete->fetch(PDO::FETCH_ASSOC);
        if ($resultat != false)
        {
            return new Clients($resultat);
        }
        else
        {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $listeClients=[];
        $requete = $db->query("SELECT * FROM clients");

            while ($donnees = $requete->fetch(PDO::FETCH_ASSOC))
            {
                if ($donnees != false)
                {
                    $listeClients[] = new Clients($donnees);
                }
            }
            return $listeClients;
    }
}
