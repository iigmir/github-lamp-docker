CREATE DATABASE `hw_db`;
USE `hw_db`;

CREATE TABLE `hello_world` (
  `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `Name` varchar(12) NOT NULL
) DEFAULT CHARSET=utf8;

INSERT INTO `hello_world` (`Name`) VALUES ('Alex'), ('Betty'), ('Chris');
