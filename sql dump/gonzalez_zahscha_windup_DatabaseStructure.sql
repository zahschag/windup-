# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.25)
# Database: windup
# Generation Time: 2013-02-14 03:13:55 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table priority
# ------------------------------------------------------------

DROP TABLE IF EXISTS `priority`;

CREATE TABLE `priority` (
  `priorityId` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `priority` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`priorityId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `priority` WRITE;
/*!40000 ALTER TABLE `priority` DISABLE KEYS */;

INSERT INTO `priority` (`priorityId`, `priority`)
VALUES
	(1,'yes'),
	(2,'No');

/*!40000 ALTER TABLE `priority` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tasks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tasks`;

CREATE TABLE `tasks` (
  `taskId` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `taskTitle` varchar(100) NOT NULL,
  `task` varchar(600) NOT NULL,
  `taskType` varchar(255) NOT NULL,
  `priority` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`taskId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table taskType
# ------------------------------------------------------------

DROP TABLE IF EXISTS `taskType`;

CREATE TABLE `taskType` (
  `taskTypeID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `taskType` varchar(25) NOT NULL DEFAULT '',
  PRIMARY KEY (`taskTypeID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `taskType` WRITE;
/*!40000 ALTER TABLE `taskType` DISABLE KEYS */;

INSERT INTO `taskType` (`taskTypeID`, `taskType`)
VALUES
	(1,'workTask');

/*!40000 ALTER TABLE `taskType` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_fullname` varchar(50) NOT NULL DEFAULT '',
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `user_name` varchar(50) NOT NULL DEFAULT '',
  `user_password` char(32) NOT NULL DEFAULT '',
  `user_salt` char(8) DEFAULT NULL,
  `userStatus` int(1) NOT NULL,
  `userType` int(1) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `UX_NAME_PASSWORD` (`lastname`),
  KEY `UX_NAME` (`user_fullname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table userStatus
# ------------------------------------------------------------

DROP TABLE IF EXISTS `userStatus`;

CREATE TABLE `userStatus` (
  `userStatusId` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userStatus` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`userStatusId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `userStatus` WRITE;
/*!40000 ALTER TABLE `userStatus` DISABLE KEYS */;

INSERT INTO `userStatus` (`userStatusId`, `userStatus`)
VALUES
	(1,'Active'),
	(2,'Deleted');

/*!40000 ALTER TABLE `userStatus` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table userType
# ------------------------------------------------------------

DROP TABLE IF EXISTS `userType`;

CREATE TABLE `userType` (
  `userTypeId` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userType` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`userTypeId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `userType` WRITE;
/*!40000 ALTER TABLE `userType` DISABLE KEYS */;

INSERT INTO `userType` (`userTypeId`, `userType`)
VALUES
	(1,'Administrator'),
	(2,'Client');

/*!40000 ALTER TABLE `userType` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
