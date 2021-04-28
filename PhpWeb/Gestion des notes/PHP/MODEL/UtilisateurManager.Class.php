<?php
class UtilisateurManager{
    public static function add(Utilisateur $objet){
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Utilisateur(idUtilisateur,nomUtilisateur,prenomUtilisateur,role,idMatiere,login,motDePasse,) VALUES (:idUtilisateur,:nomUtilisateur,:prenomUtilisateur,:role,:idMatiere,:login,:motDePasse,)");
        $q->bindValue(":idUtilisateur",$objet->getIdUtilisateur());
        $q->bindValue(":nomUtilisateur",$objet->getNomUtilisateur());
        $q->bindValue(":prenomUtilisateur",$objet->getPrenomUtilisateur());
        $q->bindValue(":role",$objet->getRole());
        $q->bindValue(":idMatiere",$objet->getIdMatiere());
        $q->bindValue(":login",$objet->getLogin());
        $q->bindValue(":motDePasse",$objet->getMotDePasse());
        $q->execute();
    }

    public static function update(Utilisateur $objet){
        $db = DbConnect::getDb();	$q = $db->prepare("UPDATE Utilisateur SET ***** WHERE *****");
        $q->bindValue(":idUtilisateur",$objet->getIdUtilisateur());
        $q->bindValue(":nomUtilisateur",$objet->getNomUtilisateur());
        $q->bindValue(":prenomUtilisateur",$objet->getPrenomUtilisateur());
        $q->bindValue(":role",$objet->getRole());
        $q->bindValue(":idMatiere",$objet->getIdMatiere());
        $q->bindValue(":login",$objet->getLogin());
        $q->bindValue(":motDePasse",$objet->getMotDePasse());
        $q->execute();
    }

    public static function delete(Utilisateur $objet){
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Utilisateur WHERE idUtilisateur=" . $objet->getIdUtilisateur());
    }

    public static function findById($id){
        $db = DbConnect::getDb();
        $id = (int) $id;  //Verifie pour eviter injection sql
        $q = $db->query("SELECT * FROM Utilisateur WHERE idUtilisateur=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false){
            return new Utilisateur($results);
        }
        else{
            return false;
        }
    }
    public static function getList(){
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM utilisateur order by login");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)){
            if ($donnees != false){
                $liste[] = new Utilisateur($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Roles
    }
    public static function findByPseudo($pseudo){
        $db = DbConnect::getDb();
        if (!strstr($pseudo,";")){
            $requete = $db->query("SELECT * FROM utilisateur WHERE login ='".$pseudo."'");
            $resultats = $requete->fetch(PDO::FETCH_ASSOC);
            if ($resultats != false){
                return new Utilisateur($resultats);
            }
            else{
                return false;
            }
        }
        else{
            return false;
        }
    }

}