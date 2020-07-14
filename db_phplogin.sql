/*
SQLyog Community v13.1.1 (32 bit)
MySQL - 10.4.8-MariaDB : Database - db_phplogin
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_phplogin` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_phplogin`;

/*Table structure for table `data_daerah` */

DROP TABLE IF EXISTS `data_daerah`;

CREATE TABLE `data_daerah` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `kota` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;

/*Data for the table `data_daerah` */

insert  into `data_daerah`(`id`,`kota`) values 
(1,'Jakarta'),
(2,'Aceh'),
(3,'Sumatera Utara'),
(4,'Sumatera Barat'),
(5,'Riau'),
(6,'Kepulauan Riau'),
(7,'Jambi'),
(8,'Bengkulu'),
(9,'Sumatera Selatan'),
(10,'Kepulauan Banka Belitung'),
(11,'Lampung'),
(12,'Banten'),
(13,'Jawa Barat'),
(14,'Jawa Tengah'),
(15,'Yogyakarta '),
(16,'Jawa Timur'),
(17,'Bali'),
(18,'Nusa Tenggara Barat'),
(19,'Nusa Tenggara Timur'),
(20,'Kalimantan Utara'),
(21,'Kalimantan Barat'),
(22,'Kalimantan Tengah'),
(23,'Kalimantan Selatan'),
(24,'Kalimantan Timur'),
(25,'Gorontalo'),
(26,'Sulawesi Utara'),
(27,'Sulawesi Barat'),
(28,'Sulawesi Tengah'),
(29,'Sulawesi Selatan'),
(30,'Sulawesi Tenggara'),
(31,'Maluku Utara'),
(32,'Maluku'),
(33,'Papua'),
(34,'Papua Barat');

/*Table structure for table `data_relawan` */

DROP TABLE IF EXISTS `data_relawan`;

CREATE TABLE `data_relawan` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(14) NOT NULL,
  `keahlian` varchar(50) NOT NULL,
  `daerah` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `data_relawan` */

insert  into `data_relawan`(`id`,`nama`,`alamat`,`email`,`nohp`,`keahlian`,`daerah`) values 
(11,'Budi Sutanto','Depok','budisutanto@gmail.com','0855221414','IT','Jakarta');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`) values 
(1,'afgan','$2y$10$sJq0ffNvgBF0k.fs1847r.UUHJ68etBklz0bziNA1dsGQtCLh4vuS'),
(2,'admin','$2y$10$aFA2N3CskjIdDK3x0XwXbOVvJivQ7vRaawZES15BoEdxNyJGc.xyC');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
