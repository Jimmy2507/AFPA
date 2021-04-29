CREATE DATABASE IF NOT EXISTS gestion_des_notes DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE gestion_des_notes;

DROP TABLE IF EXISTS utilisateur;

CREATE TABLE IF NOT EXISTS utilisateur(
  idUtilisateur int (11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  login varchar (50) NOT NULL,
  nomUtilisateur varchar (50) NOT NULL,
  prenomUtilisateur varchar (50) NOT NULL,
  motDePasse varchar (50) NOT NULL,
  role varchar (50) NOT NULL,
  idMatiere int (11) NOT NULL
) ENGINE = InnoDB;

DROP TABLE IF EXISTS matiere;

CREATE TABLE IF NOT EXISTS matiere(
  idMatiere int (11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  libelleMatiere varchar (50) NOT NULL
) ENGINE = InnoDB;

DROP TABLE IF EXISTS suivi;

CREATE TABLE IF NOT EXISTS suivi(
  idSuivi int (11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  idMatiere int (50) NOT NULL,
  idEleve int (11) NOT NULL,
  Note int (11) NOT NULL,
  Coefficient int (50) NOT NULL
) ENGINE = InnoDB;

DROP TABLE IF EXISTS eleve;

CREATE TABLE IF NOT EXISTS eleve(
  idEleve int (11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nomEleve varchar(50) NOT NULL,
  prenomEleve varchar(50) NOT NULL,
  classe varchar(50) NOT NULL
) ENGINE = InnoDB;

ALTER TABLE suivi ADD CONSTRAINT suivi_eleve_FK FOREIGN KEY (idEleve) REFERENCES eleve(idEleve);
ALTER TABLE suivi ADD CONSTRAINT suivi_matiere_FK FOREIGN KEY (idMatiere) REFERENCES matiere(idMatiere);