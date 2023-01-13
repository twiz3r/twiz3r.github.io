-- MySQL dump 10.13  Distrib 5.6.24, for Win32 (x86)
--
-- Host: localhost    Database: ordering_db
-- ------------------------------------------------------
-- Server version	5.6.24

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
-- Table structure for table `addons_tbl`
--

DROP TABLE IF EXISTS `addons_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `addons_tbl` (
  `add_id` int(11) NOT NULL AUTO_INCREMENT,
  `add_name` varchar(100) NOT NULL,
  `add_description` varchar(100) NOT NULL,
  `add_price` int(11) NOT NULL,
  `add_post` varchar(100) NOT NULL,
  `add_isdel` int(11) NOT NULL,
  PRIMARY KEY (`add_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addons_tbl`
--

LOCK TABLES `addons_tbl` WRITE;
/*!40000 ALTER TABLE `addons_tbl` DISABLE KEYS */;
/*!40000 ALTER TABLE `addons_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audit_tbl`
--

DROP TABLE IF EXISTS `audit_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audit_tbl` (
  `atrail_id` int(11) NOT NULL AUTO_INCREMENT,
  `atrail_user_id` int(11) NOT NULL,
  `atrail_date` date NOT NULL,
  `atrail_time` time NOT NULL,
  `atrail_action` varchar(100) NOT NULL,
  `atrail_location` varchar(100) NOT NULL,
  PRIMARY KEY (`atrail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audit_tbl`
--

LOCK TABLES `audit_tbl` WRITE;
/*!40000 ALTER TABLE `audit_tbl` DISABLE KEYS */;
INSERT INTO `audit_tbl` VALUES (1,1,'2015-09-11','06:51:22','ADD','FAQ'),(2,1,'2015-09-11','06:52:29','ADD','FAQ'),(3,1,'2015-09-11','06:53:12','ADD','FAQ'),(4,1,'2015-09-11','06:54:06','ADD','FAQ'),(5,1,'2015-09-11','06:56:38','ADD','FAQ'),(6,1,'2015-09-11','06:58:00','ADD','FAQ'),(7,1,'2015-09-11','06:58:32','ADD','FAQ'),(8,1,'2015-09-11','06:59:32','ADD','FAQ'),(9,1,'2015-09-11','07:02:10','ADD','Product'),(10,1,'2015-09-11','07:03:29','ADD','Product'),(11,1,'2015-09-11','07:04:17','ADD','Product'),(12,1,'2015-09-14','11:32:16','ADD','Product'),(13,1,'2015-09-14','11:35:28','ADD','Product'),(14,1,'2015-09-14','11:36:42','ADD','Product'),(15,1,'2015-09-14','11:56:02','ADD','Product'),(16,1,'2015-09-14','11:57:46','ADD','Product'),(17,1,'2015-09-14','03:38:23','ADD','Product'),(18,1,'2015-09-14','03:38:36','Delete','Product'),(19,1,'2015-09-15','01:23:59','ADD','Product'),(20,1,'2015-09-15','01:26:36','ADD','Product'),(21,1,'2015-09-15','01:28:15','ADD','Product'),(22,1,'2015-09-15','01:32:17','ADD','Product'),(23,1,'2015-09-15','01:34:37','ADD','Product'),(24,1,'2015-09-15','01:36:27','ADD','Product'),(25,1,'2015-09-15','01:38:42','ADD','Product'),(26,1,'2015-09-15','01:39:13','Edit','Product'),(27,1,'2015-09-15','01:41:10','ADD','Product'),(28,1,'2015-09-15','01:42:08','ADD','Product'),(29,1,'2015-09-15','01:43:02','ADD','Product'),(30,1,'2015-09-15','01:44:01','ADD','Product'),(31,1,'2015-09-15','01:46:25','ADD','Product'),(32,1,'2015-09-15','01:47:38','ADD','Product'),(33,1,'2015-09-15','01:49:45','ADD','Product'),(34,1,'2015-09-15','01:50:37','ADD','Product'),(35,1,'2015-09-15','01:51:31','ADD','Product'),(36,1,'2015-09-15','01:52:30','ADD','Product'),(37,1,'2015-09-15','01:53:44','ADD','Product'),(38,1,'2015-09-15','01:55:02','ADD','Product'),(39,1,'2015-09-15','01:56:08','ADD','Product'),(40,1,'2015-09-15','01:57:32','ADD','Product'),(41,1,'2015-09-15','01:58:44','ADD','Product'),(42,1,'2015-09-15','01:59:13','Edit','Product'),(43,1,'2015-09-15','02:00:34','ADD','Product'),(44,1,'2015-09-15','02:01:10','Edit','Product'),(45,1,'2015-09-19','03:30:14','Delete','Product'),(46,1,'2015-09-19','04:06:21','Delete','Product'),(47,1,'2015-10-01','06:23:41','ADD','NewORder'),(48,1,'2015-10-01','06:24:51','DELETE','Customized ORder'),(49,1,'2015-10-01','06:24:53','ADD','Customized additem'),(50,1,'2015-10-01','12:26:15','DELETE','NewOrder'),(51,1,'2015-10-01','12:10:00','ADD','NewORder'),(52,1,'2015-10-01','12:26:53','UPDATE','NewOrder'),(53,1,'2015-10-01','12:33:07','DELETE','NewOrder'),(54,1,'2015-10-01','12:33:11','ADD','Customized additem'),(55,1,'2015-10-01','12:34:13','DELETE','Customized ORder'),(56,1,'2015-10-01','12:10:00','ADD','NewORder'),(57,1,'2015-10-01','12:10:00','ADD','NewORder'),(58,1,'2015-10-01','01:10:00','ADD','NewORder'),(59,1,'2015-10-01','02:04:59','ADD','Customized additem'),(60,1,'2015-10-01','02:08:59','ADD','Customized additem'),(61,1,'2015-10-01','02:11:51','ADD','Customized additem'),(62,1,'2015-10-01','03:26:56','ADD','Customized additem'),(63,1,'2015-10-01','03:27:29','UPDATE','Customized ORder'),(64,1,'2015-10-01','04:05:53','ADD','Customized additem'),(65,1,'2015-10-01','04:06:06','UPDATE','Customized ORder'),(66,1,'2015-10-01','04:06:27','DELETE','Customized ORder'),(67,1,'2015-10-01','04:06:32','ADD','Customized additem'),(68,1,'2015-10-01','04:06:37','UPDATE','Customized ORder'),(69,1,'2015-10-01','04:06:52','UPDATE','Customized ORder'),(70,1,'2015-10-01','05:21:24','ADD','Customized additem'),(71,1,'2015-10-01','05:21:30','UPDATE','Customized ORder'),(72,1,'2015-10-01','05:59:23','ADD','Customized additem'),(73,1,'2015-10-01','05:59:33','UPDATE','Customized ORder'),(74,1,'2015-10-01','06:03:40','ADD','Customized additem'),(75,1,'2015-10-01','06:03:50','UPDATE','Customized ORder'),(76,1,'2015-10-01','06:10:19','ADD','Customized additem'),(77,1,'2015-10-04','10:10:00','ADD','NewORder'),(78,1,'2015-10-05','03:10:00','ADD','NewORder'),(79,1,'2015-10-06','05:05:44','ADD','Customized additem'),(80,1,'2015-10-11','02:35:21','ADD','Category'),(81,1,'2015-10-11','02:37:25','ADD','Product'),(82,1,'2015-10-11','02:39:02','ADD','Product'),(83,1,'2015-10-11','02:10:00','ADD','NewORder'),(84,1,'2015-10-11','02:10:00','ADD','NewORder'),(85,1,'2015-10-11','02:41:18','ADD','Product'),(86,1,'2015-10-11','02:42:21','ADD','Product'),(87,1,'2015-10-11','02:42:56','ADD','Product'),(88,1,'2015-10-11','02:45:26','Edit','Product'),(89,1,'2015-10-11','02:46:22','DELETE','NewOrder'),(90,1,'2015-10-11','02:46:22','DELETE','NewOrder'),(91,1,'2015-10-11','02:10:00','ADD','NewORder'),(92,1,'2015-10-11','03:41:31','Delete','customer');
/*!40000 ALTER TABLE `audit_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `backup_tbl`
--

