CREATE DATABASE mantenimiento

CREATE TABLE `login` (
  `id` int(9) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
   CONSTRAINT `id` PRIMARY KEY (`id`)
);


CREATE TABLE `owner` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(8) NOT NULL,
  `gender`  varchar(50) NOT NULL,
  CONSTRAINT `id` PRIMARY KEY (`id`)
);


CREATE TABLE `property` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `province` varchar(50) NOT NULL,
  `canton` varchar(50) NOT NULL,
  `district`  varchar(50) NOT NULL,
  `price`  int(20) NOT NULL,
  `area`  varchar(50) NOT NULL,
  `lastDateUpdated`DATETIME NOT NULL,
  `description` varchar(300) NOT NULL,
  `ownerId` int(11),
  PRIMARY KEY (`id`),
  FOREIGN KEY (`ownerId`) REFERENCES owner(`id`)
);
