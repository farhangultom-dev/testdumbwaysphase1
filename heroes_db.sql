/*
SQLyog Professional v12.5.1 (64 bit)
MySQL - 10.4.14-MariaDB : Database - db_heroes
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_heroes` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_heroes`;

/*Table structure for table `heroes_tb` */

DROP TABLE IF EXISTS `heroes_tb`;

CREATE TABLE `heroes_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

/*Data for the table `heroes_tb` */

insert  into `heroes_tb`(`id`,`nama`,`type_id`,`photo`) values 
(12,'merlin',4,'merlin.png'),
(15,'meliodas',5,'meliodas.png'),
(16,'diane',7,'diane.jpg'),
(17,'ban',1,'ban.jpg'),
(18,'king',6,'king.jpg'),
(19,'escanor',5,'escanor.jpg'),
(20,'gowther',4,'gowther.jpg');

/*Table structure for table `type_tb` */

DROP TABLE IF EXISTS `type_tb`;

CREATE TABLE `type_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `type_tb` */

insert  into `type_tb`(`id`,`nama`) values 
(1,'assassin'),
(4,'mage'),
(5,'fighter'),
(6,'marksman'),
(7,'tank');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
