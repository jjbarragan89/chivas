-- MySQL dump 10.16  Distrib 10.1.21-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: localhost
-- ------------------------------------------------------
-- Server version	10.1.21-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `pg_admin_action`
--

DROP TABLE IF EXISTS `pg_admin_action`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_admin_action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_admin_action`
--

LOCK TABLES `pg_admin_action` WRITE;
/*!40000 ALTER TABLE `pg_admin_action` DISABLE KEYS */;
/*!40000 ALTER TABLE `pg_admin_action` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pg_admin_brand`
--

DROP TABLE IF EXISTS `pg_admin_brand`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_admin_brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_admin_brand`
--

LOCK TABLES `pg_admin_brand` WRITE;
/*!40000 ALTER TABLE `pg_admin_brand` DISABLE KEYS */;
INSERT INTO `pg_admin_brand` VALUES (1,'Olmeca','2017-06-13 18:15:48'),(2,'Chivas','2017-06-13 18:15:56');
/*!40000 ALTER TABLE `pg_admin_brand` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pg_admin_country`
--

DROP TABLE IF EXISTS `pg_admin_country`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_admin_country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idLanguage` int(11) NOT NULL,
  `idCurrency` int(11) NOT NULL,
  `idTimeZone` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `minAge` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pg_admin_country_pg_admin_language1` (`idLanguage`),
  KEY `fk_pg_admin_country_pg_admin_currency1` (`idCurrency`),
  KEY `fk_pg_admin_country_pg_admin_timezone1` (`idTimeZone`),
  CONSTRAINT `fk_pg_admin_country_pg_admin_currency1` FOREIGN KEY (`idCurrency`) REFERENCES `pg_admin_currency` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pg_admin_country_pg_admin_language1` FOREIGN KEY (`idLanguage`) REFERENCES `pg_admin_language` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pg_admin_country_pg_admin_timezone1` FOREIGN KEY (`idTimeZone`) REFERENCES `pg_admin_time_zone` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_admin_country`
--

LOCK TABLES `pg_admin_country` WRITE;
/*!40000 ALTER TABLE `pg_admin_country` DISABLE KEYS */;
INSERT INTO `pg_admin_country` VALUES (1,6,8,8,'COLOMBIA',18,'2017-06-07 17:08:06');
/*!40000 ALTER TABLE `pg_admin_country` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pg_admin_currency`
--

DROP TABLE IF EXISTS `pg_admin_currency`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_admin_currency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_admin_currency`
--

LOCK TABLES `pg_admin_currency` WRITE;
/*!40000 ALTER TABLE `pg_admin_currency` DISABLE KEYS */;
INSERT INTO `pg_admin_currency` VALUES (1,'	Peso Argentino',NULL,'ARS'),(2,'Dólar australiano',NULL,'AUD'),(3,'Euro',NULL,'EUR'),(4,'Boliviano',NULL,'BOB'),(5,'Dólar Americano',NULL,'USD'),(6,'	Real Brasileño',NULL,'BRL'),(7,'Peso chileno',NULL,'CLP'),(8,'Peso Colombiano',NULL,'COP');
/*!40000 ALTER TABLE `pg_admin_currency` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pg_admin_language`
--

DROP TABLE IF EXISTS `pg_admin_language`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_admin_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_admin_language`
--

LOCK TABLES `pg_admin_language` WRITE;
/*!40000 ALTER TABLE `pg_admin_language` DISABLE KEYS */;
INSERT INTO `pg_admin_language` VALUES (1,'French','2017-06-07 16:32:32'),(2,'German','2017-06-07 16:32:32'),(3,'Italian','2017-06-07 16:32:32'),(4,'Portuguese','2017-06-07 16:32:32'),(5,'Russian','2017-06-07 16:32:32'),(6,'Spanish','2017-06-07 16:32:32'),(7,'English','2017-06-07 16:32:32');
/*!40000 ALTER TABLE `pg_admin_language` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pg_admin_log`
--

