DROP DATABASE IF EXISTS `bit-maths`;

CREATE DATABASE `bit-maths`;

USE `bit-maths`;

CREATE TABLE `login` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nombre` varchar(255) NOT NULL,
    `usuario` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
) 