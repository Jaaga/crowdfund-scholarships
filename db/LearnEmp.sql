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
CREATE Database `LearnEmp`;
use `LearnEmp`;
DROP TABLE IF EXISTS `donor`;
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
INSERT INTO `donation` VALUES (1,1,'2014-03-26 09:52:10',40.00),(2,1,'2014-03-26 09:52:30',50.00),(3,1,'2014-03-26 09:52:43',50.00),(1,2,'2014-03-27 13:30:34',0.00),(2,2,'2014-03-27 13:40:45',23.00),(1,2,'2014-03-27 14:05:37',500.00),(2,3,'2014-03-27 14:07:12',600.00);
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
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `email` varchar(320) DEFAULT NULL,
  `Phone_Number` int(20) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `pincode` int(10) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `course` varchar(20) DEFAULT NULL,
  `scholar_AMT` int(20) DEFAULT NULL,
  `para` varchar(500) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `image_path` blob,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`S_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (1,'abhinay','kumar','M','abhinay302@gmail.com',2147483647,'Bangalore',560062,'Armenia','Php',120000,'Hi,I am a student seeking scholarship for my higher education. I have learnt HTML, CSS and Javascript on my own through Codecademy & Teamtreehouse.','123456','images/bug.jpg','2014-03-27 13:17:04'),(2,'Vaibhav','Mule','M','vaibhav@gmail.com',2147483647,'Bangalore',560062,'Armenia','Php',120000,'Hey Guys! Please sponsor me for my new adventure with Jaaga. Currently, I have learnt HTML, CSS and Javascript on my own through Codecademy.','123123','images/Freeman.jpg','2014-03-27 13:19:24'),(3,'Micheal','Hartl','M','freeman@gmail.com',2147483647,'Bangalore',560062,'Armenia','html/css',120000,'Hey Guys! Please sponsor me for my new adventure with Jaaga. Currently, I have learnt HTML, CSS and Javascript on my own through Codecademy and codeschool.','123123','images/Micheal.jpg','2014-03-27 13:20:28');
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
  PRIMARY KEY (`U_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
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

-- Dump completed on 2014-03-31  9:52:04
