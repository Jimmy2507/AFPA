<?php
class ProduitsManager
{

    public static function add(Produits $pdt)
    {
        $db = DbConnect::getDb();
        $requete = $db->prepare("INSERT INTO produits( libelleProduit, prix) VALUES (:libelleProduit, :prix)");
        $requete->bindValue(":libelleProduit", $pdt->getLibelleProduit());
        $requete->bindValue(":prix", $pdt->getPrix());
        $res = $requete->execute();
    }
    public static function update(Produits $pdt)
    {
        $db = DbConnect::getDb();
        $requete = $db->prepare("UPDATE produits SET libelleProduit=:libelleProduit,prix=:prix WHERE idProduit = :idProduit");
        $requete->bindValue(":libelleProduit", $pdt->getLibelleProduit());
        $requete->bindValue(":prix", $pdt->getPrix());
        $requete->bindValue(":idProduit", $pdt->getIdProduit());
        $requete->execute();
    }
    public static function delete(Produits $pdt)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM produits WHERE idProduit = " . $pdt->getIdProduit());
    }
    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $requete = $db->query("SELECT * FROM produits WHERE idProduit = ".$id);
        $resultat = $requete->fetch(PDO::FETCH_ASSOC);
        if ($resultat != false)
        {
            return new Produits($resultat);
        }
        else
        {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $listeProduits=[];
        $requete = $db->query("SELECT * FROM produits");

            while ($donnees = $requete->fetch(PDO::FETCH_ASSOC))
            {
                if ($donnees != false)
                {
                    $listeProduits[] = new Produits($donnees);
                }
            }
            return $listeProduits;
    }
}
