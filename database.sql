/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.19-MariaDB : Database - ec0727
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ec0727` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `ec0727`;

/*Table structure for table `tb_productos` */

DROP TABLE IF EXISTS `tb_productos`;

CREATE TABLE `tb_productos` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `clave` varchar(15) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `costo` float DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

/*Data for the table `tb_productos` */

insert  into `tb_productos`(`id_producto`,`clave`,`nombre`,`costo`,`tipo`,`activo`,`fecha`) values (16,'A2200','Coca-Cola',15.2,1,1,'2021-06-05'),(18,'car-car','metal gear rex',2500,2,1,'2021-06-06'),(19,'XIA-08','XIAOMI Note 8',5000,2,1,'2021-06-06'),(20,'665555','productNuevo',44,2,1,'2021-06-08'),(22,'Pro-022a','Agua 600ml',11.3,1,1,'2021-06-09');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
