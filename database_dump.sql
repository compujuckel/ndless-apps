-- MySQL dump 10.16  Distrib 10.1.48-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: 172.20.0.2    Database: laravel
-- ------------------------------------------------------
-- Server version	10.3.9-MariaDB-1:10.3.9+maria~bionic

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `authors_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authors`
--

LOCK TABLES `authors` WRITE;
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;
INSERT INTO `authors` VALUES (1,'Anonymous','0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'A.J. Orians','0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,'Andrea Griffini','0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,'apcalc','0000-00-00 00:00:00','0000-00-00 00:00:00'),(5,'bwang','0000-00-00 00:00:00','0000-00-00 00:00:00'),(6,'bsl','0000-00-00 00:00:00','0000-00-00 00:00:00'),(7,'critor','0000-00-00 00:00:00','0000-00-00 00:00:00'),(8,'calc84maniac','0000-00-00 00:00:00','0000-00-00 00:00:00'),(9,'Chang Cao','0000-00-00 00:00:00','0000-00-00 00:00:00'),(10,'Chockosta','0000-00-00 00:00:00','0000-00-00 00:00:00'),(11,'compu','0000-00-00 00:00:00','0000-00-00 00:00:00'),(12,'ExtendeD','0000-00-00 00:00:00','0000-00-00 00:00:00'),(13,'David Olofson','0000-00-00 00:00:00','0000-00-00 00:00:00'),(14,'Jim Bauwens','0000-00-00 00:00:00','0000-00-00 00:00:00'),(15,'Excale','0000-00-00 00:00:00','0000-00-00 00:00:00'),(16,'Goplat','0000-00-00 00:00:00','0000-00-00 00:00:00'),(17,'hoffa','0000-00-00 00:00:00','0000-00-00 00:00:00'),(18,'Levak','0000-00-00 00:00:00','0000-00-00 00:00:00'),(19,'Lionel Debroux','0000-00-00 00:00:00','0000-00-00 00:00:00'),(20,'Thomas Nussbaumer','0000-00-00 00:00:00','0000-00-00 00:00:00'),(21,'lkj','0000-00-00 00:00:00','0000-00-00 00:00:00'),(22,'Luc H','0000-00-00 00:00:00','0000-00-00 00:00:00'),(23,'Matrefeytontias','0000-00-00 00:00:00','0000-00-00 00:00:00'),(24,'Mrakoplaz','0000-00-00 00:00:00','0000-00-00 00:00:00'),(25,'Nick Disabato','0000-00-00 00:00:00','0000-00-00 00:00:00'),(26,'Odo Bogdan','0000-00-00 00:00:00','0000-00-00 00:00:00'),(27,'Prog New','0000-00-00 00:00:00','0000-00-00 00:00:00'),(28,'Rasterman','0000-00-00 00:00:00','0000-00-00 00:00:00'),(29,'Sam101','0000-00-00 00:00:00','0000-00-00 00:00:00'),(30,'shrear','0000-00-00 00:00:00','0000-00-00 00:00:00'),(31,'SolusIpse','0000-00-00 00:00:00','0000-00-00 00:00:00'),(32,'SpiroH','0000-00-00 00:00:00','0000-00-00 00:00:00'),(33,'tangrs','0000-00-00 00:00:00','0000-00-00 00:00:00'),(34,'totorigolo','0000-00-00 00:00:00','0000-00-00 00:00:00'),(35,'whatkindofausernameisthis','0000-00-00 00:00:00','0000-00-00 00:00:00'),(36,'wRieDen','0000-00-00 00:00:00','0000-00-00 00:00:00'),(37,'Juju','0000-00-00 00:00:00','0000-00-00 00:00:00'),(40,'jacobly','0000-00-00 00:00:00','0000-00-00 00:00:00'),(41,'Vogtinator','0000-00-00 00:00:00','0000-00-00 00:00:00'),(42,'Diameter','0000-00-00 00:00:00','0000-00-00 00:00:00'),(43,'epic7','0000-00-00 00:00:00','0000-00-00 00:00:00'),(44,'alberthrocks','0000-00-00 00:00:00','0000-00-00 00:00:00'),(45,'Hayleia','0000-00-00 00:00:00','0000-00-00 00:00:00'),(46,'rwill','2014-09-15 14:10:01','2014-09-15 14:10:01'),(47,'gameblabla','2014-09-15 14:16:56','2014-09-15 14:16:56'),(48,'RedHat','2014-09-15 14:18:12','2014-09-15 14:18:12'),(49,'Legimet','2014-09-15 14:22:11','2014-09-15 14:22:11'),(50,'CiriousJoker','2014-09-15 14:27:41','2014-09-15 14:27:41'),(51,'AnderainLovelace','2014-09-15 14:42:45','2014-09-15 14:42:45'),(52,'nbzwt','2014-09-15 14:50:00','2014-09-15 14:50:00'),(53,'pimathbrainiac','2014-09-15 15:02:54','2014-09-15 15:02:54'),(54,'pierrotdu18','2014-09-16 11:07:43','2014-09-16 11:07:43'),(55,'Spenceboy98','2016-01-03 12:00:16','2016-01-03 12:00:16'),(56,'Bernard Parisse','2016-01-03 12:43:49','2016-01-03 12:43:49'),(57,'adriweb','2016-01-03 12:43:56','2016-01-03 12:43:56');
/*!40000 ALTER TABLE `authors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (3,'fa-code'),(5,'fa-cogs'),(1,'fa-gamepad'),(4,'fa-rocket'),(2,'fa-wrench');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compatibility`
--

DROP TABLE IF EXISTS `compatibility`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compatibility` (
  `project` int(10) unsigned NOT NULL,
  `version` int(10) unsigned NOT NULL,
  PRIMARY KEY (`project`,`version`),
  KEY `compatibility_version_foreign` (`version`),
  CONSTRAINT `compatibility_project_foreign` FOREIGN KEY (`project`) REFERENCES `projects` (`id`) ON DELETE CASCADE,
  CONSTRAINT `compatibility_version_foreign` FOREIGN KEY (`version`) REFERENCES `ndless` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compatibility`
--

LOCK TABLES `compatibility` WRITE;
/*!40000 ALTER TABLE `compatibility` DISABLE KEYS */;
INSERT INTO `compatibility` VALUES (1,3),(2,3),(3,4),(3,5),(3,11),(3,12),(3,13),(3,14),(4,3),(5,3),(6,4),(6,5),(7,4),(7,5),(8,3),(11,4),(11,5),(11,11),(11,12),(11,13),(11,14),(12,4),(12,5),(12,11),(12,12),(12,13),(12,14),(15,4),(15,5),(15,11),(15,12),(15,13),(15,14),(16,4),(16,5),(16,11),(16,12),(16,13),(16,14),(19,1),(20,1),(23,3),(24,3),(25,1),(26,1),(27,1),(28,3),(29,3),(30,3),(31,2),(32,1),(33,1),(35,4),(35,5),(36,4),(36,5),(36,11),(36,12),(36,13),(36,14),(37,3),(38,3),(39,4),(39,5),(39,11),(39,12),(39,13),(39,14),(40,4),(40,5),(40,11),(40,12),(40,13),(40,14),(41,3),(42,3),(43,2),(44,4),(44,5),(45,4),(45,5),(45,11),(45,12),(45,13),(45,14),(46,3),(47,4),(47,5),(47,11),(47,12),(47,13),(47,14),(49,4),(49,5),(49,11),(49,12),(49,13),(49,14),(50,4),(50,5),(50,11),(50,12),(50,13),(50,14),(51,4),(51,5),(52,4),(52,5),(52,11),(52,12),(52,13),(52,14),(53,4),(53,5),(53,11),(53,12),(53,13),(53,14),(54,3),(56,4),(56,5),(56,11),(56,12),(56,13),(56,14),(57,3),(58,4),(58,5),(58,11),(58,12),(58,13),(58,14),(60,4),(61,4),(61,5),(62,4),(62,5),(63,4),(63,5),(64,4),(64,5),(64,11),(64,12),(64,13),(64,14),(65,4),(65,5),(65,11),(65,12),(65,13),(65,14),(66,3),(67,4),(67,5),(67,11),(67,12),(67,13),(67,14),(68,3),(69,3),(70,3),(71,3),(72,4),(72,5),(72,11),(72,12),(72,13),(72,14),(73,3),(74,3),(75,3),(76,4),(76,5),(76,11),(76,12),(76,13),(76,14),(77,3),(78,3),(79,4),(79,5),(79,11),(79,12),(79,13),(79,14),(80,3),(81,4),(82,4),(83,3),(84,4),(84,5),(85,4),(85,5),(86,4),(87,1),(88,3),(89,4),(90,1),(91,3),(92,4),(93,2),(94,4),(94,5),(95,4),(95,5),(96,4),(96,5),(96,11),(96,12),(96,13),(96,14),(97,3),(98,4),(98,5),(99,4),(99,5),(99,11),(99,12),(99,13),(99,14),(100,4),(100,5),(100,11),(100,12),(100,13),(100,14),(101,4),(101,5),(101,11),(101,12),(101,13),(101,14),(102,4),(102,5),(102,11),(102,12),(102,13),(102,14),(103,1),(103,2),(103,3),(103,4),(103,5),(103,6),(103,9),(103,10),(103,11),(103,12),(103,13),(103,14),(104,4),(105,4),(105,5),(106,4),(107,4),(108,4),(108,5),(108,11),(108,12),(108,13),(108,14),(109,4),(109,5),(110,4),(111,4),(111,5),(112,4),(112,5),(113,4),(113,5),(113,11),(113,12),(113,13),(113,14),(115,4),(116,4),(116,5),(116,11),(116,12),(116,13),(116,14),(117,4),(117,5),(117,11),(117,12),(117,13),(117,14),(118,4),(118,5),(118,11),(118,12),(118,13),(118,14),(119,4),(119,5),(119,11),(119,12),(119,13),(119,14),(120,4),(120,5),(120,11),(120,12),(120,13),(120,14),(121,4),(121,5),(121,11),(121,12),(121,13),(121,14),(122,4),(122,5),(122,11),(122,12),(122,13),(122,14),(124,4),(124,5),(124,11),(124,12),(124,13),(124,14),(125,4),(125,5),(125,11),(125,12),(125,13),(125,14),(126,4),(126,5),(126,11),(126,12),(126,13),(126,14),(127,4),(127,5),(127,11),(127,12),(127,13),(127,14),(128,4),(128,5),(128,11),(128,12),(128,13),(128,14),(129,4),(129,5),(129,11),(129,12),(129,13),(129,14),(130,4),(130,5),(130,11),(130,12),(130,13),(130,14),(131,4),(131,5),(131,11),(131,12),(131,13),(131,14),(132,4),(132,5),(132,11),(132,12),(132,13),(132,14),(133,4),(133,5),(133,11),(133,12),(133,13),(133,14),(134,4),(134,5),(134,11),(134,12),(134,13),(134,14),(135,4),(135,5),(135,11),(135,12),(135,13),(135,14),(136,4),(136,5),(136,11),(136,12),(136,13),(136,14),(137,4),(137,5),(137,11),(137,12),(137,13),(137,14),(138,4),(138,5),(138,11),(138,12),(138,13),(138,14),(139,4),(139,5),(139,11),(139,12),(139,13),(139,14),(140,4),(140,5),(140,11),(140,12),(140,13),(140,14),(141,4),(141,5),(141,11),(141,12),(141,13),(141,14),(142,4),(143,4),(143,5),(143,11),(143,12),(143,13),(143,14),(145,4),(145,5),(145,11),(145,12),(145,13),(145,14),(146,4),(146,5),(147,4),(147,5),(147,11),(147,12),(147,13),(147,14),(148,4),(148,5),(148,11),(148,12),(148,13),(148,14),(149,4),(149,5),(149,11),(149,12),(149,13),(149,14),(150,4),(150,5),(150,11),(150,12),(150,13),(150,14),(151,4),(152,4),(153,4),(153,5),(153,11),(153,12),(153,13),(153,14),(154,4),(154,5),(154,11),(154,12),(154,13),(154,14),(155,4),(155,5),(155,11),(155,12),(155,13),(155,14),(156,4),(156,5),(156,11),(156,12),(156,13),(156,14),(157,4),(157,5),(158,4),(158,5),(158,11),(158,12),(158,13),(158,14),(159,4),(159,5),(159,11),(159,12),(159,13),(159,14),(160,4),(160,5),(160,11),(160,12),(160,13),(160,14),(161,4),(161,5),(161,11),(161,12),(161,13),(161,14),(162,4),(162,5),(162,11),(162,12),(162,13),(162,14),(163,4),(163,5),(163,11),(163,12),(163,13),(163,14),(164,5),(164,11),(164,12),(164,13),(164,14),(165,5),(165,11),(165,12),(165,13),(165,14),(166,5),(166,11),(166,12),(166,13),(166,14),(167,5),(167,11),(167,12),(167,13),(167,14),(168,5),(168,11),(168,12),(168,13),(168,14),(169,5),(169,11),(169,12),(169,13),(169,14),(170,5),(170,11),(170,12),(170,13),(170,14),(171,5),(171,11),(171,12),(171,13),(171,14),(172,5),(172,11),(172,12),(172,13),(172,14),(173,5),(173,11),(173,12),(173,13),(173,14),(174,5),(174,11),(174,12),(174,13),(174,14),(175,5),(175,11),(175,12),(175,13),(175,14),(176,5),(176,11),(176,12),(176,13),(176,14),(177,5),(177,11),(177,12),(177,13),(177,14),(178,5),(178,11),(178,12),(178,13),(178,14),(179,5),(179,11);
/*!40000 ALTER TABLE `compatibility` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_03_18_171300_create_authors_table',1),('2014_03_18_171423_create_users_table',1),('2014_03_18_172218_create_projects_table',1),('2014_03_18_173747_create_ndless_table',1),('2014_03_18_173911_create_compatibility_table',1),('2014_03_18_174825_create_categories_table',1),('2014_03_18_175035_create_project_categories_table',1),('2014_03_18_175906_create_project_authors_table',1),('2014_03_22_182951_users_add_editor_admin_columns',1),('2014_04_11_140118_projects_on_delete_changes',1),('2014_04_11_140733_project_authors_on_delete_changes',1),('2014_05_24_183352_projects_add_featured_column',1),('2014_05_24_184232_projects_add_screenshot_column',1),('2014_08_23_160223_users_add_remember_token_column',2),('2014_09_15_132451_projects_remove_screenshot_column',3),('2016_01_06_193557_ndless_add_deprecated_column',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ndless`
--

DROP TABLE IF EXISTS `ndless`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ndless` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `deprecated` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ndless`
--

LOCK TABLES `ndless` WRITE;
/*!40000 ALTER TABLE `ndless` DISABLE KEYS */;
INSERT INTO `ndless` VALUES (1,'1.1',1),(2,'1.7',1),(3,'2.0',1),(4,'3.1',1),(5,'3.6',1),(6,'1.1p',1),(7,'1.3',1),(8,'1.4',1),(9,'1.2',1),(10,'1.2p',1),(11,'3.9',1),(12,'4.0',1),(13,'4.2',0),(14,'4.4',0);
/*!40000 ALTER TABLE `ndless` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_authors`
--

DROP TABLE IF EXISTS `project_authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_authors` (
  `project` int(10) unsigned NOT NULL,
  `author` int(10) unsigned NOT NULL,
  PRIMARY KEY (`project`,`author`),
  KEY `project_authors_author_foreign` (`author`),
  CONSTRAINT `project_authors_author_foreign` FOREIGN KEY (`author`) REFERENCES `authors` (`id`),
  CONSTRAINT `project_authors_project_foreign` FOREIGN KEY (`project`) REFERENCES `projects` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_authors`
--

LOCK TABLES `project_authors` WRITE;
/*!40000 ALTER TABLE `project_authors` DISABLE KEYS */;
INSERT INTO `project_authors` VALUES (1,4),(2,4),(3,11),(3,37),(3,41),(3,44),(4,11),(5,11),(6,11),(7,11),(7,17),(8,26),(11,21),(12,2),(15,23),(16,2),(19,29),(20,5),(20,25),(23,19),(23,20),(24,19),(24,20),(25,4),(26,5),(27,5),(28,19),(28,20),(29,19),(29,20),(30,19),(30,20),(31,19),(32,5),(33,5),(34,19),(35,8),(36,8),(37,27),(38,19),(38,20),(39,7),(40,16),(41,9),(42,12),(43,7),(44,7),(45,4),(46,19),(47,22),(49,17),(50,33),(51,33),(51,41),(52,10),(53,21),(54,30),(56,32),(57,36),(58,32),(60,11),(60,19),(61,33),(62,7),(63,7),(64,17),(65,17),(66,11),(67,33),(68,33),(69,11),(70,4),(71,31),(72,17),(73,10),(74,10),(75,10),(76,7),(76,24),(77,36),(78,10),(79,18),(80,6),(81,7),(81,18),(82,7),(82,18),(83,6),(84,6),(84,7),(85,1),(86,6),(86,12),(86,18),(86,19),(87,6),(88,6),(88,7),(89,6),(89,7),(90,6),(91,6),(92,6),(92,7),(93,5),(94,18),(95,7),(96,18),(97,7),(98,6),(98,7),(98,14),(99,3),(99,7),(100,34),(101,35),(102,7),(102,13),(103,6),(103,7),(103,12),(103,16),(104,15),(105,33),(106,18),(107,18),(108,7),(108,28),(109,18),(110,15),(111,15),(112,12),(113,21),(115,11),(116,40),(117,41),(118,2),(119,42),(120,43),(121,23),(122,41),(123,45),(124,23),(125,2),(126,2),(127,2),(128,2),(129,2),(130,2),(131,2),(132,46),(133,2),(134,2),(135,2),(136,47),(137,48),(138,2),(138,49),(139,2),(140,23),(141,50),(142,7),(142,16),(142,19),(143,7),(143,12),(143,16),(144,1),(144,7),(144,15),(144,19),(144,33),(145,14),(146,2),(147,51),(148,51),(149,41),(150,52),(151,15),(152,15),(153,49),(154,51),(155,53),(156,2),(157,11),(158,23),(158,45),(158,54),(159,41),(160,49),(161,47),(162,55),(163,55),(164,47),(165,47),(166,47),(167,47),(168,47),(169,47),(170,47),(171,47),(172,47),(173,47),(174,47),(175,47),(176,47),(177,47),(178,7),(178,14),(178,56),(178,57),(179,7),(179,15);
/*!40000 ALTER TABLE `project_authors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_categories`
--

DROP TABLE IF EXISTS `project_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_categories` (
  `project` int(10) unsigned NOT NULL,
  `category` int(10) unsigned NOT NULL,
  PRIMARY KEY (`project`,`category`),
  KEY `project_categories_category_foreign` (`category`),
  CONSTRAINT `project_categories_category_foreign` FOREIGN KEY (`category`) REFERENCES `categories` (`id`),
  CONSTRAINT `project_categories_project_foreign` FOREIGN KEY (`project`) REFERENCES `projects` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_categories`
--

LOCK TABLES `project_categories` WRITE;
/*!40000 ALTER TABLE `project_categories` DISABLE KEYS */;
INSERT INTO `project_categories` VALUES (1,1),(2,1),(3,3),(4,2),(5,1),(6,2),(6,5),(7,2),(7,5),(8,1),(11,1),(12,1),(15,1),(16,1),(19,1),(20,1),(23,4),(24,4),(25,4),(26,4),(27,4),(28,4),(29,4),(30,4),(31,5),(32,4),(33,2),(34,5),(35,1),(35,2),(36,1),(36,2),(37,2),(38,4),(39,2),(40,1),(40,2),(41,2),(42,5),(43,2),(44,2),(44,5),(45,2),(46,5),(47,2),(49,3),(50,2),(51,2),(51,5),(52,1),(53,2),(54,2),(56,1),(57,1),(58,1),(60,5),(61,2),(61,5),(62,2),(62,5),(63,2),(63,5),(64,1),(65,2),(66,2),(66,4),(67,2),(68,3),(69,5),(70,1),(71,1),(72,1),(73,1),(74,1),(75,1),(76,1),(77,1),(78,1),(79,4),(80,5),(81,2),(81,5),(82,2),(82,5),(83,5),(84,5),(85,5),(86,5),(87,5),(88,5),(89,5),(90,5),(91,5),(92,5),(93,4),(94,2),(94,5),(95,2),(95,5),(96,2),(96,5),(97,2),(97,5),(98,2),(98,5),(99,4),(100,3),(101,2),(102,4),(103,2),(103,5),(104,5),(105,5),(106,2),(106,5),(107,2),(107,5),(108,4),(109,2),(109,5),(110,2),(111,5),(112,2),(112,5),(113,1),(115,2),(115,5),(116,2),(117,4),(117,5),(118,1),(119,2),(120,1),(121,1),(122,1),(122,3),(123,1),(124,1),(125,1),(126,1),(127,1),(128,1),(129,1),(130,1),(131,1),(132,1),(133,1),(134,1),(135,1),(136,1),(137,1),(138,1),(139,4),(140,4),(141,2),(142,2),(142,5),(143,2),(143,5),(144,2),(144,5),(145,2),(146,3),(147,2),(148,1),(148,2),(149,2),(150,2),(151,2),(151,5),(152,2),(152,5),(153,2),(154,1),(155,1),(156,1),(157,2),(158,3),(159,2),(160,2),(161,1),(162,1),(163,1),(164,1),(164,2),(165,1),(165,2),(166,1),(166,2),(167,1),(167,2),(168,1),(168,2),(170,1),(170,2),(171,1),(172,1),(173,1),(174,1),(174,2),(175,1),(176,1),(177,1),(178,2),(179,2),(179,5);
/*!40000 ALTER TABLE `project_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `classic` tinyint(1) NOT NULL,
  `cx` tinyint(1) NOT NULL,
  `tiplanet` int(11) NOT NULL,
  `ticalc` int(11) NOT NULL,
  `website` text COLLATE utf8_unicode_ci NOT NULL,
  `clicks` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `featured` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `projects_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=180 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (1,'Block Dude123','Port of the TI-83+ game Block Dude',1,0,1927,43053,'http://www.omnimaga.org/trapped-for-the-ti-nspire-and-ti-89/block-dude-nspire/',771,'0000-00-00 00:00:00','2022-11-27 02:00:36',NULL),(2,'Block Dude 2: Trapped','Sequel to Block Dude',1,0,2154,43546,'http://www.omnimaga.org/trapped-for-the-ti-nspire-and-ti-89/block-dude-2-trapped-for-ti-89-titanium-and-ti-nspire/',443,'0000-00-00 00:00:00','2022-11-27 02:00:10',NULL),(3,'Nspire I/O','Library for text input/output, cross-compatible with Prizm',1,1,0,0,'https://github.com/compujuckel/nspire-io',893,'0000-00-00 00:00:00','2022-12-11 19:29:33',NULL),(4,'rshell','Implements a simple CLI',1,0,0,0,'http://nspforge.unsads.com/p/rshell',189,'0000-00-00 00:00:00','2021-06-25 16:48:15',NULL),(5,'Shunledge','Look at the blocks, and remember where they are under the clouds',1,0,2189,0,'http://nspforge.unsads.com/p/shunledge',61,'0000-00-00 00:00:00','2021-01-06 04:48:54',NULL),(6,'PTTKiller','Access documents in PTT mode',1,1,0,0,'http://www.omnimaga.org/ti-nspire-projects/pttkiller-enable-access-to-documents-in-ptt-mode/',484,'0000-00-00 00:00:00','2022-11-10 21:07:30',NULL),(7,'PTTKillerSE','Improved version of PTTKiller',1,1,0,0,'http://www.omnimaga.org/ti-nspire-projects/pttkillerse-v1-press-to-test-killer-stealth-edition/',607,'0000-00-00 00:00:00','2022-11-10 21:08:23',NULL),(8,'Klondike','Solitaire',1,0,0,44122,'http://www.ticalc.org/archives/files/fileinfo/441/44122.html',223,'0000-00-00 00:00:00','2022-01-23 11:18:59',NULL),(11,'Linerunner','A clone of the popular iPhone game',1,1,0,44871,'http://www.omnimaga.org/ti-nspire-projects/line-runner-for-nspire',2074,'0000-00-00 00:00:00','2022-12-11 19:29:49',NULL),(12,'nSimon','Simple game where you repeat the pattern for as long as you can',1,1,8157,45071,'http://www.ticalc.org/archives/files/fileinfo/450/45071.html',356,'0000-00-00 00:00:00','2022-12-04 13:01:35',NULL),(15,'nSpeedX 3D','Port of the game SpeedX 3D',1,1,7572,45072,'http://www.omnimaga.org/ti-nspire-projects/%28c%29-speedx-3d-reaches-your-nspire-!/',1211,'0000-00-00 00:00:00','2022-12-09 19:07:54',NULL),(16,'nStacker','Very simple game where you keep stopping a line as it stacks to the top',1,1,6066,44853,'http://www.ticalc.org/archives/files/fileinfo/448/44853.html',438,'0000-00-00 00:00:00','2022-12-12 11:37:10',NULL),(19,'Snake','Simple snake',1,0,0,42649,'http://www.ticalc.org/archives/files/fileinfo/426/42649.html',342,'0000-00-00 00:00:00','2022-07-20 04:42:31',NULL),(20,'WFRNG','A random number generator',1,0,0,44853,'http://www.ticalc.org/archives/files/fileinfo/430/43085.html',99,'0000-00-00 00:00:00','2021-01-06 05:22:42',NULL),(23,'Dissolve Effect Demo','Simple picture dissolve effect',1,0,0,43469,'http://www.ticalc.org/archives/files/fileinfo/434/43469.html',164,'0000-00-00 00:00:00','2022-11-13 10:45:49',NULL),(24,'Fire Effect Demo','Grayscale fire effect',1,0,0,43470,'http://www.ticalc.org/archives/files/fileinfo/434/43470.html',184,'0000-00-00 00:00:00','2020-12-24 19:00:33',NULL),(25,'TI-Nspire Grayscale Test','Shows all levels of grayscale',1,0,0,43050,'http://www.ticalc.org/archives/files/fileinfo/430/43050.html',95,'0000-00-00 00:00:00','2020-12-24 19:00:34',NULL),(26,'nCaster','Nspire raycasting engine',1,0,1952,42863,'http://www.ticalc.org/archives/files/fileinfo/428/42863.html',173,'0000-00-00 00:00:00','2022-10-26 16:39:51',NULL),(27,'Nspire Ray Tracer Demo','A basic ray tracer for Nspire',1,0,0,42679,'http://www.ticalc.org/archives/files/fileinfo/426/42679.html',145,'0000-00-00 00:00:00','2022-06-07 23:39:01',NULL),(28,'Shuffle Effect Demo','Screen tile shuffle effect',1,0,0,43472,'http://www.ticalc.org/archives/files/fileinfo/434/43472.html',93,'0000-00-00 00:00:00','2021-03-06 01:19:56',NULL),(29,'Snow Effect Demo','Simple snow effect',1,0,0,43473,'http://www.ticalc.org/archives/files/fileinfo/434/43473.html',126,'0000-00-00 00:00:00','2020-12-24 19:00:16',NULL),(30,'Starfield Effect Demo','Simple grayscale starfield effect',1,0,0,43474,'http://www.ticalc.org/archives/files/fileinfo/434/43474.html',86,'0000-00-00 00:00:00','2022-07-11 05:26:17',NULL),(31,'EStack PoC','A proof-of-concept for native EStack programming',1,0,0,43727,'http://www.ticalc.org/archives/files/fileinfo/437/43727.html',81,'0000-00-00 00:00:00','2020-12-24 19:00:16',NULL),(32,'Mandelbrot','Simple Mandelbrot fractal',1,0,0,42662,'http://www.ticalc.org/archives/files/fileinfo/426/42662.html',167,'0000-00-00 00:00:00','2022-08-17 05:39:13',NULL),(33,'BMPViewer','Can open 24-bit BMP-Files on your Nspire',1,0,1930,43054,'http://www.ticalc.org/archives/files/fileinfo/430/43054.html',411,'0000-00-00 00:00:00','2020-12-24 18:59:08',NULL),(34,'Dummy OS','A dummy operating system for use with OSLauncher',1,0,0,43702,'http://www.ticalc.org/archives/files/fileinfo/437/43702.html',736,'0000-00-00 00:00:00','2022-11-08 18:50:52',NULL),(35,'gbc4nspire','GB/GBC emulator',1,1,1649,42630,'http://www.ticalc.org/archives/files/fileinfo/426/42630.html',7533,'0000-00-00 00:00:00','2022-12-12 03:26:12',NULL),(36,'gpSP-Nspire','GBA emulator',0,1,0,44971,'http://www.omnimaga.org/ti-nspire-projects/gpsp-nspire-%28gba-emulator%29/',13864,'0000-00-00 00:00:00','2022-12-14 23:29:09',NULL),(37,'HEXEDITOR','Classic hexadecimal editor',1,0,0,43841,'http://www.ticalc.org/archives/files/fileinfo/438/43841.html',207,'0000-00-00 00:00:00','2022-02-11 07:30:04',NULL),(38,'Game of Life','Demonstrates Game of Life simulation',1,0,0,43471,'http://www.ticalc.org/archives/files/fileinfo/434/43471.html',513,'0000-00-00 00:00:00','2021-09-14 21:05:58',NULL),(39,'mViewer','Shows PNG/BMP/JPEG files',1,1,6601,43460,'http://tiplanet.org/forum/archives_voir.php?id=6601',4122,'0000-00-00 00:00:00','2022-12-15 21:58:50',NULL),(40,'NESpire','NES emulator',1,1,0,43217,'http://www.omnimaga.org/ti-nspire-projects/nespire-general-discussion-thread/',6019,'0000-00-00 00:00:00','2022-12-15 22:00:31',NULL),(41,'nLatein','German - Latin dictionary',1,0,0,43730,'http://www.ticalc.org/archives/files/fileinfo/437/43730.html',159,'0000-00-00 00:00:00','2020-12-24 18:59:30',NULL),(42,'Nleash for OS 2.1','Downgrade from OS 2.1',1,0,1912,43033,'http://www.ticalc.org/archives/files/fileinfo/430/43033.html',102,'0000-00-00 00:00:00','2022-05-03 11:35:17',NULL),(43,'norse','Use the LED for morse code',1,0,2097,43429,'http://www.ticalc.org/archives/files/fileinfo/434/43429.html',495,'0000-00-00 00:00:00','2022-09-21 16:17:47',NULL),(44,'Nover','Overclock the Nspire',1,1,3890,43428,'http://tiplanet.org/forum/archives_voir.php?id=3890',1474,'0000-00-00 00:00:00','2022-09-28 03:00:49',NULL),(45,'nPlayer CX','Video player',1,1,3895,0,'http://www.omnimaga.org/ti-nspire-projects/nplayer-ti-nspire-video-player/',3187,'0000-00-00 00:00:00','2022-12-15 21:54:57',NULL),(46,'OSLauncher','Launch any OS',1,0,0,43701,'http://www.ticalc.org/archives/files/fileinfo/437/43701.html',511,'0000-00-00 00:00:00','2022-09-20 18:22:15',NULL),(47,'Timer','A simple timer with start/stop/reset, minutes and hours',1,1,0,44265,'http://www.ticalc.org/archives/files/fileinfo/442/44265.html',713,'0000-00-00 00:00:00','2022-12-05 19:07:24',NULL),(49,'nSDL','Port of the SDL library',1,1,0,0,'https://github.com/Hoffa/nSDL/',525,'0000-00-00 00:00:00','2022-12-09 21:18:50',NULL),(50,'Nspire Movie Player','Improved video player',1,1,0,0,'http://www.omnimaga.org/ti-nspire-projects/nspire-movie-player-alternative-to-nplayer/',3303,'0000-00-00 00:00:00','2022-12-15 21:34:01',NULL),(51,'LinuxLoader','Bootloader for loading the linux kernel',1,1,3836,0,'http://www.omnimaga.org/ti-nspire-projects/calling-all-linux-kernel-developers!/',1541,'0000-00-00 00:00:00','2022-12-04 10:39:07',NULL),(52,'nCraft','3D Minecraft-like game',1,1,6876,0,'http://www.omnimaga.org/ti-nspire-projects/ncraft-%283d-minecraft-like-game-for-the-nspire%29/',3510,'0000-00-00 00:00:00','2022-12-10 15:20:16',NULL),(53,'nTxt','Text editor',1,1,0,0,'http://www.omnimaga.org/ti-nspire-projects/ntxt-nspire-text-editor/',1654,'0000-00-00 00:00:00','2022-12-16 07:51:35',NULL),(54,'nWriter','Text editor',1,0,2167,0,'http://nspforge.unsads.com/p/nwriter',293,'0000-00-00 00:00:00','2022-09-08 10:39:02',NULL),(56,'nMah','Mahjong Solitaire',1,1,7549,0,'http://www.omnimaga.org/ti-nspire-projects/nmah-mahjong-clone-for-ti-nspire/',613,'0000-00-00 00:00:00','2022-12-12 11:41:01',NULL),(57,'nTris','Tetris clone',1,0,2146,0,'http://www.omnimaga.org/ti-nspire-projects/ntris-tetris-for-nspire/',437,'0000-00-00 00:00:00','2022-11-03 22:29:13',NULL),(58,'nTris-sdl','Tetris clone in SDL',1,1,6889,0,'http://www.omnimaga.org/ti-nspire-projects/ntris-tetris-for-nspire/msg318530/#msg318530',2339,'0000-00-00 00:00:00','2022-12-16 05:34:06',NULL),(60,'OSLauncher 3.1','Improved OSLauncher',1,1,3223,0,'http://www.omnimaga.org/ti-nspire-projects/oslauncher-3-1/',626,'0000-00-00 00:00:00','2022-07-19 16:52:03',NULL),(61,'Version String Patcher','Replaces the version string of the OS',1,1,0,0,'http://www.omnimaga.org/ti-nspire-projects/early-beta-of-nspire-version-string-patcher/',141,'0000-00-00 00:00:00','2022-11-08 18:53:54',NULL),(62,'nPatch','Fixes OS file so you can send it between calculators',1,1,6616,0,'http://www.omnimaga.org/ti-nspire-projects/npatch-fix-your-ndlessed-ti-nspire-os/',253,'0000-00-00 00:00:00','2022-05-26 13:02:12',NULL),(63,'nTNOC','More space on your calc by removing unnecessary files',1,1,6566,0,'http://www.omnimaga.org/news/ntnoc-more-free-space-on-your-nspire-ndless-installation-between-calculators/',287,'0000-00-00 00:00:00','2022-07-04 20:44:50',NULL),(64,'nFrotz','Engine for text-based adventures like Zork',1,1,0,0,'http://www.omnimaga.org/ti-nspire-projects/nfrotzendless-adventure-games-on-the-ti-nspire!/',435,'0000-00-00 00:00:00','2022-12-15 05:32:21',NULL),(65,'Ndless Commander','File browser',1,1,0,0,'http://www.omnimaga.org/ti-nspire-projects/ndless-commander-0-4-ti-nspire-file-browser/',3580,'0000-00-00 00:00:00','2022-12-15 21:54:42',NULL),(66,'nspIRC','IRC on the Nspire (via RS232)',1,0,0,0,'http://www.omnimaga.org/ti-nspire-projects/irc-on-the-nspire/',271,'0000-00-00 00:00:00','2022-07-05 00:21:19',NULL),(67,'Nspire Clock','Fullscreen clock',1,1,0,0,'http://www.omnimaga.org/ti-nspire-projects/nspire-clock/',2671,'0000-00-00 00:00:00','2022-12-15 21:56:08',NULL),(68,'NSpire Gamekit','Game programming framework',1,0,0,0,'https://code.google.com/p/nspire-gamekit/',226,'0000-00-00 00:00:00','2022-09-01 23:51:50',NULL),(69,'1337mod','Adds 13375P34K as language',1,0,0,0,'http://www.omnimaga.org/ti-nspire-projects/1337mod-for-nspire/',701,'0000-00-00 00:00:00','2022-11-06 11:58:17',NULL),(70,'Chips Challenge','Port of the classic lynx game',1,0,2165,0,'http://nspforge.unsads.com/p/chipschallenge',407,'0000-00-00 00:00:00','2022-03-27 23:02:27',NULL),(71,'Colloidal','Avoid the flying blocks',1,0,3711,0,'http://tiplanet.org/forum/archives_voir.php?id=3711',195,'0000-00-00 00:00:00','2021-03-19 23:01:05',NULL),(72,'Dodgin\' Diamond 2X','SDL port of the game Dodgin\' diamond',1,1,4888,0,'http://www.omnimaga.org/ti-nspire-projects/dodgin%27-diamond-2x-%2860-fps%29/',700,'0000-00-00 00:00:00','2022-12-15 05:32:29',NULL),(73,'Fall','Move the sphere down',1,0,3520,0,'http://tiplanet.org/forum/archives_voir.php?id=3520',211,'0000-00-00 00:00:00','2022-07-04 20:47:45',NULL),(74,'Fast-Snake','Simple snake',1,0,3240,0,'http://tiplanet.org/forum/archives_voir.php?id=3240',416,'0000-00-00 00:00:00','2022-06-09 13:31:59',NULL),(75,'MineSweeper','Minesweeper',1,0,3506,0,'http://tiplanet.org/forum/archives_voir.php?id=3506',331,'0000-00-00 00:00:00','2022-06-09 13:32:03',NULL),(76,'nDoom','Doom port',1,1,6631,0,'http://tiplanet.org/forum/archives_voir.php?id=6631',7313,'0000-00-00 00:00:00','2022-12-15 20:19:29',NULL),(77,'SkyJump','Doodle Jump clone',1,0,3710,0,'http://tiplanet.org/forum/archives_voir.php?id=3710',325,'0000-00-00 00:00:00','2022-07-04 20:42:42',NULL),(78,'Space Invaders','Space Invaders clone',1,0,3239,0,'http://tiplanet.org/forum/archives_voir.php?id=3239',443,'0000-00-00 00:00:00','2022-09-20 18:28:24',NULL),(79,'Mandelbrot CX','Mandelbrot fractal',1,1,6711,0,'http://tiplanet.org/forum/archives_voir.php?id=6711',1089,'0000-00-00 00:00:00','2022-12-07 14:07:35',NULL),(80,'Boot2Launcher','Launch any boot2 software',1,0,2887,0,'http://tiplanet.org/forum/archives_voir.php?id=2887',538,'0000-00-00 00:00:00','2022-05-26 12:57:57',NULL),(81,'cx2cxc','Transform a CX calc into CX-C (chinese model, NOT CAS!)',0,1,6638,0,'http://tiplanet.org/forum/archives_voir.php?id=6638',777,'0000-00-00 00:00:00','2022-09-10 16:30:42',NULL),(82,'delDico','Delete CX-C dictionary files',0,1,6653,0,'http://tiplanet.org/forum/archives_voir.php?id=6653',204,'0000-00-00 00:00:00','2022-09-08 05:07:54',NULL),(83,'DiagsLauncher','Launch any diags software',1,0,2886,0,'http://tiplanet.org/forum/archives_voir.php?id=2886',153,'0000-00-00 00:00:00','2022-09-20 18:28:39',NULL),(84,'DowngradeCX','Temporarily removes anti-downgrade protection on CX',0,1,4238,0,'http://tiplanet.org/forum/archives_voir.php?id=4238',687,'0000-00-00 00:00:00','2022-11-18 05:43:28',NULL),(85,'DowngradeFix','Remove the anti-downgrade protection (requires boot2 <3.0)',1,0,3584,0,'http://tiplanet.org/forum/archives_voir.php?id=3584',251,'0000-00-00 00:00:00','2020-12-24 19:02:05',NULL),(86,'fixprint','Restores the lua print() function',1,1,4227,0,'http://tiplanet.org/forum/archives_voir.php?id=4227',164,'0000-00-00 00:00:00','2022-09-08 05:06:35',NULL),(87,'FlashBoot1 Prototype','Flash boot1 on prototype calcs',1,0,4184,0,'http://tiplanet.org/forum/archives_voir.php?id=4184',74,'0000-00-00 00:00:00','2020-12-24 19:02:08',NULL),(88,'FlashBoot2','Flash boot2',1,0,4187,0,'http://tiplanet.org/forum/archives_voir.php?id=4187',127,'0000-00-00 00:00:00','2022-04-29 03:04:53',NULL),(89,'FlashBoot2CX','Flash boot2',0,1,4271,0,'http://tiplanet.org/forum/archives_voir.php?id=4271',228,'0000-00-00 00:00:00','2020-12-24 19:02:11',NULL),(90,'FlashBoot2 Prototype','Flash boot2',1,0,4165,0,'http://tiplanet.org/forum/archives_voir.php?id=4165',68,'0000-00-00 00:00:00','2022-05-26 12:58:39',NULL),(91,'FlashDiags','Flash diags software',1,0,3744,0,'http://tiplanet.org/forum/archives_voir.php?id=3744',56,'0000-00-00 00:00:00','2022-03-14 23:40:25',NULL),(92,'FlashDiagsCX','Flash diags software',0,1,4272,0,'http://tiplanet.org/forum/archives_voir.php?id=4272',125,'0000-00-00 00:00:00','2022-03-20 22:41:09',NULL),(93,'Floorcaster','Draws a 3D floor',1,0,1954,0,'http://tiplanet.org/forum/archives_voir.php?id=1954',168,'0000-00-00 00:00:00','2022-07-04 20:43:45',NULL),(94,'Hide Manager','Hides folders',1,1,3847,0,'http://tiplanet.org/forum/archives_voir.php?id=3847',806,'0000-00-00 00:00:00','2022-09-08 05:07:42',NULL),(95,'nCleaner','Removes unnecessary system folders',1,1,6656,0,'http://tiplanet.org/forum/archives_voir.php?id=6656',387,'0000-00-00 00:00:00','2021-12-20 22:45:35',NULL),(96,'nClock','Shows a clock in the status bar',1,1,4416,0,'http://tiplanet.org/forum/archives_voir.php?id=4416',8290,'0000-00-00 00:00:00','2022-12-15 21:43:43',NULL),(97,'NDShell','Document browser',1,0,2001,0,'http://tiplanet.org/forum/archives_voir.php?id=2001',481,'0000-00-00 00:00:00','2022-08-30 21:10:48',NULL),(98,'hwMod','Transform prototype to production calcs',1,0,6733,0,'http://tiplanet.org/forum/archives_voir.php?id=6733',316,'0000-00-00 00:00:00','2021-07-22 09:47:11',NULL),(99,'NewVox','3D height mapping demo',1,1,6044,0,'http://tiplanet.org/forum/archives_voir.php?id=6044',529,'0000-00-00 00:00:00','2022-12-13 13:00:23',NULL),(100,'nRGBlib','easy-to-use graphics library',1,1,3892,0,'http://tiplanet.org/forum/archives_voir.php?id=3892',959,'0000-00-00 00:00:00','2022-12-10 22:32:47',NULL),(101,'Nspire Ebook Reader','View text files',1,1,2223,0,'http://www.omnimaga.org/ti-nspire-projects/nspire-ebook-reader/',2537,'0000-00-00 00:00:00','2022-12-16 07:50:58',NULL),(102,'Parallaxe Scrolling','Parallax scrolling demo',1,1,6047,0,'http://tiplanet.org/forum/archives_voir.php?id=6047',634,'0000-00-00 00:00:00','2022-12-04 13:00:40',NULL),(103,'PolyDumper','Dumps boot1/boot2/diags/OS',1,1,3829,0,'http://tiplanet.org/forum/archives_voir.php?id=3829',1275,'0000-00-00 00:00:00','2022-12-15 11:02:29',NULL),(104,'RootDoc','Roots the document browser',1,1,5436,0,'http://tiplanet.org/forum/archives_voir.php?id=5436',340,'0000-00-00 00:00:00','2022-07-04 20:34:54',NULL),(105,'ScreenClose','Retro TV effect when turning the Nspire off',1,1,4045,0,'http://tiplanet.org/forum/archives_voir.php?id=4045',879,'0000-00-00 00:00:00','2022-10-25 15:21:11',NULL),(106,'TI-Nspire Theme Editor','Edits the color themes',1,1,6070,0,'http://tiplanet.org/forum/archives_voir.php?id=6070',1914,'0000-00-00 00:00:00','2022-12-14 01:59:17',NULL),(107,'vPatch','Changes the OS version number',1,1,6640,0,'http://tiplanet.org/forum/archives_voir.php?id=6640',316,'0000-00-00 00:00:00','2022-12-13 10:45:08',NULL),(108,'XFlame','Fire effect (color)',1,1,6045,0,'http://tiplanet.org/forum/archives_voir.php?id=6045',1018,'0000-00-00 00:00:00','2022-12-08 05:10:14',NULL),(109,'zLock','Protects the Nspire with a password',1,1,3959,0,'http://tiplanet.org/forum/archives_voir.php?id=3959',1015,'0000-00-00 00:00:00','2022-12-14 01:59:35',NULL),(110,'TNS2XML','Open unencrypted TNS files',1,1,0,0,'http://www.omnimaga.org/ti-nspire-projects/tns2xml/',137,'0000-00-00 00:00:00','2021-10-08 18:03:02',NULL),(111,'nCalc','Native access to the CAS engine (DOES NOT transform CX to CX CAS, works on CAS devices only)',1,1,0,0,'http://www.omnimaga.org/news/ncalc-calculus-using-the-native-nspire%27s-math-engine-with-ndl3ss/',8554,'0000-00-00 00:00:00','2022-12-09 18:34:05',NULL),(112,'OCD','On-calc Debugger',1,1,0,0,'https://ndlessly.wordpress.com/2012/04/09/introducing-ocd-the-ti-nspire-on-calc-debugger/',268,'0000-00-00 00:00:00','2022-11-29 09:07:05',NULL),(113,'Pacman','Pacman clone',1,1,0,0,'http://www.omnimaga.org/ti-nspire-projects/%28contest%29-pacman/',4744,'0000-00-00 00:00:00','2022-12-14 21:56:37',NULL),(115,'TI-Nspire Task Manager','Display/kill tasks, show memory and more.',1,0,0,0,'https://github.com/compujuckel/nspire-task-manager',604,'0000-00-00 00:00:00','2022-11-16 19:43:05',NULL),(116,'Z80 Emulator','Z80 Emulator for the Nspire',1,1,0,0,'http://www.omnimaga.org/ti-nspire-projects/z80-emulator-for-nspire/',2074,'0000-00-00 00:00:00','2022-12-13 10:31:23',NULL),(117,'Nspire Audio Player','Plays sounds using the dock connector',0,1,0,0,'http://www.omnimaga.org/ti-nspire-projects/nspire-audio-player!/',2462,'0000-00-00 00:00:00','2022-12-15 21:33:17',NULL),(118,'Anagramarama','SDL Port of the game Anagramarama',1,1,0,0,'http://www.omnimaga.org/ti-nspire-projects/anagramarama/',1293,'0000-00-00 00:00:00','2022-12-05 23:37:45',NULL),(119,'DLiterature for Nspire','Chinese text reader',1,1,0,0,'http://www.omnimaga.org/ti-nspire-projects/dliterature-for-nspire-chinese-text-reader-%28ndless-required%29/',593,'0000-00-00 00:00:00','2022-12-16 07:36:07',NULL),(120,'DrillMiner','Clone of the game Motherload',1,1,0,0,'http://www.omnimaga.org/ti-nspire-projects/drillminer/',1688,'0000-00-00 00:00:00','2022-12-11 19:29:14',NULL),(121,'F-Zero trackSpire','Clone of the game F-Zero',1,1,0,0,'http://www.omnimaga.org/ti-nspire-projects/%28c%29-f-zero-trackspire/',1613,'0000-00-00 00:00:00','2022-12-15 15:04:49',NULL),(122,'crafti','Another minecraft - with textures',1,1,0,46054,'http://www.omnimaga.org/ti-nspire-projects/ngl-a-fast-(enough)-3d-engine-for-the-nspire/',20090,'0000-00-00 00:00:00','2022-12-16 02:11:00',1),(123,'Jetpack Impossible','Game with a jetpack',1,1,59790,0,'http://tiplanet.org/forum/viewtopic.php?f=20&t=14472',697,'0000-00-00 00:00:00','2022-07-14 00:41:45',NULL),(124,'nKaruga','A clone of Ikaruga for the TI-Nspire',1,1,0,46162,'http://www.omnimaga.org/ti-nspire-projects/%28ndless%29-nkaruga/',515,'0000-00-00 00:00:00','2022-12-05 23:45:30',NULL),(125,'nAspirin','A game where you collect items while avoiding lines',1,1,10165,45159,'http://tiplanet.org/forum/viewtopic.php?p=134226#p134226',331,'2014-09-15 13:58:37','2022-12-04 12:59:55',NULL),(126,'nBinaryPuzzle','A grid based puzzle game consisting of ones and zeros and a few simple rules',1,1,0,45887,'http://www.omnimaga.org/ti-nspire-projects/binary-puzzle-for-nspire/',346,'2014-09-15 14:00:32','2022-12-04 12:58:43',NULL),(127,'nDealOrNoDeal','A game based off of the television show \"Deal or No Deal\"',1,1,0,45706,'http://www.omnimaga.org/ti-nspire-projects/ndealornodeal-for-nspire/',762,'2014-09-15 14:02:20','2022-12-09 10:20:08',NULL),(128,'nFalldown','You control the horizontal movements of a ball as it falls while navigating through gaps in lines that are coming up',1,1,0,45348,'http://www.omnimaga.org/ti-nspire-projects/nfalldown-for-nspire/',389,'2014-09-15 14:03:40','2022-12-05 23:46:21',NULL),(129,'nHitori','A puzzle game where you eliminate duplicate numbers on the rows & columns',1,1,0,45384,'http://www.omnimaga.org/ti-nspire-projects/nhitori-for-nspire/',192,'2014-09-15 14:05:13','2022-12-05 23:45:58',NULL),(130,'nIceBreaker','Port of the open source game IceBreaker',1,1,25633,45776,'http://www.omnimaga.org/ti-nspire-projects/jezzball-for-nspire/',518,'2014-09-15 14:06:43','2022-12-05 23:45:51',NULL),(131,'nPuzzleFrenzy','A puzzle game based off the TI-83+ version where you swap tiles to clear the board',1,1,0,45401,'http://www.omnimaga.org/ti-nspire-projects/npuzzlefrenzy-for-nspire/',214,'2014-09-15 14:07:59','2022-12-05 23:44:57',NULL),(132,'nQuake','Port of Quake',0,1,0,46044,'http://www.omnimaga.org/ti-nspire-projects/so-i-am-porting-that-first-person-shooter-to-the-nspire/',23738,'2014-09-15 14:09:53','2022-12-16 05:31:07',3),(133,'nTornado21','This is a card game where you place cards on columns for as long as possible. When you are out of moves the game is over',1,1,0,45334,'http://www.omnimaga.org/ti-nspire-projects/ntornado21-for-nspire/',196,'2014-09-15 14:12:23','2022-12-04 11:50:56',NULL),(134,'nTowers','A puzzle game where you determine the heights of building in a city grid based on the number of visible builds from certain viewpoints',1,1,0,45874,'http://www.omnimaga.org/ti-nspire-projects/towers-for-nspire/',547,'2014-09-15 14:13:47','2022-12-13 12:58:43',NULL),(135,'nYahtzee','A port of the popular dice game Yahtzee',1,1,0,45100,'http://www.ticalc.org/archives/files/fileinfo/451/45100.html',420,'2014-09-15 14:15:10','2022-12-04 11:58:14',NULL),(136,'Rainbow Dash Cloud Attack','Play as Rainbow Dash, grab all the clouds and kick the storm clouds',1,1,19556,45495,'http://www.omnimaga.org/ti-nspire-projects/%28c%29-rainbow-dash-cloud-attack/',723,'2014-09-15 14:16:32','2022-12-11 22:39:09',NULL),(137,'Super Hexaspire','Clone of Super Hexagon',0,1,0,45730,'http://www.omnimaga.org/ti-nspire-projects/super-hexaspire-alpha!/',1429,'2014-09-15 14:19:41','2022-11-28 01:13:36',NULL),(138,'nTileWorld','Port of Tile World for the TI-Nspire',1,1,22386,45732,'http://www.omnimaga.org/ti-nspire-projects/ntileworld-%28a-chips-challenge-port%29/',506,'2014-09-15 14:22:00','2022-12-04 11:57:24',NULL),(139,'nAquarium','A fun little visual program of some fish swimming around',1,1,0,45186,'http://www.ticalc.org/archives/files/fileinfo/451/45186.html',1321,'2014-09-15 14:23:53','2022-12-09 21:18:17',NULL),(140,'Plasma demo','Small plasma program, with tutorial on how it works and how to create one',1,1,0,45397,'http://www.omnimaga.org/ti-nspire-projects/matrefeytontias%27s-various-animations/',785,'2014-09-15 14:25:44','2022-12-10 18:19:46',NULL),(141,'nTrade Advanced','With this you can trade Pokemons between Pokemon Sapphire/Ruby/Firered/Leafgreen and Emerald',1,1,86503,46066,'http://www.omnimaga.org/ti-nspire-projects/ntrade-an-on-calc-trading-program-for-3-gen-pokemon-games/',1767,'2014-09-15 14:27:24','2022-12-16 04:41:26',NULL),(142,'mySpire','Lets you edit the boot graphic on CX',0,1,20625,45718,'http://tiplanet.org/forum/viewtopic.php?f=43&t=13071&lang=en',701,'2014-09-15 14:29:55','2022-10-26 16:24:58',NULL),(143,'nsNandMgr','NAND reflashing tool',1,1,10080,45717,'http://tiplanet.org/forum/viewtopic.php?p=133849&lang=en',1193,'2014-09-15 14:32:50','2022-12-15 21:55:58',NULL),(144,'nLaunchy','Boot arbirtrary OSes, e.g. Linux',1,1,12130,45716,'https://github.com/Excale/nLaunchy',786,'2014-09-15 14:35:24','2022-10-04 09:56:01',NULL),(145,'Mini vMac Nspire','Mac Plus emulator',1,1,12534,45317,'http://www.omnimaga.org/news/mini-vmac-for-the-ti-nspire/',4423,'2014-09-15 14:38:26','2022-12-15 05:26:35',NULL),(146,'HighScoreLib','Library to manage highscores and highscore tables',1,1,0,45333,'http://www.omnimaga.org/calculator-c-language/highscorelib-for-nspire/',65,'2014-09-15 14:40:47','2022-09-01 23:50:42',NULL),(147,'dPicoC-NS','on-calc C interpreter',1,1,0,0,'https://github.com/AnderainLovelace/dPicoC-NS',1405,'2014-09-15 14:43:07','2022-11-27 02:04:28',NULL),(148,'KuroScripter','An ONS-like AVG engine',1,1,0,0,'https://github.com/AnderainLovelace/KuroScripter',529,'2014-09-15 14:45:42','2022-11-18 16:51:34',NULL),(149,'MicroPython','Port of the Python programming language',1,1,89439,0,'https://github.com/Vogtinator/micropython',13521,'2014-09-15 14:48:26','2022-12-16 03:37:11',2),(150,'WP34S-4NS','Port of WP 34S Simulator',1,1,0,0,'https://github.com/nbzwt/WP34S-4NS',618,'2014-09-15 14:50:58','2022-12-15 05:28:34',NULL),(151,'nProtect','Protects your document browser from unwanted access',1,1,17343,0,'http://www.omnimaga.org/ti-nspire-projects/protect-your-ti-nspire-files-nprotect-and-nhide/',333,'2014-09-15 14:55:28','2022-07-30 21:46:11',NULL),(152,'nHide','Allows access to the whole filesystem',1,1,22388,0,'http://www.omnimaga.org/ti-nspire-projects/protect-your-ti-nspire-files-nprotect-and-nhide/',577,'2014-09-15 14:56:12','2022-12-15 21:38:37',NULL),(153,'nPDF','PDF viewer',0,1,23946,0,'http://www.omnimaga.org/ti-nspire-projects/npdf-a-document-viewer-for-the-nspire/',71461,'2014-09-15 14:57:43','2022-12-16 12:57:54',NULL),(154,'Orton and Princess','Port of the classic game Orton and Princess',1,1,0,0,'http://www.omnimaga.org/ti-nspire-projects/orton-and-princess-comes-to-nspire!/',315,'2014-09-15 14:59:57','2022-12-03 19:45:15',NULL),(155,'nVVVVVV','Clone of VVVVVV',1,1,0,0,'http://www.omnimaga.org/ti-nspire-projects/%28ndless-3-6%29-nvvvvvv/',2186,'2014-09-15 15:02:42','2022-12-14 00:14:44',NULL),(156,'nGravnix','Puzzle game where you choose a direction and all blocks slide in that direction.  When two or more blocks on the same color are adjacent they disappear',1,1,0,0,'http://www.omnimaga.org/ti-nspire-projects/ngravnix-for-nspire/',284,'2014-09-15 15:05:37','2022-12-05 23:46:03',NULL),(157,'CoreTemp Remote','View CoreTemp data from your computer on the Nspire',1,1,0,0,'http://www.omnimaga.org/ti-nspire-projects/%28ndless%29-coretemp-remote/',376,'2014-09-15 15:06:44','2022-12-15 21:36:12',NULL),(158,'n2DLib','2D graphics library',1,1,0,0,'https://github.com/n2DLib/n2DLib',1039,'2014-09-16 11:06:26','2022-12-12 00:20:49',NULL),(159,'pyWrite','on-calc Python editor',1,1,106886,0,'http://www.omnimaga.org/ti-nspire-projects/pywrite-python-script-editor/',2588,'2014-11-05 08:21:07','2022-12-15 21:12:30',NULL),(160,'Duktape','JavaScript Interpreter',1,1,150897,0,'https://www.omnimaga.org/ti-nspire-projects/duktape-a-javascript-interpreter-for-ti-nspire-calculators',1850,'2015-02-04 19:37:25','2022-12-16 07:36:43',NULL),(161,'Helicopt3rs','HeliCopt3rs is a clone of Swing Copters and you have to avoid the Hammers and platforms. To turn around, press the DOC button. To exit, press ESC.',0,1,0,0,'https://www.omnimaga.org/ti-nspire-projects/helicopt3rs',852,'2015-02-04 20:23:49','2022-12-06 02:50:50',NULL),(162,'Zombie Chase','Zombie game',1,1,0,46604,'https://www.omnimaga.org/ti-nspire-projects/(nspire-c)-zombie-chase/',1667,'2016-01-03 12:00:50','2022-12-10 16:38:14',NULL),(163,'Catylizm','Collect points, avoid asteroids and try not running out of fuel',1,1,0,46603,'https://www.cemetech.net/forum/viewtopic.php?t=12086',713,'2016-01-03 12:05:31','2022-12-10 16:38:11',NULL),(164,'PicoDrive','Sega Genesis emulator',0,1,0,46547,'https://github.com/gameblabla/picodrive-nspire',1420,'2016-01-03 12:08:14','2022-12-15 21:56:26',NULL),(165,'PocketSNES','SNES emulator',0,1,0,46538,'https://github.com/gameblabla/pocketsnes-nspire',7212,'2016-01-03 12:11:43','2022-12-16 07:50:43',NULL),(166,'Potator','Watara Supervision emulator',0,1,0,46509,'https://github.com/gameblabla/potator',460,'2016-01-03 12:13:30','2022-12-09 18:32:21',NULL),(167,'Oswan','Wonderswan emulator',0,1,219761,46494,'https://github.com/gameblabla/oswan/',462,'2016-01-03 12:15:06','2022-11-23 00:07:49',NULL),(168,'PokeMini','Pokemon Mini emulator',0,1,205947,46493,'https://tiplanet.org/forum/archives_voir.php?id=205947',12295,'2016-01-03 12:18:01','2022-12-15 21:56:37',NULL),(169,'Lolicopocalypse',' Ludum dare game by quasist.',0,1,287331,46528,'https://tiplanet.org/forum/archives_voir.php?id=287331',1292,'2016-01-03 12:19:34','2022-12-12 03:08:31',NULL),(170,'Another World','Another World bytecode interpreter port',0,1,298093,46527,'https://tiplanet.org/forum/archives_voir.php?id=298093',2497,'2016-01-03 12:21:16','2022-12-16 07:36:14',NULL),(171,'Super Methane Brothers','Amiga game',0,1,298157,46526,'https://www.omnimaga.org/ti-nspire-projects/sdl-ports-for-nspire/msg402182/#msg402182',4936,'2016-01-03 12:23:06','2022-12-15 21:10:56',NULL),(172,'Liero','Worms-like game',0,1,227904,46512,'https://github.com/gameblabla/liero-nspire',1460,'2016-01-03 12:24:06','2022-12-15 21:40:03',NULL),(173,'Tail-Tale','Puzzle game, similar to Tetris Attack',0,1,290570,46511,'https://www.omnimaga.org/ti-nspire-projects/sdl-ports-for-nspire/msg401798/#msg401798',981,'2016-01-03 12:29:37','2022-12-09 18:32:07',NULL),(174,'Vecx','Vectrex emulator',0,1,288560,46508,'https://www.omnimaga.org/ti-nspire-projects/sdl-ports-for-nspire/msg401769/#msg401769',1774,'2016-01-03 12:30:47','2022-12-11 20:01:50',NULL),(175,'Falling Time','Falldown clone',0,1,289918,46507,'https://github.com/gameblabla/fallingtime',1646,'2016-01-03 12:32:29','2022-12-09 18:32:01',NULL),(176,'Cave Story (NX Engine)','Port of Cave Story',0,1,219777,46496,'https://github.com/gameblabla/nxengine-nspire',5764,'2016-01-03 12:34:11','2022-12-15 17:36:26',NULL),(177,'The Last Mission','Port of The Last Mission',0,1,219743,46495,'https://tiplanet.org/forum/archives_voir.php?id=219743',3037,'2016-01-03 12:40:28','2022-12-14 00:14:06',NULL),(178,'KhiCas','GIAC/Xcas port',1,1,79135,0,'https://www-fourier.ujf-grenoble.fr/~parisse/giac.html',12164,'2016-01-03 12:42:53','2022-12-15 21:39:17',NULL),(179,'nSonic2MS','File browser with secret mode',0,1,171136,0,'https://tiplanet.org/forum/archives_voir.php?id=171136',1406,'2016-01-03 12:46:46','2022-12-15 21:39:01',NULL);
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `editor` tinyint(1) NOT NULL DEFAULT 0,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` text COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_name_unique` (`name`),
  KEY `users_author_id_foreign` (`author_id`),
  CONSTRAINT `users_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=147 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
-- user table omitted for obvious reasons
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-16 14:47:43
