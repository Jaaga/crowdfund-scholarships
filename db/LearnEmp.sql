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
INSERT INTO `donation` VALUES (1,1,'2014-04-06 07:03:33',10000.00),(1,1,'2014-04-06 07:04:47',500.00),(2,1,'2014-04-08 17:14:32',500.00),(2,2,'2014-04-08 19:02:43',50000.00),(2,3,'2014-04-08 19:03:01',50000.00),(1,1,'2014-04-24 10:07:55',5000.00),(1,1,'2014-04-24 10:43:50',123.00),(1,1,'2014-04-24 10:43:58',5000.00),(2,1,'2014-04-24 10:50:39',5000.00);
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
  `U_id` int(11) DEFAULT NULL,
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
  `bitdetail` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`S_id`),
  UNIQUE KEY `email` (`email`),
  KEY `U_id` (`U_id`),
  CONSTRAINT `student_ibfk_1` FOREIGN KEY (`U_id`) REFERENCES `user` (`U_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (1,1,'Abhinay','M','abhinay302@gmail.com',2147483647,'Bangalore',560062,'Armenia','Php',120000,'I am a ruby on rails enthusiast and would like to be able to learn further to help make better web apps. Please fund me.\r\n','../public/images/12student.jpg','2014-04-06 06:48:40','1MZgG3NtUGWLinBhBf9GM97jUhikjuWeiP'),(2,3,'Ansal','M','ansal@bsstech.com',2147483647,'Banjarpalya',560062,'Armenia','html/css',120000,'The computer engineering course at Jaaga is one of the best in the country and encourages professional development.','../public/images/Login-Student.png','2014-04-08 17:49:10','1MZgG3NtUGWLinBhBf9GM97jUhikjuWeiP');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `studstory`
--

DROP TABLE IF EXISTS `studstory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `studstory` (
  `S_id` int(11) NOT NULL,
  `story` text NOT NULL,
  `reason` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CS_id` varchar(20) DEFAULT NULL,
  `Git_id` varchar(20) DEFAULT NULL,
  `CA_id` varchar(20) DEFAULT NULL,
  KEY `S_id` (`S_id`),
  CONSTRAINT `studstory_ibfk_1` FOREIGN KEY (`S_id`) REFERENCES `student` (`S_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `studstory`
--

LOCK TABLES `studstory` WRITE;
/*!40000 ALTER TABLE `studstory` DISABLE KEYS */;
INSERT INTO `studstory` VALUES (1,'My childhood dream was that someday my actions would dramatically impact the world. After a great deal of self-evaluation and an exciting journey through my undergraduate education, I have come to realize that it is not as hard as I had imagined it to be. I find the success of the Google search engine that touches a million lives each day inspirational .It was after all a research project developed by its founders during their student days at a US university. I feel that such are probable prospects of a graduate education at a university as esteemed as yours where a single line of code that I might write could touch the lives of millions around the world.10 years down the line I see myself in an industry contributing to the field of computer science in the industry and hope that my dream will manifest into reality.','I understand that innovation and creativity are some of the core values on which this course has been built. Looking at the course work and the credentials of the faculty of Jaaga Study, that seems credible. The computer engineering course at Jaaga is one of the best in the country and encourages professional development in all aspects of the graduate program. I believe it can help me eliminate any technical misconceptions and mould me into an astute working professional besides helping realize my childhood dream .','2014-04-06 06:51:40','abhinay302','abhinay302','abhinay_kumar21'),(2,'My childhood dream was that someday my actions would dramatically impact the world. After a great deal of self-evaluation and an exciting journey through my undergraduate education, I have come to realize that it is not as hard as I had imagined it to be. I find the success of the Google search engine that touches a million lives each day inspirational .It was after all a research project developed by its founders during their student days at a US university. I feel that such are probable prospects of a graduate education at a university as esteemed as yours where a single line of code that I might write could touch the lives of millions around the world.10 years down the line I see myself in an industry contributing to the field of computer science in the industry and hope that my dream will manifest into reality.','I understand that innovation and creativity are some of the core values on which this course has been built. Looking at the course work and the credentials of the faculty of Jaaga Study, that seems credible. The computer engineering course at Jaaga is one of the best in the country and encourages professional development in all aspects of the graduate program. I believe it can help me eliminate any technical misconceptions and mould me into an astute working professional besides helping realize my childhood dream .','2014-04-08 17:50:47','ansal','ansal','ansal');
/*!40000 ALTER TABLE `studstory` ENABLE KEYS */;
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
  `image` blob,
  PRIMARY KEY (`U_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Abhinay','123123','abhinay302@gmail.com','2014-04-06 06:43:24',NULL),(2,'Freeman Murray','freeman','freeman@jaaga.in','2014-04-08 17:14:20','../public/images/donor.jpg'),(3,'Ansal','ansal','ansal@bsstech.com','2014-04-08 17:25:37',NULL),(5,'Akshay','akshay','akshay@jaaga.in','2014-04-08 18:22:18','../public/images/Abhinay.jpg'),(6,'abc','123123','abhi@jaaga.in','2014-04-25 06:51:15',NULL);
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

-- Dump completed on 2014-04-25 15:17:05
