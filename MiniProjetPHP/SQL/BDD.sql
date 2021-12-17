-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.7.33 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour miniprojetphp
CREATE DATABASE IF NOT EXISTS `miniprojetphp` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `miniprojetphp`;

-- Listage de la structure de la table miniprojetphp. question
CREATE TABLE IF NOT EXISTS `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idU` int(11) NOT NULL,
  `contenue` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_question_utilisateur` (`idU`),
  CONSTRAINT `FK_question_utilisateur` FOREIGN KEY (`idU`) REFERENCES `utilisateur` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table miniprojetphp.question : ~0 rows (environ)
/*!40000 ALTER TABLE `question` DISABLE KEYS */;
/*!40000 ALTER TABLE `question` ENABLE KEYS */;

-- Listage de la structure de la table miniprojetphp. réponse
CREATE TABLE IF NOT EXISTS `réponse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `‪idQ` int(11) DEFAULT NULL,
  `idU` int(11) DEFAULT NULL,
  `contenue` text,
  PRIMARY KEY (`id`),
  KEY `FK_réponse_question` (`‪idQ`),
  KEY `FK_réponse_utilisateur` (`idU`),
  CONSTRAINT `FK_réponse_question` FOREIGN KEY (`‪idQ`) REFERENCES `question` (`id`),
  CONSTRAINT `FK_réponse_utilisateur` FOREIGN KEY (`idU`) REFERENCES `utilisateur` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table miniprojetphp.réponse : ~0 rows (environ)
/*!40000 ALTER TABLE `réponse` DISABLE KEYS */;
/*!40000 ALTER TABLE `réponse` ENABLE KEYS */;

-- Listage de la structure de la table miniprojetphp. utilisateur
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` text,
  `UserMail` text,
  `UserMdp` text,
  `Admin` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Listage des données de la table miniprojetphp.utilisateur : ~1 rows (environ)
/*!40000 ALTER TABLE `utilisateur` DISABLE KEYS */;
INSERT INTO `utilisateur` (`id`, `UserName`, `UserMail`, `UserMdp`, `Admin`) VALUES
	(1, 'Bastien', 'bastien@test.fr', '12345678', 1);
/*!40000 ALTER TABLE `utilisateur` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
