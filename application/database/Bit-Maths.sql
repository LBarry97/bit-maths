DROP DATABASE IF EXISTS `bit-maths`;

CREATE DATABASE `bit-maths`;

USE `bit-maths`;

/**
* Tabla de login para los usuarios
*/
CREATE TABLE `login` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(255) NOT NULL,
    `usuario` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `admin` TINYINT(1) NOT NULL DEFAULT '0',
    PRIMARY KEY (`id`)
) 