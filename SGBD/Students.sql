-- Adminer 4.7.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `Etudiants` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `Etudiants`;

DROP TABLE IF EXISTS `Students`;
CREATE TABLE `Students` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Students` (`id`, `nom`, `prenom`) VALUES
(1,	'AHMANE',	'Mourad'),
(2,	'AMZIL',	'Rachida'),
(3,	'ASSOUMANI',	'Yazid'),
(4,	'CHAPUS',	'Mathias'),
(5,	'COIRET',	'Bryan'),
(6,	'COUTAS',	'Axel'),
(7,	'DORE',	'Jérémy'),
(8,	'FLIPO',	'Morgann'),
(9,	'HUGUES',	'Isabelle'),
(10,	'LE COZ',	'Maxime'),
(11,	'NARY',	'Aina'),
(12,	'PARIS',	'Romain'),
(13,	'POMA',	'Yohann'),
(14,	'PONOMARENKO',	'Nicolas'),
(15,	'REBEYROLLE',	'Eric'),
(16,	'SHARMAZANASHVILI',	'Georges'),
(17,	'ZOGHLAMI',	'Mohamed');

-- 2019-03-16 11:25:49
