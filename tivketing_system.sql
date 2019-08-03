-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: localhost    Database: ticketing_system
-- ------------------------------------------------------
-- Server version	5.5.5-10.3.16-MariaDB

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
-- Table structure for table `dtbcategory`
--

DROP TABLE IF EXISTS `dtbcategory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dtbcategory` (
  `categoryId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `delete` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`categoryId`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dtbcategory`
--

LOCK TABLES `dtbcategory` WRITE;
/*!40000 ALTER TABLE `dtbcategory` DISABLE KEYS */;
INSERT INTO `dtbcategory` VALUES (1,'PIPING',0),(2,'ELECTRICAL',0),(3,'CIVIL',0),(4,'TOOLS',0),(23,'SEWA EQUIPMENT',0),(24,'AUTOMOTIVE',1),(25,'TESA',1),(26,'ASD',1);
/*!40000 ALTER TABLE `dtbcategory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dtbinfo`
--

DROP TABLE IF EXISTS `dtbinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dtbinfo` (
  `infoId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `alias` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `telp` varchar(50) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `logo` text NOT NULL,
  `logoFull` text NOT NULL,
  PRIMARY KEY (`infoId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dtbinfo`
--

LOCK TABLES `dtbinfo` WRITE;
/*!40000 ALTER TABLE `dtbinfo` DISABLE KEYS */;
INSERT INTO `dtbinfo` VALUES (1,'TICKETING SYSTEM','TSY','JL. RAYA INDONESIA','(62-21)888332','(62-21)885','budi@gmail.com','logo.png','logo-full.png');
/*!40000 ALTER TABLE `dtbinfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dtbstatususer`
--

DROP TABLE IF EXISTS `dtbstatususer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dtbstatususer` (
  `statusId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `delete` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`statusId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dtbstatususer`
--

LOCK TABLES `dtbstatususer` WRITE;
/*!40000 ALTER TABLE `dtbstatususer` DISABLE KEYS */;
INSERT INTO `dtbstatususer` VALUES (1,'Administrator',0),(2,'Scurity',0),(3,'Vendor',0);
/*!40000 ALTER TABLE `dtbstatususer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dtbusers`
--

DROP TABLE IF EXISTS `dtbusers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dtbusers` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1= aktif, 2= tidak aktif',
  `vendorId` int(11) NOT NULL,
  `delete` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dtbusers`
--

LOCK TABLES `dtbusers` WRITE;
/*!40000 ALTER TABLE `dtbusers` DISABLE KEYS */;
INSERT INTO `dtbusers` VALUES (1,'Naira','naira','21232f297a57a5a743894a0e4a801fc3',1,0,0),(2,'AHMAD','ahmad','61243c7b9a4022cb3f8dc3106767ed12',2,0,0),(3,'ABDURAHMAN','abdur','3d8fb62c1e332770eaddbe4950b33c51',3,1,0),(8,'BUDI','budi','00dfc53ee86af02e742515cdcf075ed3',3,4,0),(9,'JOKO','joko','9ba0009aa81e794e628a04b51eaf7d7f',3,5,0),(10,'Administrator','admin','21232f297a57a5a743894a0e4a801fc3',1,0,0),(11,'QWE','qwe','76d80224611fc919a5d54f0ff9fba446',3,6,0);
/*!40000 ALTER TABLE `dtbusers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dtbvehicle`
--

DROP TABLE IF EXISTS `dtbvehicle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dtbvehicle` (
  `vehicleId` int(11) NOT NULL AUTO_INCREMENT,
  `vendorid` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `type` varchar(45) NOT NULL,
  `chasis` varchar(45) NOT NULL,
  `engine` varchar(45) NOT NULL,
  `policeNumber` varchar(45) NOT NULL,
  `delete` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`vehicleId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dtbvehicle`
--

LOCK TABLES `dtbvehicle` WRITE;
/*!40000 ALTER TABLE `dtbvehicle` DISABLE KEYS */;
INSERT INTO `dtbvehicle` VALUES (1,5,'MOTOR','HONDA VARIO','MHXASD876ASD','76ASD76','B-1010-ASD',0),(2,5,'MOTOR','HONDA BEAT','A0SD98A0S9D8A','A0S9D8A','A-3456-DFG',0),(3,3,'MOTOR','VARIO TECHNO','9S8D7FS9D8F7','S9D8F7SDF98','B-345-GD',0),(4,4,'MOBIL','INOVA','SDF987SDF98987SDF','S9D8F7SFSD987','B-2345-SDF',0),(5,5,'MOBIL','INOVA','ASD987A9SD7ASD','A9SD8A79','B-345-FD',0),(6,5,'Q','Q','Q','Q','Q',1);
/*!40000 ALTER TABLE `dtbvehicle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dtbvendor`
--

DROP TABLE IF EXISTS `dtbvendor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dtbvendor` (
  `vendorId` int(11) NOT NULL AUTO_INCREMENT,
  `categoryId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `npwp` varchar(50) NOT NULL,
  `catalog` varchar(50) NOT NULL,
  `delete` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`vendorId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dtbvendor`
--

LOCK TABLES `dtbvendor` WRITE;
/*!40000 ALTER TABLE `dtbvendor` DISABLE KEYS */;
INSERT INTO `dtbvendor` VALUES (1,1,'PT Excis','Perusahaan jasa technologi','-','-','-','-','-','-',0),(2,1,'PT XXXXZZZZ','DESKRIPSI XXXZZZZ','JL RAYA XXXZZZZ','081919230000','12312390000','XXX@GMAIL.COM00','123.123.1000','',0),(3,24,'Q','Q','Q','123','123','ASD@G','123.12.323','',0),(4,1,'PT P','P','P','90','90','P@HM.CO','09909','',0),(5,4,'PT ANGKASA','DESKRIPSI PT ANGKASA','JL RAYA','123223424','234234','ANGKASA@GMAIL.COM','234234','',0),(6,23,'QWE','QWE','QWE','123','123','QWE@QWE','123','',0);
/*!40000 ALTER TABLE `dtbvendor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dtrdelivery`
--

DROP TABLE IF EXISTS `dtrdelivery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dtrdelivery` (
  `deliveryId` int(11) NOT NULL AUTO_INCREMENT,
  `vendorId` int(11) NOT NULL,
  `vehicleId` varchar(45) NOT NULL,
  `description` varchar(100) NOT NULL,
  `schedule` date NOT NULL,
  `nik` varchar(45) NOT NULL,
  `driver` varchar(45) NOT NULL,
  `dateIn` datetime DEFAULT NULL,
  `dateOut` datetime DEFAULT NULL,
  `datesys` date NOT NULL,
  `delete` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`deliveryId`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dtrdelivery`
--

LOCK TABLES `dtrdelivery` WRITE;
/*!40000 ALTER TABLE `dtrdelivery` DISABLE KEYS */;
INSERT INTO `dtrdelivery` VALUES (1,1,'1','Antar Lift','2019-07-28','111231231231','Bpk Budi','2019-07-30 03:10:10','2019-07-30 06:10:10','2019-07-26',0),(2,4,'1','TES','2019-07-27','123123123123','PAK BUDI','2019-07-30 03:10:10',NULL,'2019-07-26',0),(3,5,'1','TES LAGI AJA','2019-10-03','10000000000','BPK ANTO AJA','2019-10-04 03:10:10','2019-07-26 11:26:34','2019-07-26',0),(4,5,'2','TES KIRIM BOX','2019-07-31','12313342342','PAK ANTO','2019-07-26 11:54:21',NULL,'2019-07-27',0),(5,5,'5','KIRIM KOMPUTER 10 UNIT','2019-07-31','345345345345','PAK YONO',NULL,NULL,'2019-07-27',0),(6,5,'1','ASD','2019-08-14','1231312312123','PAKP BUDIII',NULL,NULL,'2019-08-02',0),(7,5,'1','KIRIM PAKET BOX','2019-08-10','1203981293123','BPK DODO',NULL,NULL,'2019-08-03',0);
/*!40000 ALTER TABLE `dtrdelivery` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-03 16:30:22
