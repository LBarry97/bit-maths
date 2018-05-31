DROP DATABASE IF EXISTS `bit-maths`;

CREATE DATABASE `bit-maths`;

USE `bit-maths`;

/**
* Tabla de las diferentes ramas matematicas
*/
CREATE TABLE `rama` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(100) NOT NULL,
    `contenido` TEXT NOT NULL,
    PRIMARY KEY (`id`)
);

/**
* Tabla del temario de las diferentes ramas
*/
CREATE TABLE `tema` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `contenido` TEXT NOT NULL,
    PRIMARY KEY (`id`)
);

/**
* Tabla de relacion entre las ramas y los temarios
*/
CREATE TABLE `rama_tema` (
    `id_rama` INT(11) NOT NULL,
    `id_tema` INT(11) NOT NULL,
    FOREIGN KEY (`id_rama`) REFERENCES `rama`(`id`),
    FOREIGN KEY (`id_tema`) REFERENCES `tema`(`id`),
    CONSTRAINT `pk_rama_tema` PRIMARY KEY (`id_rama`,`id_tema`)
);

/**
* Tabla de usuarios
* Alumno -> admin=0 y Administrador -> admin=1
*/
CREATE TABLE `usuario` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(255) NOT NULL,
    `usuario` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255),
    `password` VARCHAR(255) NOT NULL,
    `admin` TINYINT(1) NOT NULL,
    PRIMARY KEY (`id`)
    
);

/**
* Tabla de relacion entre los usarios y el temario que han cursado
*/
CREATE TABLE `usuario_tema` (
    `id_usuario` INT(11) NOT NULL,
    `id_tema` INT(11) NOT NULL,
    FOREIGN KEY (`id_usuario`) REFERENCES `usuario`(`id`),
    FOREIGN KEY (`id_tema`) REFERENCES `tema`(`id`),
    CONSTRAINT `pk_usuario_tema` PRIMARY KEY (`id_usuario`,`id_tema`)
);