DROP TABLE IF EXISTS `pg_admin_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_admin_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idSite` int(11) NOT NULL,
  `idAction` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `status` enum('S','E','P') DEFAULT 'S' COMMENT 'S -> Success\nE -> Error\nP -> Process',
  `date` datetime DEFAULT NULL,
  `environment` enum('S','P') DEFAULT 'S' COMMENT 'S -> Stage\nP -> Production',
  PRIMARY KEY (`id`),
  KEY `fk_pg_admin_log_pg_admin_user1` (`idUser`),
  KEY `fk_pg_admin_log_pg_admin_status1` (`idAction`),
  KEY `fk_pg_admin_log_pg_admin_site1` (`idSite`),
  CONSTRAINT `fk_pg_admin_log_pg_admin_site1` FOREIGN KEY (`idSite`) REFERENCES `pg_admin_site` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pg_admin_log_pg_admin_status1` FOREIGN KEY (`idAction`) REFERENCES `pg_admin_action` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pg_admin_log_pg_admin_user1` FOREIGN KEY (`idUser`) REFERENCES `pg_admin_user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_admin_log`
--

LOCK TABLES `pg_admin_log` WRITE;
/*!40000 ALTER TABLE `pg_admin_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `pg_admin_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pg_admin_mdule_by_site`
--

DROP TABLE IF EXISTS `pg_admin_mdule_by_site`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_admin_mdule_by_site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idModule` int(11) NOT NULL,
  `idSite` int(11) NOT NULL,
  `status` enum('D','E') DEFAULT 'D' COMMENT 'E -> Enabled\nD -> Disabled',
  `updateDate` datetime DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pg_admin_country_by_module_pg_admin_module1` (`idModule`),
  KEY `fk_pg_admin_brand_by_module_pg_admin_country_by_brand1` (`idSite`),
  CONSTRAINT `fk_pg_admin_brand_by_module_pg_admin_country_by_brand1` FOREIGN KEY (`idSite`) REFERENCES `pg_admin_site` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pg_admin_country_by_module_pg_admin_module1` FOREIGN KEY (`idModule`) REFERENCES `pg_admin_module` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_admin_mdule_by_site`
--

LOCK TABLES `pg_admin_mdule_by_site` WRITE;
/*!40000 ALTER TABLE `pg_admin_mdule_by_site` DISABLE KEYS */;
/*!40000 ALTER TABLE `pg_admin_mdule_by_site` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pg_admin_module`
--

DROP TABLE IF EXISTS `pg_admin_module`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_admin_module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(75) DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL,
  `status` enum('E','D') DEFAULT 'E' COMMENT 'E -> Enabled\nD -> Disabled',
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_admin_module`
--

LOCK TABLES `pg_admin_module` WRITE;
/*!40000 ALTER TABLE `pg_admin_module` DISABLE KEYS */;
/*!40000 ALTER TABLE `pg_admin_module` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pg_admin_profile`
--

DROP TABLE IF EXISTS `pg_admin_profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_admin_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `status` enum('E','D') DEFAULT 'E' COMMENT 'E -> Enabled\nD -> Disabled',
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_admin_profile`
--

LOCK TABLES `pg_admin_profile` WRITE;
/*!40000 ALTER TABLE `pg_admin_profile` DISABLE KEYS */;
/*!40000 ALTER TABLE `pg_admin_profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pg_admin_site`
--

DROP TABLE IF EXISTS `pg_admin_site`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_admin_site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idCountry` int(11) NOT NULL,
  `idBrand` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `gtmHead` text,
  `gtmBody` text,
  `domain` varchar(150) DEFAULT NULL,
  `status` enum('E','D') DEFAULT 'E' COMMENT 'E -> Enabled\nD -> Disabled',
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pg_admin_country_by_brand_pg_admin_country1` (`idCountry`),
  KEY `fk_pg_admin_country_by_brand_pg_admin_brand1` (`idBrand`),
  CONSTRAINT `fk_pg_admin_country_by_brand_pg_admin_brand1` FOREIGN KEY (`idBrand`) REFERENCES `pg_admin_brand` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pg_admin_country_by_brand_pg_admin_country1` FOREIGN KEY (`idCountry`) REFERENCES `pg_admin_country` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_admin_site`
--

LOCK TABLES `pg_admin_site` WRITE;
/*!40000 ALTER TABLE `pg_admin_site` DISABLE KEYS */;
INSERT INTO `pg_admin_site` VALUES (1,1,1,'Olmeca','aquí va codigo de analitycs en el head','aquí va el codigo de analitycs del body','aquí va ','E','2017-06-13 18:20:18');
/*!40000 ALTER TABLE `pg_admin_site` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pg_admin_theme`
--

DROP TABLE IF EXISTS `pg_admin_theme`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_admin_theme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(125) DEFAULT NULL,
  `thumbnail` varchar(45) DEFAULT NULL,
  `summary` text,
  `link` varchar(150) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_admin_theme`
--

LOCK TABLES `pg_admin_theme` WRITE;
/*!40000 ALTER TABLE `pg_admin_theme` DISABLE KEYS */;
INSERT INTO `pg_admin_theme` VALUES (1,'Theme-v1',NULL,'This is the first theming system in order to provide an initial look feel','themes/theme-v1','2017-06-07 11:59:13');
/*!40000 ALTER TABLE `pg_admin_theme` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pg_admin_theme_by_site`
--

DROP TABLE IF EXISTS `pg_admin_theme_by_site`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_admin_theme_by_site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idTheme` int(11) NOT NULL,
  `idSite` int(11) NOT NULL,
  `status` enum('D','E') DEFAULT 'D' COMMENT 'E -> Enabled\nD -> Disabled',
  `updateDate` timestamp NULL DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pg_admin_country_by_theme_pg_admin_theme` (`idTheme`),
  KEY `fk_pg_admin_country_by_theme_pg_admin_country_by_brand1` (`idSite`),
  CONSTRAINT `fk_pg_admin_country_by_theme_pg_admin_country_by_brand1` FOREIGN KEY (`idSite`) REFERENCES `pg_admin_site` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pg_admin_country_by_theme_pg_admin_theme` FOREIGN KEY (`idTheme`) REFERENCES `pg_admin_theme` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_admin_theme_by_site`
--

LOCK TABLES `pg_admin_theme_by_site` WRITE;
/*!40000 ALTER TABLE `pg_admin_theme_by_site` DISABLE KEYS */;
/*!40000 ALTER TABLE `pg_admin_theme_by_site` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pg_admin_time_zone`
--

DROP TABLE IF EXISTS `pg_admin_time_zone`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_admin_time_zone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gmt` varchar(10) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_admin_time_zone`
--

LOCK TABLES `pg_admin_time_zone` WRITE;
/*!40000 ALTER TABLE `pg_admin_time_zone` DISABLE KEYS */;
INSERT INTO `pg_admin_time_zone` VALUES (1,'-12','2017-06-07 16:42:34'),(2,'-11','2017-06-07 16:42:34'),(3,'-10','2017-06-07 16:42:34'),(4,'-9','2017-06-07 16:42:34'),(5,'-8','2017-06-07 16:42:34'),(6,'-7','2017-06-07 16:42:34'),(7,'-6','2017-06-07 16:42:34'),(8,'-5','2017-06-07 16:42:34'),(9,'-4','2017-06-07 16:42:34'),(10,'-3','2017-06-07 16:42:34'),(11,'-2','2017-06-07 16:42:34'),(12,'-1','2017-06-07 16:42:34'),(13,'0','2017-06-07 16:42:34'),(14,'1','2017-06-07 16:42:34'),(15,'2','2017-06-07 16:42:34'),(16,'3','2017-06-07 16:42:34'),(17,'4','2017-06-07 16:42:34'),(18,'5','2017-06-07 16:42:34'),(19,'6','2017-06-07 16:42:34'),(20,'7','2017-06-07 16:42:34'),(21,'8','2017-06-07 16:42:34'),(22,'9','2017-06-07 16:42:34'),(23,'10','2017-06-07 16:42:34'),(24,'11','2017-06-07 16:42:34'),(25,'12','2017-06-07 16:42:34');
/*!40000 ALTER TABLE `pg_admin_time_zone` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pg_admin_user`
--

DROP TABLE IF EXISTS `pg_admin_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_admin_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idProfile` int(11) NOT NULL,
  `idSite` int(11) NOT NULL,
  `firstName` varchar(125) DEFAULT NULL,
  `lastName` varchar(125) DEFAULT NULL,
  `email` varchar(180) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `status` enum('E','D') DEFAULT 'E' COMMENT 'E -> Enabled\nD -> Disabled',
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `fk_pg_admin_user_pg_admin_profile1` (`idProfile`),
  KEY `fk_pg_admin_user_pg_admin_site1` (`idSite`),
  CONSTRAINT `fk_pg_admin_user_pg_admin_profile1` FOREIGN KEY (`idProfile`) REFERENCES `pg_admin_profile` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pg_admin_user_pg_admin_site1` FOREIGN KEY (`idSite`) REFERENCES `pg_admin_site` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_admin_user`
--

LOCK TABLES `pg_admin_user` WRITE;
/*!40000 ALTER TABLE `pg_admin_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `pg_admin_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pg_answer_form`
--

DROP TABLE IF EXISTS `pg_answer_form`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_answer_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idClient` int(11) NOT NULL,
  `idQuestion` int(11) NOT NULL,
  `value` text,
  `status` enum('E','D') DEFAULT 'E' COMMENT 'E -> Enabled\nD -> Disabled',
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pg_answer_form_pg_client1` (`idClient`),
  KEY `fk_pg_answer_form_pg_question1` (`idQuestion`),
  CONSTRAINT `fk_pg_answer_form_pg_client1` FOREIGN KEY (`idClient`) REFERENCES `pg_client` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pg_answer_form_pg_question1` FOREIGN KEY (`idQuestion`) REFERENCES `pg_question` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_answer_form`
--

LOCK TABLES `pg_answer_form` WRITE;
/*!40000 ALTER TABLE `pg_answer_form` DISABLE KEYS */;
/*!40000 ALTER TABLE `pg_answer_form` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pg_bill`
--

DROP TABLE IF EXISTS `pg_bill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_bill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idClient` int(11) NOT NULL,
  `idParty` int(11) DEFAULT NULL,
  `totalPrice` varchar(45) DEFAULT NULL,
  `reference` varchar(150) DEFAULT NULL,
  `sign` varchar(170) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_bill_pg_client1` (`idClient`),
  KEY `fk_bill_pg_party1` (`idParty`),
  CONSTRAINT `fk_bill_pg_client1` FOREIGN KEY (`idClient`) REFERENCES `pg_client` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_bill_pg_party1` FOREIGN KEY (`idParty`) REFERENCES `pg_party` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_bill`
--

LOCK TABLES `pg_bill` WRITE;
/*!40000 ALTER TABLE `pg_bill` DISABLE KEYS */;
/*!40000 ALTER TABLE `pg_bill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pg_capacity`
--

DROP TABLE IF EXISTS `pg_capacity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_capacity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idCity` int(11) NOT NULL,
  `partyDay` date DEFAULT NULL,
  `maxCapacity` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pg_capacity_pg_city1` (`idCity`),
  CONSTRAINT `fk_pg_capacity_pg_city1` FOREIGN KEY (`idCity`) REFERENCES `pg_city` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='	';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_capacity`
--

LOCK TABLES `pg_capacity` WRITE;
/*!40000 ALTER TABLE `pg_capacity` DISABLE KEYS */;
/*!40000 ALTER TABLE `pg_capacity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pg_city`
--

DROP TABLE IF EXISTS `pg_city`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `maxCapacity` int(11) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_city`
--

LOCK TABLES `pg_city` WRITE;
/*!40000 ALTER TABLE `pg_city` DISABLE KEYS */;
/*!40000 ALTER TABLE `pg_city` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pg_client`
--

DROP TABLE IF EXISTS `pg_client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(150) DEFAULT NULL,
  `lastName` varchar(150) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL,
  `cellphone` varchar(15) DEFAULT NULL,
  `identification` varchar(45) DEFAULT NULL,
  `gender` enum('M','F') DEFAULT NULL COMMENT 'M -> Male\nF -> Female',
  `horusHash` varchar(150) DEFAULT NULL,
  `horusId` varchar(150) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_client`
--

LOCK TABLES `pg_client` WRITE;
/*!40000 ALTER TABLE `pg_client` DISABLE KEYS */;
/*!40000 ALTER TABLE `pg_client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pg_custom_form`
--

DROP TABLE IF EXISTS `pg_custom_form`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_custom_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) DEFAULT NULL,
  `description` text,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_custom_form`
--

LOCK TABLES `pg_custom_form` WRITE;
/*!40000 ALTER TABLE `pg_custom_form` DISABLE KEYS */;
/*!40000 ALTER TABLE `pg_custom_form` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pg_file`
--

DROP TABLE IF EXISTS `pg_file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `typeFile` enum('fonts','image','js','css') DEFAULT NULL,
  `idRoute` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idRouteFile` (`idRoute`),
  CONSTRAINT `idRouteFile` FOREIGN KEY (`idRoute`) REFERENCES `pg_route` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_file`
--

LOCK TABLES `pg_file` WRITE;
/*!40000 ALTER TABLE `pg_file` DISABLE KEYS */;
/*!40000 ALTER TABLE `pg_file` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pg_form_select_option`
--

DROP TABLE IF EXISTS `pg_form_select_option`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_form_select_option` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idQuestion` int(11) NOT NULL,
  `value` varchar(50) DEFAULT NULL,
  `status` enum('E','D') DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pg_form_select_option_pg_cuestion1` (`idQuestion`),
  CONSTRAINT `fk_pg_form_select_option_pg_cuestion1` FOREIGN KEY (`idQuestion`) REFERENCES `pg_question` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_form_select_option`
--

LOCK TABLES `pg_form_select_option` WRITE;
/*!40000 ALTER TABLE `pg_form_select_option` DISABLE KEYS */;
/*!40000 ALTER TABLE `pg_form_select_option` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pg_invite`
--

DROP TABLE IF EXISTS `pg_invite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_invite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quantity` int(11) DEFAULT NULL,
  `cost` varchar(45) DEFAULT NULL,
  `description` text,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_invite`
--

LOCK TABLES `pg_invite` WRITE;
/*!40000 ALTER TABLE `pg_invite` DISABLE KEYS */;
/*!40000 ALTER TABLE `pg_invite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pg_location`
--

DROP TABLE IF EXISTS `pg_location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idCity` int(11) NOT NULL,
  `place` text,
  `cost` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pg_place_pg_city1` (`idCity`),
  CONSTRAINT `fk_pg_place_pg_city1` FOREIGN KEY (`idCity`) REFERENCES `pg_city` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_location`
--

LOCK TABLES `pg_location` WRITE;
/*!40000 ALTER TABLE `pg_location` DISABLE KEYS */;
/*!40000 ALTER TABLE `pg_location` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pg_party`
--

DROP TABLE IF EXISTS `pg_party`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_party` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idLocation` int(11) NOT NULL,
  `idCity` int(11) NOT NULL,
  `idInvite` int(11) NOT NULL,
  `address` varchar(75) DEFAULT NULL,
  `occasion` varchar(100) DEFAULT NULL,
  `neighborhood` varchar(150) DEFAULT NULL,
  `status` enum('U','D') DEFAULT 'U' COMMENT 'U -> Undone\nD -> Done',
  `partyDate` datetime DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pg_party_pg_space1` (`idInvite`),
  KEY `fk_pg_party_pg_place1` (`idLocation`),
  KEY `fk_pg_party_pg_city1` (`idCity`),
  CONSTRAINT `fk_pg_party_pg_city1` FOREIGN KEY (`idCity`) REFERENCES `pg_city` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pg_party_pg_place1` FOREIGN KEY (`idLocation`) REFERENCES `pg_location` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pg_party_pg_space1` FOREIGN KEY (`idInvite`) REFERENCES `pg_invite` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_party`
--

LOCK TABLES `pg_party` WRITE;
/*!40000 ALTER TABLE `pg_party` DISABLE KEYS */;
/*!40000 ALTER TABLE `pg_party` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pg_payu_form`
--

DROP TABLE IF EXISTS `pg_payu_form`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_payu_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idBill` int(11) NOT NULL,
  `merchantId` varchar(150) DEFAULT NULL,
  `responseCodePol` varchar(150) DEFAULT NULL,
  `transactionDate` varchar(150) DEFAULT NULL,
  `ccNumber` varchar(150) DEFAULT NULL,
  `ccHolder` varchar(150) DEFAULT NULL,
  `errorCodeBank` varchar(150) DEFAULT NULL,
  `billingcountry` varchar(150) DEFAULT NULL,
  `description` varchar(150) DEFAULT NULL,
  `value` varchar(150) DEFAULT NULL,
  `administrativeFee` varchar(150) DEFAULT NULL,
  `paymentMethodType` varchar(150) NOT NULL,
  `emailBuyer` varchar(150) DEFAULT NULL,
  `responseMessagePol` varchar(150) DEFAULT NULL,
  `errorMessageBank` varchar(150) DEFAULT NULL,
  `transactionId` varchar(150) DEFAULT NULL,
  `sign` varchar(150) DEFAULT NULL,
  `paymentMethod` varchar(150) DEFAULT NULL,
  `billingAddress` varchar(150) DEFAULT NULL,
  `paymentMethodName` varchar(150) DEFAULT NULL,
  `statePol` varchar(150) DEFAULT NULL,
  `date` varchar(150) DEFAULT NULL,
  `nicknameBuyer` varchar(150) DEFAULT NULL,
  `referencePol` varchar(150) DEFAULT NULL,
  `currency` varchar(150) DEFAULT NULL,
  `risk` varchar(150) DEFAULT NULL,
  `shippingAddress` varchar(150) DEFAULT NULL,
  `bankId` varchar(150) DEFAULT NULL,
  `paymentRequestState` varchar(150) DEFAULT NULL,
  `customerNumber` varchar(150) DEFAULT NULL,
  `administrativeFeeBase` varchar(150) DEFAULT NULL,
  `attempts` varchar(150) DEFAULT NULL,
  `exchangeRate` varchar(150) DEFAULT NULL,
  `installmentsNumber` varchar(150) DEFAULT NULL,
  `paymentMethodId` varchar(150) DEFAULT NULL,
  `ip` varchar(150) DEFAULT NULL,
  `billingCity` varchar(150) DEFAULT NULL,
  `pseReference1` varchar(150) DEFAULT NULL,
  `cus` varchar(150) DEFAULT NULL,
  `referenceSale` varchar(150) DEFAULT NULL,
  `authorizationCode` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`,`paymentMethodType`),
  KEY `fk_pg_payu_form_pg_bill1` (`idBill`),
  CONSTRAINT `fk_pg_payu_form_pg_bill1` FOREIGN KEY (`idBill`) REFERENCES `pg_bill` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_payu_form`
--

LOCK TABLES `pg_payu_form` WRITE;
/*!40000 ALTER TABLE `pg_payu_form` DISABLE KEYS */;
/*!40000 ALTER TABLE `pg_payu_form` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pg_product`
--

DROP TABLE IF EXISTS `pg_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) DEFAULT NULL,
  `description` text,
  `price` varchar(45) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `status` enum('E','D') DEFAULT 'E' COMMENT 'E -> Enabled\nD -> Disabled',
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_product`
--

LOCK TABLES `pg_product` WRITE;
/*!40000 ALTER TABLE `pg_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `pg_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pg_product_by_bill`
--

DROP TABLE IF EXISTS `pg_product_by_bill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_product_by_bill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idBill` int(11) NOT NULL,
  `idProduct` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pg_product_by_bill_bill1` (`idBill`),
  KEY `fk_pg_product_by_bill_pg_product1` (`idProduct`),
  CONSTRAINT `fk_pg_product_by_bill_bill1` FOREIGN KEY (`idBill`) REFERENCES `pg_bill` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pg_product_by_bill_pg_product1` FOREIGN KEY (`idProduct`) REFERENCES `pg_product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_product_by_bill`
--

LOCK TABLES `pg_product_by_bill` WRITE;
/*!40000 ALTER TABLE `pg_product_by_bill` DISABLE KEYS */;
/*!40000 ALTER TABLE `pg_product_by_bill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pg_question`
--

DROP TABLE IF EXISTS `pg_question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idCustomForm` int(11) NOT NULL,
  `idTypeField` int(11) NOT NULL,
  `value` text,
  `order` int(11) DEFAULT NULL,
  `status` enum('E','D') DEFAULT 'E' COMMENT 'E -> Enabled\nD -> Disabled',
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pg_cuestion_pg_type_field1_idx` (`idTypeField`),
  KEY `fk_pg_cuestion_pg_custom_form1_idx` (`idCustomForm`),
  CONSTRAINT `fk_pg_cuestion_pg_custom_form1` FOREIGN KEY (`idCustomForm`) REFERENCES `pg_custom_form` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pg_cuestion_pg_type_field1` FOREIGN KEY (`idTypeField`) REFERENCES `pg_type_field` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_question`
--

LOCK TABLES `pg_question` WRITE;
/*!40000 ALTER TABLE `pg_question` DISABLE KEYS */;
/*!40000 ALTER TABLE `pg_question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pg_region`
--

DROP TABLE IF EXISTS `pg_region`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_region` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `regionName` varchar(150) NOT NULL,
  `html` longtext NOT NULL,
  `state` enum('D','E') NOT NULL DEFAULT 'E',
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_region`
--

LOCK TABLES `pg_region` WRITE;
/*!40000 ALTER TABLE `pg_region` DISABLE KEYS */;
INSERT INTO `pg_region` VALUES (1,'header','  <header class=\"container-fluid u-no-border header-agegate\">\r\n    <div class=\"row\">\r\n      <h2 class=\"logo\"><img src=\"images/logo-chivas.png\" alt=\"Chivas Home Party\" title=\"Chivas Home Party\" class=\"img-responsive\"></h2>\r\n    </div>\r\n    <div class=\"col-lg-4 col-md-4 col-sm-6 col-lg-offset-4 col-md-offset-4 col-sm-offset-3\">\r\n      <h2 class=\"text-center\">Bienvenido, para ingresar debes ser mayor de edad</h2>\r\n    </div>\r\n  </header>','E','2017-05-30 19:22:46'),(2,'footer','  <footer class=\"container-fluid u-no-border\"><img src=\"images/legal.svg\" alt=\"Pernod Ricard. Prohíbese el expendio de bebidas embriagantes a menores de edad. El exceso de alcohol es perjudicial para la salud. Si tomas, no manejes.\" title=\"Pernod Ricard. Prohíbese el expendio de bebidas embriagantes a menores de edad. El exceso de alcohol es perjudicial para la salud. Si tomas, no manejes.\" class=\"center-block img-responsive\"></footer>','E','2017-05-30 19:23:45'),(3,'content','<section class=\"container-fluid\">\r\n    <div class=\"row\">\r\n      <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12 col-lg-offset-4 col-md-offset-4 col-sm-offset-4\"><a href=\"\" class=\"fb fb-login center-block\">Ingresa con Facebook</a>\r\n        <hr>\r\n        <form method=\"\" class=\"gate-age\">\r\n          <label for=\"year\">Año de nacimiento</label>\r\n          <select name=\"year\" class=\"year\">\r\n            <option value=\"\">AAAA</option>\r\n            <option value=\"\">1997</option>\r\n            <option value=\"\">1998</option>\r\n            <option value=\"\">1999</option>\r\n          </select>\r\n          <select name=\"mes\" class=\"hidden month\">\r\n            <option value=\"\">Mes</option>\r\n            <option value=\"\">1997</option>\r\n            <option value=\"\">1998</option>\r\n            <option value=\"\">1999</option>\r\n          </select>\r\n          <div class=\"checkbox\">\r\n            <input type=\"checkbox\" name=\"recordarme\" value=\"recordarme\">\r\n            <label for=\"recordarme\">Recordarme </label>\r\n          </div>\r\n          <button class=\"btn login-age\">\r\n            <i class=\"icon icon-lock\"></i>\r\n            Ingresar\r\n            \r\n          </button>\r\n        </form>\r\n      </div>\r\n      <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1\">\r\n        <p class=\"text-center\">\r\n          Al ingresar a este sitio, aceptas nuestra <a href=\"\">Política de privacidad</a>, los <a>Términos y condiciones</a> y la <a>Política de cookies</a>\r\n          \r\n        </p>\r\n        <p class=\"text-center\">\r\n          <strong>En Chivas, tenemos el compromiso de beber con responsabilidad.</strong>\r\n          \r\n          \r\n        </p>\r\n      </div>\r\n    </div>\r\n  </section>','E','2017-05-30 19:24:29'),(4,'header','<p>Aqui va el contenido del head</p>','E','2017-05-30 19:22:46'),(5,'footer','<p>aquí va el contenido del footer</p>','E','2017-05-30 19:23:45'),(6,'content','<p>aquí va el contenido principal</p>','E','2017-05-30 19:24:29'),(7,'menu','<!--Menu-->\r\n  <div class=\"menu\">\r\n    <button class=\"menu-toggle\"><span>Menú</span></button>\r\n    <nav>\r\n      <ul class=\"menu\">\r\n        <li><a href=\"fiesta.php\">Compra tu Chivas Home Party</a></li>\r\n        <li><a href=\"galeria.php\">Galería</a></li>\r\n        <li><a href=\"faq.php\">Preguntas y Respuestas</a></li>\r\n        <li><a href=\"terminos.php\">Términos &amp; Condiciones</a></li>\r\n        <li><a href=\"politica.php\">Política de uso de datos</a></li>\r\n      </ul>\r\n    </nav><a href=\"fiesta.php\" role=\"button\" class=\"btn btn-reservar\">Reservar</a>\r\n  </div>\r\n  <!--/-Menu-->','E','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `pg_region` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pg_regions_by_sections`
--

DROP TABLE IF EXISTS `pg_regions_by_sections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_regions_by_sections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idRoute` int(11) NOT NULL,
  `idRegion` int(11) NOT NULL,
  `position` int(5) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idMenu` (`idRoute`),
  KEY `idRegion` (`idRegion`),
  CONSTRAINT `pg_regions_by_sections_ibfk_1` FOREIGN KEY (`idRoute`) REFERENCES `pg_route` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `pg_regions_by_sections_ibfk_2` FOREIGN KEY (`idRegion`) REFERENCES `pg_region` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_regions_by_sections`
--

LOCK TABLES `pg_regions_by_sections` WRITE;
/*!40000 ALTER TABLE `pg_regions_by_sections` DISABLE KEYS */;
INSERT INTO `pg_regions_by_sections` VALUES (1,1,1,1,'2017-05-30 19:26:05'),(2,1,2,2,'2017-05-30 19:26:21'),(3,1,3,3,'2017-05-30 19:26:34'),(5,2,4,1,'2017-06-02 17:11:47'),(8,2,5,2,'2017-06-02 17:11:47'),(9,2,6,3,'2017-06-02 17:11:47'),(10,1,7,4,'2017-06-05 17:24:09');
/*!40000 ALTER TABLE `pg_regions_by_sections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pg_route`
--

DROP TABLE IF EXISTS `pg_route`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_route` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sectionName` varchar(100) NOT NULL,
  `url` varchar(50) NOT NULL,
  `state` enum('D','E') NOT NULL DEFAULT 'E',
  `order` int(5) NOT NULL,
  `date` datetime NOT NULL,
  `idTheme` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idThemesRoute` (`idTheme`),
  CONSTRAINT `idThemesRoute` FOREIGN KEY (`idTheme`) REFERENCES `pg_admin_theme` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_route`
--

LOCK TABLES `pg_route` WRITE;
/*!40000 ALTER TABLE `pg_route` DISABLE KEYS */;
INSERT INTO `pg_route` VALUES (1,'ageRate','controllers/ageRate','E',0,'2017-05-30 19:22:21',1),(2,'home','controller/home','E',0,'2017-05-31 19:04:17',1);
/*!40000 ALTER TABLE `pg_route` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pg_type_field`
--

DROP TABLE IF EXISTS `pg_type_field`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_type_field` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(75) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_type_field`
--

LOCK TABLES `pg_type_field` WRITE;
/*!40000 ALTER TABLE `pg_type_field` DISABLE KEYS */;
/*!40000 ALTER TABLE `pg_type_field` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-20 12:29:15
