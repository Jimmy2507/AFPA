<?php

	class RolesManager{

        public static function add(Roles $objet){
            $db = DbConnect::getDb();
            $q = $db->prepare("INSERT INTO roles (idRole,nomRole) VALUES (:id,:nom)");
            $q->bindValue(":id", $objet->getIdRole());
            $q->bindValue(":nom", $objet->getNomRole());
            $q->execute();
        }

        public static function update(Roles $objet){
            $db = DbConnect::getDb();
            $q = $db->prepare("UPDATE roles SET nomRole=:nom WHERE idRole=:id");
            $q->bindValue(":id", $objet->getIdRole());
            $q->bindValue(":nom", $objet->getNomRole());
            $q->execute();
        }

        public static function delete(Roles $objet){
            $db = DbConnect::getDb();
            $db->exec("DELETE FROM roles WHERE idRole=" . $objet->getIdRole());
        }

        public static function findById($id){
            $db = DbConnect::getDb();
            $id = (int) $id;  // on verifie que id est numerique, evite l'injection SQL
            $q = $db->query("SELECT * FROM roles WHERE idRole=" . $id);
            $results = $q->fetch(PDO::FETCH_ASSOC);
            if ($results != false){
                return new Roles($results);
            }
            else{
                return false;
            }
        }

        public static function getList(){
            $db = DbConnect::getDb();
            $liste = [];
            $q = $db->query("SELECT * FROM roles order by nomRole");
            while ($donnees = $q->fetch(PDO::FETCH_ASSOC)){
                if ($donnees != false){
                    $liste[] = new Roles($donnees);
                }
            }
            return $liste;  // tableau contenant les objets Roles
        }

    }