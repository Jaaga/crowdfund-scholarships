-- MySQL dump 10.13  Distrib 5.5.35, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: LearnEmp
-- ------------------------------------------------------
-- Server version	5.5.35-0ubuntu0.12.04.2

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
-- Table structure for table `donation`
--

DROP TABLE IF EXISTS `donation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `donation` (
  `U_id` int(20) DEFAULT NULL,
  `S_id` int(20) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `amount` decimal(15,2) DEFAULT NULL,
  KEY `S_id` (`S_id`),
  KEY `U_id` (`U_id`),
  CONSTRAINT `donation_ibfk_1` FOREIGN KEY (`S_id`) REFERENCES `student` (`S_id`),
  CONSTRAINT `donation_ibfk_2` FOREIGN KEY (`U_id`) REFERENCES `user` (`U_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donation`
--

LOCK TABLES `donation` WRITE;
/*!40000 ALTER TABLE `donation` DISABLE KEYS */;
/*!40000 ALTER TABLE `donation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `scholarship`
--

DROP TABLE IF EXISTS `scholarship`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `scholarship` (
  `SC_id` int(20) NOT NULL AUTO_INCREMENT,
  `image` varchar(300) DEFAULT NULL,
  `description` text,
  `scholar_amt` int(20) DEFAULT NULL,
  `S_id` int(20) DEFAULT NULL,
  PRIMARY KEY (`SC_id`),
  KEY `S_id` (`S_id`),
  CONSTRAINT `scholarship_ibfk_1` FOREIGN KEY (`S_id`) REFERENCES `student` (`S_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scholarship`
--

LOCK TABLES `scholarship` WRITE;
/*!40000 ALTER TABLE `scholarship` DISABLE KEYS */;
/*!40000 ALTER TABLE `scholarship` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `S_id` int(20) NOT NULL AUTO_INCREMENT,
  `U_id` int(20) DEFAULT NULL,
  `sname` varchar(20) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `email` varchar(320) DEFAULT NULL,
  `Phone_Number` int(20) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `pincode` int(10) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `course` varchar(20) DEFAULT NULL,
  `scholar_AMT` int(20) DEFAULT NULL,
  `para` varchar(500) DEFAULT NULL,
  `image_path` blob,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`S_id`),
  UNIQUE KEY `email` (`email`),
  KEY `U_id` (`U_id`),
  CONSTRAINT `student_ibfk_1` FOREIGN KEY (`U_id`) REFERENCES `user` (`U_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (1,1,'Abhinay','F','abhinay@jaaga.in',2147483647,'Bangalore',560062,'Armenia','Php',3500,'HI','../public/images/404865_10150459077612156_759760336_n.jpg','2014-04-02 12:25:44'),(2,2,'Akshay','F','akshay@jaaga.in',2147483647,'Goa',560062,'Armenia','Python',120000,'hi','../public/images/download.jpg','2014-04-02 12:27:22');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `U_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`U_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Abhinay','123123','abhinay@jaaga.in','2014-04-02 12:25:20'),(2,'Akshay','123123','akshay@jaaga.in','2014-04-02 12:26:30');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-04-02 17:59:18
