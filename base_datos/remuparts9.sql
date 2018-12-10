

CREATE TABLE `citas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `servicios` enum('MP','CBF','CA','RM','RTD') DEFAULT NULL,
  `hora` varchar(10) DEFAULT NULL,
  `fecha_cita` varchar(10) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

/*Data for the table `citas` */

insert  into `citas`(`id`,`nombre`,`apellido`,`telefono`,`servicios`,`hora`,`fecha_cita`,`fecha`) values 
(1,'Roberto','Chacon A.','8297821156','CA','11:50','2018-10-31','2018-10-29'),
(2,'Migue','Tiburcio','8297345234','CBF','09:00','2018-10-30','2018-10-29'),
(3,'Roberto','Chacon Alcantara','8297821156','MP','08:00','2018-10-30','2018-11-01'),
(4,'Roberto','Chacon Alcantara','8297821156','MP','08:00','2018-10-28','2018-11-01'),
(5,'Roberto','Chacon Alcantara','8297821156','MP','08:00','2018-11-02','2018-11-01'),
(6,'Roberto','Chacon Alcantara','8297821156','MP','08:00','2018-11-11','2018-11-01'),
(7,'Roberto','Chacon Alcantara','8297821156','CA','01:00','2018-11-15','2018-11-01'),
(8,'Dawson','Samboy','8297821156','MP','08:00','2018-11-16','2018-11-01'),
(9,'Roberto','Chacon Alcantara','8297821156','MP','12:00','2018-11-16','2018-11-01'),
(10,'Erick','Sanchez','8297821156','RM','08:00','2018-11-16','2018-11-01'),
(11,'Roberto','Chacon Alcantara','8297821156','RM','08:00','2018-11-30','2018-11-01'),
(12,'Eduardo','Gimenez','8297821156','CBF','09:00','2018-11-30','2018-11-01'),
(13,'Roberto','Chacon Alcantara','8297821156','RTD','15:00','2018-11-22','2018-11-01'),
(14,'Roberto','Chacon Alcantara','8297821156','CA','17:00','2018-11-15','2018-11-01'),
(15,'Roberto','Chacon Alcantara','8297821156','CA','09:00','2018-11-10','2018-11-01'),
(16,'Roberto','Chacon Alcantara','8297821156','MP','08:00','2018-11-15','2018-11-01'),
(17,'Roberto','Chacon Alcantara','8297821156','CA','12:00','2018-11-30','2018-11-01'),
(18,'Roberto','Chacon Alcantara','8297821156','CA','16:00','2018-11-16','2018-11-02'),
(19,'Roberto','heo','8297821156','CBF','09:00','2018-11-09','2018-11-02'),
(20,'Roberto','Chacon Alcantara','8297821156','CA','11:00','2018-11-16','2018-11-03'),
(21,'Roberto','Chacon Alcantara','8297821156','CBF','08:02','2018-11-26','2018-11-03'),
(22,'Roberto','Chacon Alcantara','8297821156','CBF','08:00','2018-11-16','2018-11-03'),
(23,'bettina','Chacon Alcantara','8297821156','CA','11:00','2018-11-09','2018-11-03');

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `clave` varchar(30) DEFAULT NULL,
  `imagen` text,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id`,`nombre`,`correo`,`clave`,`imagen`,`fecha`) values 
(1,'Administrador','admin@gmail.com','admin',NULL,'2018-10-22');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
