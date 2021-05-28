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

		public static function getList($api){
			$db = DbConnect::getDb();
			$liste = [];
			$requete = $db->query("SELECT * FROM user");
			while ($donnees = $requete->fetch(PDO::FETCH_ASSOC)){
				if ($donnees <> false){
					if($api){
                        $liste[]=$donnees;
                    }else{
                        $liste[] = new User($donnees);
                    }
				}
			}return $liste;
		}
		
		public static function getListByRole($idRole, $api){
			$id=(int) $idRole;
			$db = DbConnect::getDb();
			$liste = [];
			$q = $db->query("SELECT * FROM user where idRole=$idRole");
			while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
			{
				if ($donnees != false)
				{
					$liste[] = new Roles($donnees);
					$json[]=$donnees;
				}
			}
			if (!$api)  return $liste;
			return $json;
		}

	}