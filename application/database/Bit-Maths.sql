DROP DATABASE IF EXISTS `bit-maths`;

CREATE DATABASE `bit-maths`;

USE `bit-maths`;


/**
* Tabla de entorno: Admin y Alumno:
*/
CREATE TABLE `entorno` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(255) NOT NULL,
    `accion` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`)
);


/**
* Tabla de usuarios
*/
CREATE TABLE `usuario` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(255) NOT NULL,
    `usuario` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `entorno` INT(11),
    PRIMARY KEY (`id`),
    FOREIGN KEY (`entorno`) REFERENCES `entorno`(`id`) 
);

/**
* Tabla de las vistas
*/
CREATE TABLE `vista` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(100) NOT NULL,
    `descripcion` VARCHAR(100) NOT NULL,
    `contenido` TEXT NOT NULL,
    PRIMARY KEY (`id`)
);

/**
* Tabla de la relacion de las vistas y los entornos
*/
CREATE TABLE `vista_entorno` (
    `id_vista` INT(11) NOT NULL,
    `id_entorno` INT(11) NOT NULL,
    CONSTRAINT `pk_vista_entorno` PRIMARY KEY (`id_vista`,`id_entorno`)
);

