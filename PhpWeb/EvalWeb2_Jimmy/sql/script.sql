CREATE DATABASE IF NOT EXISTS Menu DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE Menu;

DROP TABLE IF EXISTS Plats;

CREATE TABLE IF NOT EXISTS Plats(
  idPlat int (11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  libellePlat varchar (50) NOT NULL,
  nbCalories int(11) NOT NULL,
  idMenu int (11) NOT NULL
) ENGINE = InnoDB;

DROP TABLE IF EXISTS Menus;

CREATE TABLE IF NOT EXISTS Menus(
  idMenu int (11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  libelleMenu varchar (50) NOT NULL
) ENGINE = InnoDB;


ALTER TABLE Plats ADD CONSTRAINT Plats_Menus_FK FOREIGN KEY (idMenu) REFERENCES Menus(idMenu);

INSERT INTO `plats` (`idPlat`, `libellePlat`, `nbCalories`, `idMenu`) VALUES
(2, 'pate bolo', 200, 5),
(4, 'Pate Carbo', 120, 5);

INSERT INTO `menus` (`idMenu`, `libelleMenu`) VALUES
(3, 'Lundi'),
(5, 'Mardi');