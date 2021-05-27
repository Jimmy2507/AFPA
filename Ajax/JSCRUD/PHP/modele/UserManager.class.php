<?php

	class UserManager{

		public static function add(User $objet){
			$db = DbConnect::getDb();
			$requete = $db->prepare("INSERT INTO user (idUser,username,password,idRole) VALUES (:idUser,:username,:password,:idRole)");
			$requete->bindValue(":idUser", $objet->getIdUser());
			$requete->bindValue(":username", $objet->getUsername());
			$requete->bindValue(":password", $objet->getPassword());
			$requete->bindValue(":idRole", $objet->getIdRole());
			$requete->execute();
		}

		public static function update(User $objet){
			$db = DbConnect::getDb();
			$requete = $db->prepare("UPDATE user SET idUser=:idUser,username=:username,password=:password,idRole=:idRole WHERE idUser=:idUser");
			$requete->bindValue(":idUser", $objet->getIdUser());
			$requete->bindValue(":username", $objet->getUsername());
			$requete->bindValue(":password", $objet->getPassword());
			$requete->bindValue(":idRole", $objet->getIdRole());
			$requete->execute();
		}

		public static function delete(User $objet){
			$db = DbConnect::getDb();
			$db->exec("DELETE FROM user WHERE idUser=".$objet->getIdUser());
		}

		public static function findById($id){
			$db = DbConnect::getDb();
			$id = (int) $id;
			$requete = $db->query("SELECT * FROM user WHERE idUser =".$id);
			$resultats = $requete->fetch(PDO::FETCH_ASSOC);
			if ($resultats <> false){
				return new User($resultats);
			}
			else{
				return false;
			}
		}

		public static function getList(){
			$db = DbConnect::getDb();
			$liste = [];
			$requete = $db->query("SELECT * FROM user");
			while ($donnees = $requete->fetch(PDO::FETCH_ASSOC)){
				if ($donnees <> false){
					$liste[] = new User($donnees);
				}
			}return $liste;
		}

		static public function getListAPI()
		{
			$db = DbConnect::getDb(); // Instance de PDO.
			// Retourne la liste de tous les personnes.
			$q = $db->query('SELECT idUser, username, password, idRole FROM user ORDER BY username');
			while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
				$json[] = $donnees;
			}
			return $json;
		}

		static public function count()
		{
			$db = DbConnect::getDb(); // Instance de PDO.
			// Retourne la liste de tous les personnes.
			$q = $db->query('SELECT count(*) as nb FROM user');
			$donnees = $q->fetch(PDO::FETCH_ASSOC);
			return $donnees;
		}

	}