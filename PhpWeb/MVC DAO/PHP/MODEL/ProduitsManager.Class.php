<?php
class ProduitsManager
{
    public static function add(Produits $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Produits (libelleProduit,prix,dateDePeremption) VALUES (:libelleProduit,:prix,:dateDePeremption)");
        $q->bindValue(":libelleProduit", $obj->getLibelleProduit());
        $q->bindValue(":prix", $obj->getPrix());
        $q->bindValue(":dateDePeremption", $obj->getDateDePeremption());
        $q->execute();
    }

    public static function update(Produits $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Produits SET libelleProduit=:libelleProduit, prix=:prix, dateDePeremption=:dateDePeremption WHERE idProduit=:idProduit");
        $q->bindValue(":libelleProduit", $obj->getLibelleProduit());
        $q->bindValue(":prix", $obj->getPrix());
        $q->bindValue(":dateDePeremption", $obj->getDateDePeremption());
        $q->bindValue(":idProduit", $obj->getIdProduit());
        $q->execute();
    }
    public static function getList()
    {
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM Produits order by LibelleProduit");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = new Produits($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Produits
    }

}
