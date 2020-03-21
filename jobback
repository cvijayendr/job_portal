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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('admin','admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `applyjob`
--

DROP TABLE IF EXISTS `applyjob`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `applyjob` (
  `applyid` int(11) NOT NULL AUTO_INCREMENT,
  `jobpostid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`applyid`),
  KEY `userid` (`userid`),
  KEY `jobpostid` (`jobpostid`),
  KEY `cid` (`cid`),
  CONSTRAINT `applyjob_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`),
  CONSTRAINT `applyjob_ibfk_2` FOREIGN KEY (`jobpostid`) REFERENCES `jobpost` (`jobpostid`),
  CONSTRAINT `applyjob_ibfk_3` FOREIGN KEY (`cid`) REFERENCES `company` (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `applyjob`
--

LOCK TABLES `applyjob` WRITE;
/*!40000 ALTER TABLE `applyjob` DISABLE KEYS */;
INSERT INTO `applyjob` VALUES (3,3,1,7),(4,3,1,9),(5,4,1,9),(6,9,5,9),(7,8,4,9),(8,8,4,7),(9,4,1,7);
/*!40000 ALTER TABLE `applyjob` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `branch`
--

DROP TABLE IF EXISTS `branch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `branch` (
  `branchid` int(20) NOT NULL AUTO_INCREMENT,
  `branchname` varchar(50) NOT NULL,
  PRIMARY KEY (`branchid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `branch`
--

LOCK TABLES `branch` WRITE;
/*!40000 ALTER TABLE `branch` DISABLE KEYS */;
/*!40000 ALTER TABLE `branch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company` (
  `cid` int(255) NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) NOT NULL,
  `hname` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `ctype` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company`
--

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
INSERT INTO `company` VALUES (1,'codeking','bengaluru','080-2459529','http://codeking.com','software','code@gmail.com','1234',1),(3,'yakitri','New Delhi','9135153152','yaki@tri.com','Marketing','yaki@gmail.com','123',1),(4,'avr','bengalore','9902418647','a@vr.com','software','abhi@gmail.com','12345',1),(5,'avr','mysore','456255','abhi123@v.com','software','abhishek@gmail.com','456789',1);
/*!40000 ALTER TABLE `company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedback` (
  `FeedbackId` int(11) NOT NULL AUTO_INCREMENT,
  `JobSeekId` int(11) NOT NULL,
  `Feedback` varchar(200) NOT NULL,
  `FeedbakDate` date NOT NULL,
  PRIMARY KEY (`FeedbackId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` VALUES (5,3,'asdad','2018-09-13'),(6,3,'asd','2013-09-18'),(7,4,'Thanks For Your Support.','2013-09-18'),(8,3,'asd','2013-09-22');
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobpost`
--

DROP TABLE IF EXISTS `jobpost`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobpost` (
  `jobpostid` int(255) NOT NULL AUTO_INCREMENT,
  `cid` int(255) NOT NULL,
  `jobtitle` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `salary` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `createdate` date NOT NULL,
  PRIMARY KEY (`jobpostid`),
  KEY `cid` (`cid`),
  CONSTRAINT `jobpost_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `company` (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobpost`
--

LOCK TABLES `jobpost` WRITE;
/*!40000 ALTER TABLE `jobpost` DISABLE KEYS */;
INSERT INTO `jobpost` VALUES (3,1,'software engineer','developer','300000','0-2 years','mca','c,c++,java,html','2017-11-13'),(4,1,'Software Engineer','tester,developer','250000','10 years','mca','c,c++','2017-11-10'),(5,3,'Accountant','dsvdsbvdbvsdvsdvsdvdsv ','5000000','0-1 years','mba','tally','2017-11-09'),(8,4,'Software Engineer','developer','45000','2-3 years','mca','c,c++,design','2017-11-10'),(9,5,'sofware engeeniring','developer','30000','1 year','mca','c++,java,php','2017-11-10');
/*!40000 ALTER TABLE `jobpost` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobtype`
--

DROP TABLE IF EXISTS `jobtype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobtype` (
  `jobtypeid` int(20) NOT NULL AUTO_INCREMENT,
  `jobname` varchar(50) NOT NULL,
  `branchid` int(20) NOT NULL,
  PRIMARY KEY (`jobtypeid`),
  KEY `branchid` (`branchid`),
  CONSTRAINT `jobtype_ibfk_1` FOREIGN KEY (`branchid`) REFERENCES `branch` (`branchid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobtype`
--

LOCK TABLES `jobtype` WRITE;
/*!40000 ALTER TABLE `jobtype` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobtype` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resume`
--

DROP TABLE IF EXISTS `resume`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resume` (
  `rid` int(20) NOT NULL AUTO_INCREMENT,
  `userid` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `timeperiod` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  PRIMARY KEY (`rid`),
  KEY `userid` (`userid`),
  CONSTRAINT `resume_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resume`
--

LOCK TABLES `resume` WRITE;
/*!40000 ALTER TABLE `resume` DISABLE KEYS */;
INSERT INTO `resume` VALUES (6,9,'akshaysagar','mysore','7411161310','akshaysagar.g23@gmail.com','test','test','test','test','test'),(7,9,'akshaysagar','mysore','7411161310','akshaysagar.g23@gmail.com','test1','test1','test1','test1','test1'),(8,7,'Bhoomika G L','mysore','9620004668','bhoomikagl95@gmail.com','aris global','mysore','2012-2014','php developer','2years');
/*!40000 ALTER TABLE `resume` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `userid` int(255) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `contactno` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `passingyear` date DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` int(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `skills` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (7,'bhoomika','g l','bhoomikagl95@gmail.com','123456','gfhvh','shivamogga','karnataka','9620004668','mca','2017-10-24','1995-04-21',22,'developer','c,c++,html,css','1-2 years'),(9,'akshay','sagar','akshaysagar.g23@gmail.com','12345678','geetha road','mysore','karnataka','7411161310','mca','2018-07-09','1994-03-27',22,'software developer','c,c++','0-1 years');
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

-- Dump completed on 2017-11-13 23:20:53