DROP TABLE IF EXISTS `backup_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `backup_tbl` (
  `bu_id` int(11) NOT NULL AUTO_INCREMENT,
  `bu_file` varchar(100) NOT NULL,
  `bu_date` date NOT NULL,
  `bu_time` time NOT NULL,
  `bu_isDel` int(11) NOT NULL,
  PRIMARY KEY (`bu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `backup_tbl`
--

LOCK TABLES `backup_tbl` WRITE;
/*!40000 ALTER TABLE `backup_tbl` DISABLE KEYS */;
INSERT INTO `backup_tbl` VALUES (1,'ordering_db_01431820150924.sql','2015-09-24','01:43:18',0),(2,'ordering_db_18564920150930.sql','2015-09-30','18:56:49',0),(3,'ordering_db_15073120151002.sql','2015-10-02','15:07:31',0),(4,'ordering_db_15073820151002.sql','2015-10-02','15:07:38',0),(5,'ordering_db_17195920151005.sql','2015-10-05','17:19:59',0),(6,'ordering_db_14232920151011.sql','2015-10-11','14:23:29',0),(7,'ordering_db_14233220151011.sql','2015-10-11','14:23:32',0),(8,'ordering_db_14261020151011.sql','2015-10-11','14:26:10',0),(9,'ordering_db_15481620151011.sql','2015-10-11','15:48:16',0);
/*!40000 ALTER TABLE `backup_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `card_tbl`
--

DROP TABLE IF EXISTS `card_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `card_tbl` (
  `card_id` int(11) NOT NULL AUTO_INCREMENT,
  `card_transcode` varchar(100) NOT NULL,
  `card_number` int(11) NOT NULL,
  `card_reference` int(11) NOT NULL,
  PRIMARY KEY (`card_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `card_tbl`
--

LOCK TABLES `card_tbl` WRITE;
/*!40000 ALTER TABLE `card_tbl` DISABLE KEYS */;
INSERT INTO `card_tbl` VALUES (1,'$transCode',0,0),(2,'ORDER-038',4165,1234567890),(3,'ORDER-078',324234234,2147483647);
/*!40000 ALTER TABLE `card_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart1_tbl`
--

DROP TABLE IF EXISTS `cart1_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart1_tbl` (
  `cart1_id` int(11) NOT NULL AUTO_INCREMENT,
  `cart1_prod_id` int(11) NOT NULL,
  `cart1_cust_id` int(11) NOT NULL,
  `cart1_unit` bigint(11) NOT NULL,
  `cart1_qty` decimal(10,0) NOT NULL,
  `cart1_price` decimal(10,0) NOT NULL,
  PRIMARY KEY (`cart1_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart1_tbl`
--

LOCK TABLES `cart1_tbl` WRITE;
/*!40000 ALTER TABLE `cart1_tbl` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart1_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart2_tbl`
--

DROP TABLE IF EXISTS `cart2_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart2_tbl` (
  `cart2_id` int(11) NOT NULL AUTO_INCREMENT,
  `cart2_prod_id` int(11) NOT NULL,
  `cart2_qty` int(11) NOT NULL,
  `cart2_unit` decimal(10,0) NOT NULL,
  `cart2_price` decimal(10,0) NOT NULL,
  `cart2_cust_id` int(11) NOT NULL,
  `cart2_code` varchar(100) NOT NULL,
  PRIMARY KEY (`cart2_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart2_tbl`
--

LOCK TABLES `cart2_tbl` WRITE;
/*!40000 ALTER TABLE `cart2_tbl` DISABLE KEYS */;
INSERT INTO `cart2_tbl` VALUES (1,1,1,150,150,230,'ORDER-001'),(2,2,1,2424,2424,86,'9L407452B1364970N'),(3,3,1,2424,2424,86,'9L407452B1364970N'),(4,5,1,2444,2444,86,'9L407452B1364970N'),(5,1,1,150,150,231,'ORDER-003'),(6,1,1,150,150,232,'ORDER-004'),(7,1,1,2424,2424,233,'ORDER-005'),(8,5,1,2444,2444,234,'ORDER-006'),(9,18,2,2990,2990,235,'33T3689575303023K'),(10,3,1,2424,2424,236,'ORDER-008'),(11,1,1,150,150,237,'ORDER-009'),(12,1,1,150,150,238,'ORDER-010'),(13,1,1,150,150,239,'ORDER-011'),(14,15,4,2550,2550,241,'78R3253796484074W'),(15,4,5,800,4000,242,'ORDER-013'),(16,1,4,2424,2424,86,'27598041609217249'),(17,2,4,2424,2424,86,'17253506AV172140E'),(18,1,3,2424,7272,86,'39847689TU867205V'),(19,4,4,800,3200,243,'ORDER-017'),(20,4,4,800,3200,244,'ORDER-018'),(21,3,3,500,1500,245,'ORDER-019'),(22,4,1,800,800,246,'ORDER-020'),(23,1,1,2424,2424,247,'ORDER-021'),(24,2,1,2424,2424,248,'ORDER-022'),(25,4,1,800,800,249,'ORDER-023'),(26,44,1,150,150,250,'ORDER-024');
/*!40000 ALTER TABLE `cart2_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `catmain_tbl`
--

DROP TABLE IF EXISTS `catmain_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `catmain_tbl` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(100) NOT NULL,
  `cat_description` varchar(100) NOT NULL,
  `cat_isdel` int(11) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catmain_tbl`
--

LOCK TABLES `catmain_tbl` WRITE;
/*!40000 ALTER TABLE `catmain_tbl` DISABLE KEYS */;
INSERT INTO `catmain_tbl` VALUES (1,'Anniversary','Bouquet & Flowers in a box suited for your anniversary',0),(2,'Birthday','Bouquet, Stemmed, Boxed flowers available for affordable prices that suits for birthdays',0),(3,'Congratulations','Bouquet, Stemmed, Boxed flowers available for affordable prices suits especially for congratulating ',0),(4,'Get Well','Bouquet, vased flowers available for affordable prices.',0),(5,'New Baby','Bouquet, Stemmed, Vased flowers available for affordable prices.',0),(6,'Best Seller','Best seller as of the month.',0),(7,'Featured Products','Available products as of the moment.',0),(8,'New Products','New products by the company as of the moment.',0),(9,'Thank You','Bouquet, Stemmed, Vased flowers available for affordable prices.',0),(10,'Wedding','Bouquet & Entourage flowers available for your wedding theme.',0),(11,'Sympathy','Condolence flowers for affordable price.',0),(12,'Love & Romance','Bouquet, Stemmed, Boxed flowers available for affordable prices.',0),(13,'Pcs','Customized Flower',0);
/*!40000 ALTER TABLE `catmain_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `check_tbl`
--

DROP TABLE IF EXISTS `check_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `check_tbl` (
  `check_id` int(11) NOT NULL AUTO_INCREMENT,
  `check_trans_code` varchar(100) NOT NULL,
  `check_routing_num` varchar(100) NOT NULL,
  `check_acct_num` varchar(100) NOT NULL,
  `check_acct_name` varchar(100) NOT NULL,
  `check_acct_type` varchar(100) NOT NULL,
  `check_bank` varchar(100) NOT NULL,
  PRIMARY KEY (`check_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `check_tbl`
--

LOCK TABLES `check_tbl` WRITE;
/*!40000 ALTER TABLE `check_tbl` DISABLE KEYS */;
INSERT INTO `check_tbl` VALUES (1,'ORDER-001','23456789','1234567890','123456789','3456789','234567890');
/*!40000 ALTER TABLE `check_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `counter_tbl`
--

DROP TABLE IF EXISTS `counter_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `counter_tbl` (
  `counter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `counter_tbl`
--

LOCK TABLES `counter_tbl` WRITE;
/*!40000 ALTER TABLE `counter_tbl` DISABLE KEYS */;
INSERT INTO `counter_tbl` VALUES (40);
/*!40000 ALTER TABLE `counter_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `custmain_tbl`
--

DROP TABLE IF EXISTS `custmain_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `custmain_tbl` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_FName` varchar(100) NOT NULL,
  `cust_LName` varchar(100) NOT NULL,
  `cust_CNum` bigint(20) NOT NULL,
  `cust_email` varchar(100) NOT NULL,
  `cust_password` varchar(100) NOT NULL,
  `cust_address` varchar(100) NOT NULL,
  `cust_isdel` int(11) NOT NULL,
  `cust_isVerified` int(11) NOT NULL,
  `cust_code` varchar(100) NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB AUTO_INCREMENT=251 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `custmain_tbl`
--

LOCK TABLES `custmain_tbl` WRITE;
/*!40000 ALTER TABLE `custmain_tbl` DISABLE KEYS */;
INSERT INTO `custmain_tbl` VALUES (1,'aa','aa',0,'','','',1,0,''),(2,'jake','Bustos',0,'','','',1,0,''),(3,'jacob','bustos',0,'','','',1,0,''),(4,'aa','a',0,'','','',1,0,''),(5,'aa','aa',0,'','','',1,0,''),(6,'aa','bb',0,'','','',1,0,''),(7,'aa','aa',0,'','','',1,0,''),(10,'jake','bustos',9066062979,'jakebustos06@gmail.com','12','sta ana',0,1,'1200cf8a'),(11,'a','a',0,'','','',1,0,''),(12,'Makz','Baguio',0,'','','',1,0,''),(13,'Makz','Baguio',0,'','','',1,0,''),(14,'ss','ss',0,'','','',1,0,''),(15,'d','ddd',0,'','','',1,0,''),(16,'d','ddd',0,'','','',1,0,''),(17,'aa','aa',0,'','','',1,0,''),(18,'aa','aa',0,'','','',1,0,''),(19,'ss','ss',0,'','','',1,0,''),(20,'ss','ss',0,'','','',1,0,''),(21,'jacob','bustos',0,'','','',1,0,''),(22,'jacob','bustos',0,'','','',1,0,''),(23,'Makz','Baguio',9261152468,'','','',1,0,''),(24,'Makz','Baguio',9261152468,'','','',1,0,''),(25,'james','mendiola',9012391023,'','','',1,0,''),(26,'jake','bustoss',1231231231,'','','',1,0,''),(27,'Makz','Baguio',9261152468,'','','',1,0,''),(28,'Makz','Baguio',9261152468,'','','',1,0,''),(29,'f','ff',1111111111,'','','',1,0,''),(30,'ss','ss',1111111111,'','','',1,0,''),(31,'s','ss',1111111111,'','','',1,0,''),(32,'ss','ss',1111111111,'','','',1,0,''),(33,'aa','aa',1111111111,'','','',1,0,''),(34,'ff','ff',1111111111,'','','',1,0,''),(35,'ss','ss',1111111111,'','','',1,0,''),(36,'ss','ss',1111111111,'','','',1,0,''),(37,'aa','aa',1111111111,'','','',1,0,''),(38,'ss','ss',1111111111,'','','',1,0,''),(39,'jacob','bustos',9066062979,'','','',1,0,''),(40,'ss','ss',1111111111,'','','',1,0,''),(41,'jacob','bustos',906606297,'','','',1,0,''),(42,'jacob john','bustos',9020202212,'','','',1,0,''),(43,'jake','bustos',1231231231,'','','',1,0,''),(44,'jacob','bustos',1231231232,'','','',1,0,''),(45,'jakebustos','bustos',1111111111,'','','',1,0,''),(46,'ss','ss',1111111111,'','','',1,0,''),(47,'gg','gg',1111111111,'','','',1,0,''),(48,'jake','bustos',3213213123,'','','',1,0,''),(49,'sss','sss',1111111111,'','','',1,0,''),(50,'ww','ww',1111111111,'','','',1,0,''),(51,'kennet','manalng',1111111111,'','','',1,0,''),(52,'kennet','manalang',1111111111,'','','',1,0,''),(53,'a','a',1111111111,'','','',1,0,''),(54,'ss','ss',1111111111,'','','',1,0,''),(55,'ss','ss',1111111111,'','','',1,0,''),(56,'aa','aa',1111111111,'','','',1,0,''),(57,'ss','s',1111111111,'','','',1,0,''),(58,'kiel','Baguio',9898989898,'','','',1,0,''),(59,'jake','bustos',9066062979,'jj.bustos06@gmail.com','123','taguig',0,0,'1200cf8a'),(60,'jake','bustos',1111111111,'','','',1,0,''),(61,'aa','aa',1111111111,'ss@ss','123','123',0,0,''),(62,'Makz','Baguio',9261152468,'','','',1,0,''),(63,'aa','aa',1111111111,'','','',1,0,''),(64,'ss','ss',1111111111,'','','',1,0,''),(65,'baloy','tae',1111111111,'','','',1,0,''),(66,'jacob','bustos',1111111111,'','','',1,0,''),(67,'jake','bustos',1111111111,'','','',1,0,''),(68,'james','mendiola',1111111111,'','','',1,0,''),(69,'ss','ss',1111111111,'','','',1,0,''),(70,'ss','ss',1111111111,'','','',1,0,''),(71,'ss','ss',1111111111,'','','',1,0,''),(72,'ff','ff',1111111111,'','','',1,0,''),(73,'qwerty','ss',1111111111,'','','',1,0,''),(74,'jaja','bustos',1111111111,'','','',1,0,''),(75,'jaja','bustos',1111111111,'','','',1,0,''),(76,'aa','aa',1111111111,'','','',1,0,''),(77,'dd','dd',1111111111,'','','',1,0,''),(78,'jj','bustos',1111111111,'','','',1,0,''),(79,'pat','ss',1111111111,'','','',1,0,''),(80,'aa','aa',1111111111,'','','',1,0,''),(81,'ss','ss',1111111111,'','','',1,0,''),(82,'sss','ss',1111111111,'','','',1,0,''),(83,'sss','s',1111111111,'','','',1,0,''),(84,'ff','ff',1111111111,'','','',1,0,''),(85,'ss','ss',1111111111,'','','',1,0,''),(86,'jacob john','bustos',9066062979,'jj.bustos06@gmail.com','123','sta ana pampanga',0,1,'fbc42045'),(87,'ss','ss',1111111111,'ss@ss','123','123',0,0,''),(88,'ss','ss',1111111111,'1112@asd','111','111',1,0,''),(89,'thesis','group',1111111111,'1111@111','123','sta na',1,0,''),(90,'Bryan','Mendiola',9876543656,'brycano1@gmail.com','asd','Guagua',0,0,'d7ed9d71'),(91,'Bryan','Mendiola',987654456,'brycano1@gmail.com','asd','Guagua',0,0,'d7ed9d71'),(92,'Bryan','Mendiola',90976767,'brycano1@gmail.com','asd','guagua',0,0,'d7ed9d71'),(93,'Bryan','Mendiola',987898767878,'brycano1@gmail.com','asd','Guagua',0,0,'d7ed9d71'),(94,'kiel','baloy',1212345512,'ezekielbaloy00@gmail.com','12345678','arayat',0,0,'b0046760'),(95,'jake','qweasd',123213213,'jakebustos06@gmail.com','12','arastyasd',0,0,'1200cf8a'),(96,'Bryan','mendiola',12345,'brycano1@gmail.com','12','weqeqw',0,0,'d7ed9d71'),(97,'jakebustos','bustos',11111111,'ezekielbaloy00@gmail.com','123','ssss',0,0,'38ea1f48'),(98,'ss','bb',123123,'ezekielbaloy00@gmail.com','123','ss',0,0,'3691308f'),(99,'ss','ww',11111,'ezekielbaloy00@gmail.com','123','ss',0,0,'3691308f'),(100,'dd','dd',111111,'jj.bustos@gmail.com','123','dd',0,0,'1aabac6d'),(101,'ff','Ff',1111111111111,'jj.bustos06@gmail.com','123','dd',0,0,'633de4b0'),(102,'ss','ss',1231231,'jj.bustos06@gmail.com','123','ss',0,0,'3691308f'),(103,'qq','ww',1231231,'ezekielbaloy00@gmail.com','123','ss',0,0,'099b3b06'),(104,'sdasda','sdasd',1231231,'ezekielbaloy00@gmail.com','123','Gg',0,0,'392a32ea'),(105,'ss','ssdf',111,'ezekielbaloy00@gmail.com','213','ss',0,0,'3691308f'),(106,'ff','fff1111',123,'ezekielbaloy00@gmail.com','22','gg',0,0,'633de4b0'),(107,'sss','ssssssss',31231,'123','jj','dd',0,0,'9f6e6800'),(108,'jj','ff',12342312,'ezekielbaloy00@gmail.com','123','gg',0,0,'bf2bc254'),(109,'ss','dd',31231231,'brycano1@gmail.com','123','ss',0,0,'3691308f'),(110,'xx','xx',123123,'kennetmanalang@gmail.com','123','ss',0,0,'9336ebf2'),(111,'ss','ss',1111111111,'','','',1,0,''),(112,'jsjs','jsjs',11111,'brycano1@gmail.com','123','ff',0,0,'3904c310'),(113,'ss','hh',11111,'jj.bustos06@gmail.com','123','ff',0,0,'3691308f'),(114,'ss','hh',11111,'jj.bustos06@gmail.com','123','ff',0,0,'3691308f'),(115,'ss','ssssssss',1111111,'brycano1@gmail.com','123','ss',0,0,'3691308f'),(116,'jacob','bustos',9066062979,'','','',1,0,''),(117,'aa','aa',11111,'brycano1@gmail.com','123','ss',0,0,'4124bc0a'),(118,'ss','ww',12312312,'jj.bustos@gmail.com','12','sss',0,0,'3691308f'),(119,'ss','ss',231231,'ss@ss','123','ssss',0,0,'3691308f'),(120,'aaaaaa','ss',123123,'jj.bustos@gmail.com','12','dd',0,0,'0b4e7a0e'),(121,'jj','bustos',9066062979,'jj.bustos@gmail.com','123','dd',0,0,'bf2bc254'),(122,'jacob','bustos',9066062979,'jj.bustos06@gmail.com','123','sss',0,0,'736b19f6'),(123,'caroline','sagum',213123,'carol.pxt.cs@gmail.com','123','ssss',1,1,'e1c565c5'),(125,'aSdfa','fasdf',3213123,'31231','1','ada',0,0,'abf159c4'),(126,'jacob','bustos',9066062979,'carol.pxt.cs@gmail.com','iamphantom','required',0,0,'736b19f6'),(127,'aa','aa',23123123,'aa@test.com','aa','aa',0,0,'4124bc0a'),(128,'a','a',1,'a','1','a',0,0,'0cc175b9'),(129,'s','s',1,'ss@ss','11','ss',0,0,'03c7c0ac'),(130,'caroline','bustos',9066062979,'carol.pxt.cs@gmail.com','123','sta ana pampanga',0,0,'e1c565c5'),(131,'aa','aa',1111111111,'','','',1,0,''),(132,'john jacob','bustos',9066062979,'','','',1,0,''),(133,'ss','ss',1111111111,'','','',1,0,''),(134,'dd','dd',1111111111,'','','',1,0,''),(135,'ff','ff',1111111111,'','','',1,0,''),(136,'dd','dd',1111111111,'','','',1,0,''),(137,'dd','dd',1111111111,'','','',1,0,''),(138,'dd','dd',1111111111,'','','',1,0,''),(139,'aa','aa',1111111111,'','','',1,0,''),(140,'deyn','bustos',9066062979,'','','',1,0,''),(141,'deyn ','manio',9066062979,'','','',1,0,''),(142,'pat','fabian',9999999999,'','','',1,0,''),(143,'shene','lulu',990909090,'','','',1,0,''),(144,'danica','dimakilala',999999999,'','','',1,0,''),(145,'deyn','bustos',9999999999,'','','',1,0,''),(146,'ff','fff',1111111111,'','','',1,0,''),(147,'glayka','ff',1111111111,'','','',1,0,''),(148,'yayadub','bustos',1111111111,'','','',1,0,''),(149,'jakemacolets','twiz3r',1111111111,'','','',1,0,''),(150,'ss','ss',1111111111,'','','',1,0,''),(151,'micheal','paras',1111111111,'','','',1,0,''),(152,'romar','maniago',1111111111,'','','',1,0,''),(153,'jake','tiwSD',1111111111,'','','',1,0,''),(154,'Romar ','Mnasgsgdsag',1111111111111111,'romar.maniago17@gmail.com','aaa','dsadasdas',0,1,'fb52f12b'),(155,'jean','villamaria',9223372036854775807,'jiinpiir@gmail.com','jean','mexico',0,0,'b7198539'),(156,'jean','villamaria',9223372036854775807,'jiinpiir@gmail.com','jean','mexico',0,0,'b7198539'),(157,'jean','villamaria',9223372036854775807,'jiinpiir@gmail.com','jean','mexico',0,0,'b7198539'),(158,'ss','s',1111111111,'','','',1,0,''),(159,'dd','dd',1111111111,'','','',1,0,''),(160,'Makz','Baguio',9261152468,'','','',1,0,''),(161,'jake','bustos',9066062979,'','','',1,0,''),(162,'Makz','Baguio',9261152468,'','','',1,0,''),(163,'Makz','Baguio',9261152468,'','','',1,0,''),(164,'jacob','bustos',9066062979,'','','',1,0,''),(165,'jake','bustos',9066062979,'jakebustos06@gmail.com','12345678','sta ana',0,1,'1200cf8a'),(166,'aa','aa',1111111111,'','','',1,0,''),(167,'dsafas','afsdfa',11111,'sdfas@gmail.com','123','sta ana',0,0,'2967559b'),(168,'sss','ss',1111,'aa@gmail.com','123','sta ana',0,0,'9f6e6800'),(169,'art','bundalian',1111111,'russelbundalian26@gmail.com','123','calulut',0,0,'2c5f64ab'),(170,'jean','villamaria',12323434354534,'jiinpiir@gmail.com','123','asdfasd',0,0,'b7198539'),(171,'jacob','asdf',12312312312,'jiinpiir@gmail.com','asdf','asdfasdf',0,0,'736b19f6'),(172,'jacob','asdf',12312312312,'jiinpiir@gmail.com','asdf','asdfasdf',0,0,'736b19f6'),(173,'jacob','asdf',12312312312,'jiinpiir@gmail.com','asdf','asdfasdf',0,1,'736b19f6'),(174,'j','sadf',213123123,'jiinpiir@gmail.com','asdf','asfasd',0,0,'363b122c'),(175,'j','sadf',213123123,'jiinpiir@gmail.com','asdf','asfasd',0,0,'363b122c'),(176,'jacob','asdf',432423423,'jiinpiir@gmail.com','asdf','asdfasd',0,0,'736b19f6'),(177,'mae','bustos',1111111111,'','','',1,0,''),(178,'ss','ss',1111111111,'','','',1,0,''),(179,'qq','qq',1111111111,'','','',1,0,''),(180,'ss','ss',1111111111,'','','',1,0,''),(181,'ss','ss',1111111111,'','','',1,0,''),(182,'jake','bustos',1111111111,'','','',1,0,''),(183,'ee','ee',1111111111,'','','',1,0,''),(184,'bb','bb',1111111111,'','','',1,0,''),(185,'ss','ss',1111111111,'','','',1,0,''),(186,'dd','dd',1111111111,'','','',1,0,''),(187,'dd','dd',1111111111,'','','',1,0,''),(188,'ff','ff',1111111111,'','','',1,0,''),(189,'jacob john','bustos',9066062979,'','','',1,0,''),(190,'jake','bustos',9066062979,'','','',1,0,''),(191,'ss','sssss',1111111111,'','','',1,0,''),(192,'ezekiel','baloy',1111111111,'','','',1,0,''),(193,'dd','dd',1111111111,'','','',1,0,''),(194,'romar','maniago',902039203,'','','',1,0,''),(195,'christle','vital',92010101,'','','',1,0,''),(196,'ezekiel','baluyot',2312312312,'','','',1,0,''),(197,'romar','maniago',3231231321,'','','',1,0,''),(198,'dd','dd',3213212324,'','','',1,0,''),(199,'christle','vital',1231231232,'','','',1,0,''),(200,'ff','ff',1111111111,'','','',1,0,''),(201,'ee','ee',1111111111,'','','',1,0,''),(202,'micheal','paras',1111111111,'','','',1,0,''),(203,'dd','dd',1111111111,'','','',1,0,''),(204,'jake','bustos',1111111111,'','','',1,0,''),(205,'qq','qq',1111111111,'','','',1,0,''),(206,'pat','mendiola',1231231231,'','','',1,0,''),(207,'justine','clarin',1231231231,'','','',1,0,''),(208,'baloy','baboy',1231231231,'','','',1,0,''),(209,'jam','clarin',1231231231,'','','',1,0,''),(210,'mae','bustos',1231231231,'','','',1,0,''),(211,'mic','tae',1231231231,'','','',1,0,''),(212,'baloy','baluga',2312312312,'','','',1,0,''),(213,'bryan','mendiola',987677676,'','','',1,0,''),(214,'James','asd',213123123123,'brycano1@gmail.com','asd','pampanga',0,0,'d52e32f3'),(215,'aa','aa',1111111111,'','','',1,0,''),(216,'dd','dd',1111111111,'','','',1,0,''),(217,'jacob','bustos',111111111,'','','',1,0,''),(218,'jake','bustos',1111111111,'','','',1,0,''),(219,'ezekiel','baloy',1111111111,'','','',1,0,''),(220,'brayn','mendiola',2222222222,'','','',1,0,''),(221,'pat','ilagan',1111111111,'','','',1,0,''),(222,'ss','ss',1111111111,'','','',1,0,''),(223,'ss','ss',1111111111,'','','',1,0,''),(224,'aa','aa',1111111111,'','','',1,0,''),(225,'ww','ww',1111111111,'','','',1,0,''),(226,'dd','dd',1111111111,'','','',1,0,''),(227,'ee','ee',1111111111,'','','',1,0,''),(228,'dd','dd',1231231231,'','','',1,0,''),(229,'ss','ss',1111111111,'','','',1,0,''),(230,'jake','bustos',9066062979,'','','',1,0,''),(231,'ezekiel','baloy',1231231231,'','','',1,0,''),(232,'ff','ff',2312312312,'','','',1,0,''),(233,'christle','vital',1123123123,'','','',1,0,''),(234,'deniel','manio',902992920,'','','',1,0,''),(235,'bryan','Mendiola',9353477250,'brycano1@gmail.com','asd','Pampanga',0,1,'7d4ef62d'),(236,'jacob','bustos',9066062979,'','','',1,0,''),(237,'ss','dd',1111111111,'','','',1,0,''),(238,'pat','ilagan',9020202020,'','','',1,0,''),(239,'jacob john','bustos',2323232323,'','','',1,0,''),(240,'louie','ruiz',9258860808,'louieruizstisanfernando@gmail.com','stisti','sanfernando',0,0,'b6ea4320'),(241,'louie','ruiz',9258860808,'louieruizstisanfernando@gmail.com','stisti','sanfernando',0,1,'b6ea4320'),(242,'jose','rizal',9066062979,'','','',1,0,''),(243,'jaco','asdas',23123123,'','','',1,0,''),(244,'ss','ss',1111111111,'','','',1,0,''),(245,'kennet','manalang',989787878,'','','',1,0,''),(246,'dd','dd',3423423423,'','','',1,0,''),(247,'ss','ss',1111111111,'','','',1,0,''),(248,'dd','dd',1111111111,'','','',1,0,''),(249,'jacob1','bustos',1231231231,'','','',1,0,''),(250,'jake','bustos',9066062979,'','','',1,0,'');
/*!40000 ALTER TABLE `custmain_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empmain_tbl`
--

DROP TABLE IF EXISTS `empmain_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empmain_tbl` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_FName` varchar(100) NOT NULL,
  `emp_LName` varchar(100) NOT NULL,
  `emp_MI` varchar(11) NOT NULL,
  `emp_address` varchar(100) NOT NULL,
  `emp_bdate` date NOT NULL,
  `emp_email` varchar(100) NOT NULL,
  `emp_CNum` bigint(20) NOT NULL,
  `emp_position` varchar(100) NOT NULL,
  `emp_image` varchar(100) NOT NULL,
  `emp_isdel` int(11) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empmain_tbl`
--

LOCK TABLES `empmain_tbl` WRITE;
/*!40000 ALTER TABLE `empmain_tbl` DISABLE KEYS */;
INSERT INTO `empmain_tbl` VALUES (1,'Jacob','Bustos','N','Sta Ana Pampanga','1993-10-06','jakebustos06@gmail.com',9066062979,'Admin','emp_image/jake.jpg',0),(2,'ezekiel','Baloy','M','guemasan arayat','1993-08-04','ezekielbaloy00@gmail.com',9268394450,'Secretary','emp_image/Koala.jpg',0),(3,'jamesbryan','mendiola','C','guagua','1994-10-10','makz.baguio.24@gmail.com',1111111111,'Employee','emp_image/Penguins.jpg',0),(4,'patrica','ilagan','m','guagua','1994-10-10','jj.bustos@gmail.com',9066062979,'Employee','emp_image/Jellyfish.jpg',1),(5,'pat','ilagan','k','guagua','1995-10-10','jj.bustos@gmail.com',9066062979,'Employee','emp_image/Tulips.jpg',1),(6,'patricia','ilagan','K','guagua','1993-10-10','jakebustos06@gmail.com',9066062979,'Employee','emp_image/Hydrangeas.jpg',0),(7,'michael','Paras','Paras','Pampanga','1990-09-09','brycano1@gmail.com',988888888,'Employee','emp_image/Desert.jpg',0);
/*!40000 ALTER TABLE `empmain_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faqmain_tbl`
--

DROP TABLE IF EXISTS `faqmain_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faqmain_tbl` (
  `FAQ_ID` int(11) NOT NULL AUTO_INCREMENT,
  `FAQ_question` varchar(100) NOT NULL,
  `FAQ_answer` varchar(100) NOT NULL,
  `FAQ_post` varchar(100) NOT NULL,
  `FAQ_isdel` int(11) NOT NULL,
  PRIMARY KEY (`FAQ_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faqmain_tbl`
--

LOCK TABLES `faqmain_tbl` WRITE;
/*!40000 ALTER TABLE `faqmain_tbl` DISABLE KEYS */;
INSERT INTO `faqmain_tbl` VALUES (1,'1. Are you accepting credit card or down payment?','No','No',0),(2,'3. Are you giving discounts?','No','No',0),(3,'4.  What is your best seller of flowers or bouquet?','You can see our best sellers in the main page of the site.','No',0),(4,'5. Is it OK to ask some of your florist for flowers estimation in a occassion?','Yes we can prefer you to our florist or you can reach our Contact Us Module','No',0),(5,'6. What is your delivery time and day?','Monday to Saturday 8:00 am to 6:30 pm \r\nSunday 8:00 am to 5:00 pm','No',0),(6,'7. Are you allowing refunding of money?','No.','No',0),(7,'8. What is your affordable flower or bouquet?','All of our products is affordable that suits on your budget.','No',0);
/*!40000 ALTER TABLE `faqmain_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `levels_tbl`
--

DROP TABLE IF EXISTS `levels_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `levels_tbl` (
  `levels_id` int(11) NOT NULL AUTO_INCREMENT,
  `levels_position` varchar(100) NOT NULL,
  `levels_fm` int(11) NOT NULL,
  `levels_trans` int(11) NOT NULL,
  `levels_reports` int(11) NOT NULL,
  `levels_util` int(11) NOT NULL,
  PRIMARY KEY (`levels_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `levels_tbl`
--

LOCK TABLES `levels_tbl` WRITE;
/*!40000 ALTER TABLE `levels_tbl` DISABLE KEYS */;
INSERT INTO `levels_tbl` VALUES (1,'Admin',1,1,1,1),(2,'Secretary',0,1,1,0),(3,'Employee',0,1,0,0);
/*!40000 ALTER TABLE `levels_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment_tbl`
--

DROP TABLE IF EXISTS `payment_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment_tbl` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_cust_id` int(11) NOT NULL,
  `payment_trans_code` varchar(100) NOT NULL,
  `payment_amount` decimal(10,2) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `payment_discount` decimal(10,2) NOT NULL,
  `payment_balance` decimal(10,2) NOT NULL,
  `payment_cash` decimal(10,2) NOT NULL,
  `payment_change` decimal(10,2) NOT NULL,
  `payment_osca_number` bigint(11) NOT NULL,
  `payment_date` date NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_tbl`
--

LOCK TABLES `payment_tbl` WRITE;
/*!40000 ALTER TABLE `payment_tbl` DISABLE KEYS */;
INSERT INTO `payment_tbl` VALUES (1,230,'ORDER-001',650.00,'Cash',0.00,0.00,650.00,0.00,0,'2015-10-01'),(2,86,'9L407452B1364970N',7792.00,'PayPal',0.00,0.00,7792.00,0.00,0,'2015-10-01'),(3,231,'ORDER-003',150.00,'Cash',0.00,0.00,150.00,0.00,0,'2015-10-01'),(4,232,'ORDER-004',650.00,'Cash',0.00,0.00,650.00,0.00,0,'2015-10-01'),(5,233,'ORDER-005',2439.20,'Cash',484.80,0.00,2439.20,0.00,222,'2015-10-01'),(6,234,'ORDER-006',2444.00,'Cash',0.00,0.00,2444.00,0.00,0,'2015-10-01'),(7,235,'33T3689575303023K',3490.00,'PayPal',0.00,0.00,3490.00,0.00,0,'2015-10-01'),(8,236,'ORDER-008',2924.00,'Cash',0.00,0.00,2924.00,0.00,0,'2015-10-01'),(9,237,'ORDER-009',150.00,'Cash',0.00,0.00,150.00,0.00,0,'2015-10-01'),(10,238,'ORDER-010',150.00,'Cash',0.00,0.00,150.00,0.00,0,'2015-10-01'),(11,239,'ORDER-011',150.00,'Cash',0.00,0.00,150.00,0.00,0,'2015-10-01'),(12,241,'78R3253796484074W',3050.00,'PayPal',0.00,0.00,3050.00,0.00,0,'2015-10-01'),(13,242,'ORDER-013',4500.00,'Cash',0.00,0.00,4500.00,0.00,0,'2015-10-01'),(14,86,'27598041609217249',2924.00,'PayPal',0.00,0.00,2924.00,0.00,0,'2015-10-01'),(15,86,'17253506AV172140E',2924.00,'PayPal',0.00,0.00,2924.00,0.00,0,'2015-10-01'),(16,86,'39847689TU867205V',7772.00,'PayPal',0.00,0.00,7772.00,0.00,0,'2015-10-01'),(17,243,'ORDER-017',3060.00,'Cash',0.00,0.00,3060.00,0.00,0,'2015-10-01'),(18,244,'ORDER-018',3060.00,'Cash',0.00,0.00,3060.00,0.00,0,'2015-10-01'),(19,245,'ORDER-019',1850.00,'Cash',0.00,0.00,2000.00,150.00,0,'2015-10-01'),(20,246,'ORDER-020',1180.00,'Cash',0.00,0.00,1180.00,0.00,0,'2015-10-01'),(21,247,'ORDER-021',2424.00,'Cash',0.00,0.00,2424.00,0.00,0,'2015-10-04'),(22,248,'ORDER-022',2424.00,'Cash',0.00,0.00,2424.00,0.00,0,'2015-10-05'),(23,249,'ORDER-023',1300.00,'Cash',0.00,0.00,1300.00,0.00,0,'2015-10-06'),(24,250,'ORDER-024',650.00,'Cash',0.00,0.00,650.00,0.00,0,'2015-10-11');
/*!40000 ALTER TABLE `payment_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prodmain_tbl`
--

DROP TABLE IF EXISTS `prodmain_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prodmain_tbl` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(100) NOT NULL,
  `prod_description` varchar(100) NOT NULL,
  `prod_price` int(100) NOT NULL,
  `prod_category` varchar(100) NOT NULL,
  `prod_image` varchar(100) NOT NULL,
  `prod_post` varchar(100) NOT NULL,
  `prod_isdel` int(11) NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prodmain_tbl`
--

LOCK TABLES `prodmain_tbl` WRITE;
/*!40000 ALTER TABLE `prodmain_tbl` DISABLE KEYS */;
INSERT INTO `prodmain_tbl` VALUES (1,'Bouquet1002','One dozen long stemmed fuchsia pink roses in bouquet wrapped in paper cloth and abaca fiber with rib',2424,'Anniversary','image/bqt_1002.jpg','No',0),(2,'Bouquet1003','One dozen long stemmed Orange roses in bouquet wrapped in paper cloth and abaca fiber with ribbons.',2424,'Anniversary','image/bqt_1003.jpg','No',0),(3,'Bouquet1004','One dozen long stemmed red roses in bouquet wrapped in paper cloth and abaca fiber with ribbons.',2424,'Anniversary','image/bqt_1004.jpg','No',0),(4,'Bouquet1005','One dozen long stemmed yellow pink roses in bouquet wrapped in paper cloth and abaca fiber with ribb',2424,'Anniversary','image/bqt_1005.jpg','No',0),(5,'Bouquet1006','One dozen long stemmed light red roses in bouquet wrapped in paper cloth and abaca fiber with ribbon',2444,'Anniversary','image/bqt_1006.jpg','No',0),(6,'Bouquet1007','One dozen long stemmed pink roses in bouquet wrapped in paper cloth and abaca fiber with ribbons.',2500,'Best Seller','image/bqt_1007.jpg','No',0),(7,'Bouquet1008','One dozen assorted tulips (Yellow, Orange and Red) wrapped in paper clothe and abaca fiber.',5594,'Best Seller','image/bqt_1015.jpg','No',0),(8,'Bouquet1009','Round bouquet of lilac mums and fucshia pink roses wrapped in paper cloth and abaca fiber with ribbo',2800,'Best Seller','image/bqt_1013.jpg','No',0),(9,'Vase 1001','One dozen stemmed red roses in a vase wrapped with abaca fiber ribbons.',2854,'New Products','image/gsv_2001.jpg','No',0),(10,'Vase 1002','One dozen stemmed white  roses in a vase wrapped with abaca fiber ribbons.',2854,'New Products','image/gsv_2004.jpg','No',0),(11,'Vase 1003','One dozen stemmed pink  roses in a vase wrapped with abaca fiber ribbons.',2854,'New Products','image/gsv_2005.jpg','No',0),(12,'Featured001','One dozen long stemmed light red roses in bouquet wrapped in paper cloth and abaca fiber with ribbon',2890,'Featured Products','image/bqt_1010.jpg','No',0),(13,'Featured002','One dozen long stemmed light red roses in bouquet wrapped in paper cloth and abaca fiber with ribbon',3908,'Featured Products','image/gsv_2007.jpg','No',0),(14,'Featured003','One dozen long stemmed light pink roses in bouquet wrapped in paper cloth and abaca fiber with ribbo',3890,'Featured Products','image/gsv_2006.jpg','No',0),(15,'Sym1001','White anthuriums arrange in heart shape.',2550,'Sympathy','image/smy_4014.jpg','No',0),(16,'Sym1002','Big wreath with Red anthuriums and white orchids .',2800,'Sympathy','image/smy_4010.jpg','No',0),(17,'Sym1003','Big wreath with Pink anthuriums and white orchids .',2800,'Sympathy','image/smy_4009.jpg','No',0),(18,'Sym1004','Big wreath with White anthuriums and white orchids .',2990,'Sympathy','image/smy_4005.jpg','No',0),(19,'Sym1005','Big wreath with Orange anthuriums and white orchids .',3290,'Sympathy','image/smy_4003.jpg','No',0),(21,'Elegant001','1 Dozen Long Stemmed Red Rose wrapped with abaca fiber and red and white ribbon',3129,'Birthday','image/1-doz-elegant-red-180x180.jpg','No',0),(22,'Elegant002','1 Dozen of Pink and Yellow Gerberas wrapped with white abaca fiber and pink ribbon',3750,'Birthday','image/1-doz-gerberas-bouquet-180x180.jpg','No',0),(23,'Elegant003','6 Pieces Red Roses wrapped with abaca fiber and yellow ribon',1588,'Birthday','image/6 Red Roses-180x180.JPG','No',0),(24,'Elegant004','1 Dozen Short stemmed red roses wrapped with abaca fiber and red ribbon',2658,'Birthday','image/12 Red Roses-180x180.JPG','No',0),(25,'Bouquet1150','1 Dozen Long Stemmed Pink Roses wrapped with abaca fiber and pink ribbon',2980,'Congratulations','image/bouquet-of-pink-180x180.jpg','No',0),(26,'Bouquet1151','1 Dozen Long stemmed pink, yellow and light yellow gerberas.',3750,'Congratulations','image/elegant-gerberas-180x180.jpg','No',0),(27,'Bouquet1152','1 Dozen orange roses wrapped with abaca fiber and orange ribbon.',3129,'Congratulations','image/elegant-orange-180x180.jpg','No',0),(28,'Bouquet1153','6 Pcs Gerberas and 6 Pcs Red Roses wrapped with abaca fiber and red ribbon',3890,'Congratulations','image/gerbera-roses-180x180.jpg','No',0),(29,'GW001','Gerberas Basket',2300,'Get Well','image/gerberas-basket-180x180.jpg','No',0),(30,'GW002','1 Dozen Roses in a vase.',3058,'Get Well','image/lovely-red-in-a-vase-180x180.jpg','No',0),(31,'GW003','mixed gerberas and carnations in a vase.',2980,'Get Well','image/gerberas-carnations-mums-180x180.jpg','No',0),(32,'NB001','1 Dozen mixed tulips, orchids and roses in a vase.',3218,'New Baby','image/loving-sentiment-180x180.jpg','No',0),(33,'NB002','1 Dozen mixed color of gerberas.',3080,'New Baby','image/language-of-love-180x180.jpg','No',0),(34,'NB003','1 Dozen light orange and pink roses in a vase.',2980,'New Baby','image/wonder-180x180.jpg','No',0),(35,'LNR001','1 Dozen Pink tulips wrapped in pink ribbon and abaca fiber',3220,'Love & Romance','image/flower-shop-philippines-tulips-bouquet-04-180x180.jpg','No',0),(36,'LNR002','1 Dozen dark pink carnations wrapped in pink ribbon and abaca fiber.',2990,'Love & Romance','image/dark-pink-carnations-bouquet-180x180.jpg','No',0),(37,'LNR003','6 Pcs Pink Red roses wrapped with abaca fiber and pink ribbon',1570,'Love & Romance','image/passionate-love-180x180.jpg','No',0),(38,'THK001','1 Dozen long stemmed sun flowers wrapped with yellow abaca fiber and yellow ribbon.',3029,'Thank You','image/perpetually-sweet-180x180.jpg','No',0),(39,'THK002','1 Dozen white tulips wrapped with abaca fiber and pink ribbon',3890,'Thank You','image/Her Special Day-180x180.JPG','No',0),(40,'THK003','1 Dozen mixed yellow and violet tulips wrapped in abaca fiber and ribbon',3980,'Thank You','image/Tulips Violet with Yellow-180x180.JPG','No',0),(41,'Bridal and Entourage Bouquets','Bridal and Entourage Bouquets suits for your wedding.',25801,'Wedding','image/bridal_and_entourage_bouquets.jpg','No',0),(42,'Church Wedding Arrangements','Church Wedding Arrangements that fits into your wedding theme.',35880,'Wedding','image/church_wedding_arrangements.jpg','No',0),(43,'Wedding Reception Decors','Wedding Reception arrange that fits into your wedding theme.',55880,'Wedding','image/wedding_reception_floral_decors.jpg','No',0),(44,'3pcsRoses','three Red Roses',150,'Pcs','image/roses1.jpg','No',0),(45,'3pcsRoses','Three yellow Roses',150,'Pcs','image/roses3.jpg','No',0),(46,'3pcsRoses','three Pink Roses',150,'Pcs','image/roses2.jpg','Yes',0),(47,'3pcsRoses','three Blue Roses',150,'Pcs','image/roses5.jpg','Yes',0),(48,'3pcsRoses','three White Roses',150,'Pcs','image/roses4.jpg','Yes',0);
/*!40000 ALTER TABLE `prodmain_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trans_tbl`
--

DROP TABLE IF EXISTS `trans_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trans_tbl` (
  `trans_id` int(11) NOT NULL AUTO_INCREMENT,
  `trans_cust_id` int(11) NOT NULL,
  `trans_cart2_id` varchar(1000) NOT NULL,
  `trans_amountDue` decimal(10,0) NOT NULL,
  `trans_orderdate` date NOT NULL,
  `trans_deliverydate` date NOT NULL,
  `trans_deliveryAddress` varchar(1000) NOT NULL,
  `trans_status` varchar(100) NOT NULL,
  `trans_isViewed` varchar(100) NOT NULL,
  `trans_isdel` int(11) NOT NULL,
  PRIMARY KEY (`trans_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trans_tbl`
--

LOCK TABLES `trans_tbl` WRITE;
/*!40000 ALTER TABLE `trans_tbl` DISABLE KEYS */;
INSERT INTO `trans_tbl` VALUES (1,230,'ORDER-001',650,'2015-10-01','2015-10-05','','Delivered','0',0),(2,86,'9L407452B1364970N',7792,'2015-10-01','2015-10-05','sta ana pampanga','Paid','0',0),(3,231,'ORDER-003',150,'2015-10-01','2015-10-01','City of San Fernando, Pampanga','Paid','0',0),(4,232,'ORDER-004',650,'2015-10-01','2015-10-05','pampanga','Paid','0',0),(5,233,'ORDER-005',2924,'2015-10-01','2015-10-10','makatotohanan','Paid','0',0),(6,234,'ORDER-006',2444,'2015-10-01','2015-10-01','City of San Fernando, Pampanga','Paid','0',0),(7,235,'33T3689575303023K',3490,'2015-10-01','2015-10-15','Pampanga','Paid','0',0),(8,236,'ORDER-008',2924,'2015-10-01','2015-10-01','gg','Delivered','0',0),(9,237,'ORDER-009',150,'2015-10-01','2015-10-01','City of San Fernando, Pampanga','Paid','0',0),(10,238,'ORDER-010',150,'2015-10-01','2015-10-01','City of San Fernando, Pampanga','Paid','0',0),(11,239,'ORDER-011',150,'2015-10-01','2015-10-01','','Paid','0',0),(12,241,'78R3253796484074W',3050,'2015-10-01','2015-10-05','sanfernando','Delivered','0',0),(13,242,'ORDER-013',4500,'2015-10-01','2015-10-05','sanfernando','Delivered','0',0),(14,86,'27598041609217249',2924,'2015-10-01','2015-10-06','sta ana pampanga','Paid','0',0),(15,86,'17253506AV172140E',2924,'2015-10-01','2015-10-05','sta ana pampanga','Paid','0',0),(16,86,'39847689TU867205V',7772,'2015-10-01','2015-10-05','sta ana pampanga','Paid','0',0),(17,243,'ORDER-017',3700,'2015-10-01','2015-10-20','ss','Paid','0',0),(18,244,'ORDER-018',3700,'2015-10-01','2015-10-01','eee','Paid','0',0),(19,245,'ORDER-019',2000,'2015-10-01','2015-10-05','pampanga','Paid','0',0),(20,246,'ORDER-020',1300,'2015-10-01','2015-10-01','ss','Paid','0',0),(21,247,'ORDER-021',2424,'2015-10-04','2015-10-04','City of San Fernando, Pampanga','Paid','0',0),(22,248,'ORDER-022',2424,'2015-10-05','2015-10-05','City of San Fernando, Pampanga','Paid','0',0),(23,249,'ORDER-023',1300,'2015-10-06','2015-10-10','sta lucia','Paid','0',0),(24,250,'ORDER-024',650,'2015-10-11','2015-10-20','sta ana','Paid','0',0);
/*!40000 ALTER TABLE `trans_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_tbl`
--

DROP TABLE IF EXISTS `user_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_tbl` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_emp_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_dateAdded` date NOT NULL,
  `user_isActive` varchar(100) NOT NULL,
  `user_isChanged` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_tbl`
--

LOCK TABLES `user_tbl` WRITE;
/*!40000 ALTER TABLE `user_tbl` DISABLE KEYS */;
INSERT INTO `user_tbl` VALUES (1,1,'admin','admin','0000-00-00','0',1),(2,2,'secretary','secretary','0000-00-00','0',1),(5,3,'makz.baguio.24@gmail.com','hello','2015-09-24','0',1),(7,6,'jakebustos06@gmail.com','helloword','2015-09-24','0',1),(8,7,'brycano1@gmail.com','o4zStRCZ','2015-09-29','0',0);
/*!40000 ALTER TABLE `user_tbl` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-10-11 15:48:17
