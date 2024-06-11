/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 5.7.9 : Database - online_repair_shop
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`online_repair_shop` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `online_repair_shop`;

/*Table structure for table `complaint` */

DROP TABLE IF EXISTS `complaint`;

CREATE TABLE `complaint` (
  `complaint_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `complaint` varchar(20) DEFAULT NULL,
  `reply` varchar(20) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`complaint_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `complaint` */

insert  into `complaint`(`complaint_id`,`user_id`,`complaint`,`reply`,`date`) values 
(1,2,'xvzcvvz','fdgfdg','2022-06-18'),
(2,2,'zcvczvzd','hai','2022-06-18'),
(3,2,'sdgsg','','2022-06-18'),
(4,2,'','good night','2022-06-21'),
(5,2,'good','pending','2022-06-21');

/*Table structure for table `image` */

DROP TABLE IF EXISTS `image`;

CREATE TABLE `image` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `request_id` int(11) DEFAULT NULL,
  `file` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `image` */

insert  into `image`(`image_id`,`request_id`,`file`) values 
(5,3,'image/image_62b15925e333d.jpg'),
(3,3,'image/image_62b0435fb1a68.jpg'),
(4,3,'image/image_62b0467629005.jpg');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`login_id`,`username`,`password`,`type`) values 
(1,'admin','admin','admin'),
(2,'vipin','123','user'),
(3,'','','type'),
(4,'shop','shop','shop'),
(5,'','','shop'),
(6,'shyam','shyam','shop'),
(7,'sreenath','123','shop'),
(8,'renuka','kamath','shop'),
(9,'renuka','kamath','user'),
(10,'renuka','345','user');

/*Table structure for table `myservice` */

DROP TABLE IF EXISTS `myservice`;

CREATE TABLE `myservice` (
  `myservice_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_id` int(11) DEFAULT NULL,
  `shop_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`myservice_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `myservice` */

insert  into `myservice`(`myservice_id`,`service_id`,`shop_id`) values 
(1,NULL,NULL),
(5,2,3),
(4,2,3),
(6,3,3);

/*Table structure for table `payment` */

DROP TABLE IF EXISTS `payment`;

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `request_id` int(11) DEFAULT NULL,
  `amount` varchar(20) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `payment` */

insert  into `payment`(`payment_id`,`request_id`,`amount`,`date`) values 
(1,3,'500','2022-06-20'),
(2,3,'51','2022-06-21');

/*Table structure for table `registration` */

DROP TABLE IF EXISTS `registration`;

CREATE TABLE `registration` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `place` varchar(30) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `registration` */

insert  into `registration`(`user_id`,`login_id`,`firstname`,`lastname`,`place`,`phone`,`email`) values 
(1,0,'shyam','krishna','kakkanad','9081696110','shyam@gmail.com'),
(2,0,'sreenath','kamath','kakkanad','8138918586','sreenathskamath@gmail.com'),
(3,0,'reshma','kamath','ernakulam','8675534526','renuka1234@gmail.com'),
(4,0,'ganga','fdsfds','dfdsgd','dfdg','dfadgd'),
(5,0,'shyam','krishna','kakkanad','9081696110','shyam@gmail.com'),
(6,0,'shyam','krishna','kakkanad','9081696110','shyam@gmail.com'),
(7,0,'shyam','krishna','kakkanad','9081696110','shyam@gmail.com'),
(8,0,'shyam','krishna','kakkanad','9081696110','shyam@gmail.com'),
(9,0,'shyam','krishna','kakkanad','9081696110','shyam@gmail.com'),
(10,2,'shyam','krishna','kakkanad','9081696110','shyam@gmail.com'),
(11,9,'renuka','kamath','ernakaulam','9495795304','renukakamath2@gmail.com'),
(12,10,'renuka','kamath','ernakulam','9495795304','renukakamath@gmail.com');

/*Table structure for table `request` */

DROP TABLE IF EXISTS `request`;

CREATE TABLE `request` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `myservice_id` int(11) DEFAULT NULL,
  `details` varchar(30) DEFAULT NULL,
  `date` varchar(30) DEFAULT NULL,
  `warrantyperiod` varchar(30) DEFAULT NULL,
  `amount` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `request` */

insert  into `request`(`request_id`,`user_id`,`myservice_id`,`details`,`date`,`warrantyperiod`,`amount`,`status`) values 
(1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(2,2,2,'fsdgdfb','2022-06-18','no','400','pending'),
(3,2,5,'fsdgdfb','2022-06-18','no','1000','work completed');

/*Table structure for table `service` */

DROP TABLE IF EXISTS `service`;

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `service` */

insert  into `service`(`service_id`,`service`) values 
(2,'dvdvds'),
(3,'kamath'),
(4,'kamathcvddd'),
(6,'renuka');

/*Table structure for table `shop` */

DROP TABLE IF EXISTS `shop`;

CREATE TABLE `shop` (
  `shop_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `place` varchar(30) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`shop_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `shop` */

insert  into `shop`(`shop_id`,`login_id`,`first_name`,`last_name`,`place`,`phone`,`email`) values 
(2,5,'shyam','krishna','kakkanad','9081696110','shyam@gmail.com'),
(3,6,'shyam','krishna','kakkanad','9081696110','shyam@gmail.com'),
(4,7,'sreenath','kamath','drgreh','8138918586','sreenathskamath@gmail.com'),
(5,8,'renuka','kamath','ernakulam','9495795304','renukakamath@gmail.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
