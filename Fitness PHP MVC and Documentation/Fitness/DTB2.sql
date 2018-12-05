/*
SQLyog Community Edition- MySQL GUI v5.22a
Host - 5.1.30-community : Database - fitness
*********************************************************************
Server version : 5.1.30-community
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `fitness`;

USE `fitness`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `tblbooking` */

DROP TABLE IF EXISTS `tblbooking`;

CREATE TABLE `tblbooking` (
  `bk_id` int(5) NOT NULL AUTO_INCREMENT,
  `sess_id` int(5) NOT NULL,
  `mem_id` int(5) NOT NULL,
  `book_date` date DEFAULT NULL,
  PRIMARY KEY (`bk_id`,`sess_id`,`mem_id`),
  UNIQUE KEY `bk_id` (`bk_id`),
  KEY `FK_tblbooking` (`mem_id`),
  KEY `FK_tblbooking2` (`sess_id`),
  CONSTRAINT `FK_tblbooking2` FOREIGN KEY (`sess_id`) REFERENCES `tblsession` (`sess_id`),
  CONSTRAINT `FK_tblbooking` FOREIGN KEY (`mem_id`) REFERENCES `tblmember` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tblbooking` */

insert  into `tblbooking`(`bk_id`,`sess_id`,`mem_id`,`book_date`) values (1,1,11,'2018-02-05'),(2,2,12,'2017-05-09'),(3,3,13,'2015-02-05'),(4,4,14,'2015-09-06');

/*Table structure for table `tblmember` */

DROP TABLE IF EXISTS `tblmember`;

CREATE TABLE `tblmember` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(20) DEFAULT NULL,
  `surname` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `initial` varchar(5) DEFAULT NULL,
  `memberID` varchar(13) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `phoneNo` varchar(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_tblmember` (`user_name`),
  CONSTRAINT `FK_tblmember` FOREIGN KEY (`user_name`) REFERENCES `tbluser` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `tblmember` */

insert  into `tblmember`(`id`,`Fname`,`surname`,`gender`,`initial`,`memberID`,`address`,`phoneNo`,`email`,`user_name`) values (11,'collin','malulka','Male','nkm','9815549747123','home street code','0710065321','nkc@gmail.com','member1'),(12,'Thobelani','Mkhize','Male','T','9602186051086','Pietermaritzburg','0747486127','tho@mkhize.com','member1'),(13,'Chris','makhondo','Male','jk','9612215714078','bhella street ','0710058963','mk@gmail.com','member1'),(14,'tiyani','brown','Female','gt','961221571445','twala street ','0714458963','tiyi@gmail.com','member1'),(17,'collins','h6yty','Male','h6thy','42','tghyh','071000545','D@GMAIL.COM','member1');

/*Table structure for table `tblsession` */

DROP TABLE IF EXISTS `tblsession`;

CREATE TABLE `tblsession` (
  `sess_id` int(5) NOT NULL AUTO_INCREMENT,
  `sess_name` varchar(30) DEFAULT NULL,
  `sess_cost` decimal(30,0) DEFAULT NULL,
  PRIMARY KEY (`sess_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tblsession` */

insert  into `tblsession`(`sess_id`,`sess_name`,`sess_cost`) values (1,'Boxing','1000'),(2,'Yga','200'),(3,'Swimming','500'),(4,'abs','600'),(5,'Bicept','600');

/*Table structure for table `tbluser` */

DROP TABLE IF EXISTS `tbluser`;

CREATE TABLE `tbluser` (
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbluser` */

insert  into `tbluser`(`user_name`,`password`) values ('member1','member1');

/* Procedure structure for procedure `DeleteMember` */

/*!50003 DROP PROCEDURE IF EXISTS  `DeleteMember` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `DeleteMember`(p_id INT(5))
BEGIN
 DELETE FROM tblbooking
 WHERE mem_id = p_id;
 DELETE FROM tblmember 
 WHERE id = p_id;
 END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
