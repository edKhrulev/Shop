/*
SQLyog Community v13.1.1 (64 bit)
MySQL - 10.1.34-MariaDB : Database - shoplaravel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`shoplaravel` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `shoplaravel`;

/*Table structure for table `order` */

DROP TABLE IF EXISTS `order`;

CREATE TABLE `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `added_at` datetime NOT NULL,
  `status` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

/*Data for the table `order` */

insert  into `order`(`id`,`added_at`,`status`) values 
(2,'2018-10-28 21:48:15','pending'),
(8,'2018-10-28 22:58:25','pending'),
(11,'2018-10-29 16:56:55','pending'),
(12,'2018-10-29 16:57:43','pending'),
(13,'2018-10-29 17:01:03','pending'),
(14,'2018-10-29 17:02:29','pending'),
(15,'2018-10-29 17:02:45','pending'),
(16,'2018-10-29 17:05:14','pending'),
(17,'2018-10-29 17:07:51','pending'),
(18,'2018-10-29 17:11:12','pending'),
(19,'2018-10-29 17:12:02','pending'),
(20,'2018-10-29 17:12:19','pending'),
(21,'2018-10-29 17:12:37','pending'),
(22,'2018-10-29 17:13:08','pending'),
(23,'2018-10-29 17:13:19','pending'),
(24,'2018-10-29 17:13:39','pending'),
(25,'2018-10-29 17:15:08','pending'),
(26,'2018-10-29 17:16:26','pending'),
(27,'2018-10-29 17:19:18','pending'),
(28,'2018-10-29 17:20:29','pending'),
(29,'2018-10-29 17:20:45','pending'),
(30,'2018-10-29 17:21:05','pending'),
(31,'2018-10-29 17:21:27','pending'),
(32,'2018-10-29 17:24:41','pending'),
(33,'2018-10-29 17:32:52','pending'),
(34,'2018-10-29 17:51:30','pending'),
(35,'2018-10-29 18:26:17','pending'),
(36,'2018-10-29 18:47:16','pending'),
(37,'2018-10-29 18:47:25','pending'),
(38,'2018-10-29 19:14:05','pending'),
(39,'2018-10-29 19:27:10','pending'),
(40,'2018-10-29 19:35:13','pending'),
(41,'2018-10-29 19:44:20','pending'),
(42,'2018-10-29 19:45:04','pending'),
(43,'2018-10-29 19:46:09','pending'),
(44,'2018-10-29 19:48:28','pending'),
(45,'2018-10-29 20:00:37','pending'),
(46,'2018-10-29 20:42:23','pending'),
(47,'2018-10-29 21:11:04','pending'),
(48,'2018-10-29 21:13:05','pending'),
(49,'2018-10-29 21:18:34','pending'),
(50,'2018-10-29 21:20:57','pending'),
(51,'2018-10-29 21:23:49','pending'),
(52,'2018-10-29 21:24:01','pending'),
(53,'2018-10-29 21:25:30','pending');

/*Table structure for table `product` */

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `image` text,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `product` */

insert  into `product`(`id`,`title`,`description`,`price`,`category`,`image`) values 
(6,'A5','Samsung',300,'mobile','uploads/vh6mmtygIJLJguTiayDAK7lPt286nRURgbsXGjSL.jpeg'),
(7,'Xiaomi','X5',200,'mobile','uploads/XmgiQieRfDAXe6KaHEcjNwlswwrprneOrC1cB9hU.jpeg'),
(8,'samsung','S-7',500,'mobile','uploads/MupkiE4OmSx4oqIsj4aJMGpSqTIFfCNClEw1bnzd.jpeg'),
(9,'mac-book','Good book',1000,'laptop','uploads/MZoO1nyGQrwmLgUMkOfD7uM88HodqoOBBNdjUO6x.jpeg'),
(10,'Lenovo','cheap book',300,'laptop','uploads/vDDrOYhqHWnAMT40vKUIAw8iz43DqV9EfsZN3eYv.jpeg'),
(11,'Xiaomi','lap-top',400,'laptop','uploads/qwsKABkQSqiP73Jio9QZGMxvEjOEcLl77zFtgWb1.jpeg'),
(12,'samsung','Smart-TV',700,'devices for home','uploads/1pGKEXmyfWdt9N0gKdNSQ9R3Vtkgpv9NB9DF6q74.jpeg'),
(13,'Toshiba','Smart-TV',600,'devices for home','uploads/8OYj6M9RtrWzUTKQgIkPRDnIw3YbARMLdJhe1IVm.jpeg'),
(14,'Berezka','made in USSR',0,'devices for home','uploads/CUlqFA1NVo0Zod7ZizIbpDuDFCHQI2Pywx9B0I4D.jpeg');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`email`,`password`) values 
(2,'ed','edhrulov@gmail.com','$2y$10$FHeE8bYgZqMs17bM6.J84ORYanBhM5YWAE/WybAQ0pUz.7FvqqroW'),
(3,'vasa','vasa@mail.ru','$2y$10$0067Aep5SEGn4FZsCyLGGuZ5XMb55pk2E4..zlTMD3Zy5lRGg5vMy'),
(4,'bob','bob@gmail.com','$2y$10$TTECyrv7IILzNGYdFpBk/.IHK4SzbjDYDYdhTN05khiaZVoH1rtsi'),
(5,'xxx','xxx@gmail.com','$2y$10$rlBKptDUmHqzSoGZR878KOx9/cLjyGvLixCgWWseR5DJ8RuJt.4t.'),
(6,'batman','batman@gmail.com','$2y$10$1Q0z./jThQUDP/Wo4.8kdejtaPLsdLG0q7CE..qlLlq5h8mzdGCYm'),
(9,'yyy','yyy@mail.ru','$2y$10$x0T/nUR8jNRlBS5z9JWD5ut1mwA2C.NM3ovOs1lbwMssRFaYCpmra'),
(10,'superman','superman@gmail.com','$2y$10$7crCYHgFH92ZFoIbk53s/OHiettqDojZEBMtPqWBeRE1FfjB4/wvS'),
(11,'tolik','tolik@ggg.ru','$2y$10$GezSL3CtYeSnHYF3EJtAJOdylJrMlaqcjCt56K1iYnQa0t1iCtiGG');

/*Table structure for table `user_order` */

DROP TABLE IF EXISTS `user_order`;

CREATE TABLE `user_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_user_id` (`user_id`),
  KEY `IDX_order_id` (`order_id`),
  KEY `IDX_product_id` (`product_id`),
  CONSTRAINT `FK_user_order_order` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`),
  CONSTRAINT `FK_user_order_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  CONSTRAINT `FK_user_order_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `user_order` */

insert  into `user_order`(`id`,`user_id`,`order_id`,`product_id`) values 
(1,2,50,6),
(2,2,50,9),
(3,2,51,6),
(4,2,52,14),
(5,2,52,11),
(6,2,52,8),
(7,2,53,11);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
