<?php
class UserManager
{

    public static function add(User $user)
    {
        $db = DbConnect::getDb();
        $requete = $db->prepare("INSERT INTO user( username, password, idRole) VALUES (:username, :password, :idRole)");
        $requete->bindValue(":username", $user->getUsername());
        $requete->bindValue(":password", $user->getPassword());
        $requete->bindValue(":idRole", $user->getIdRole());
        $requete->execute();
    }
    public static function update(User $user)
    {
        $db = DbConnect::getDb();
        $requete = $db->prepare("UPDATE user SET username=:username,password=:password,idRole=:idRole WHERE idUser = :idUser");
        $requete->bindValue(":username", $user->getUsername());
        $requete->bindValue(":password", $user->getPassword());
        $requete->bindValue(":idRole", $user->getIdRole());
        $requete->execute();
    }
    public static function delete(User $user)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM user WHERE idUser = " . $user->getIdUser());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $requete = $db->query("SELECT * FROM user WHERE idUser = ".$id);
        $resultat = $requete->fetch(PDO::FETCH_ASSOC);
        if ($resultat != false)
        {
            return new User($resultat);
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
        $requete = $db->query("SELECT * FROM user");

            while ($donnees = $requete->fetch(PDO::FETCH_ASSOC))
            {
                if ($donnees != false)
                {
                    $listeProduits[] = new User($donnees);
                }
            }
            return $listeProduits;
    }
}
