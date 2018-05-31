USE `bit-maths`;

/**
* Inserts en la tabal RAMA:
*/
INSERT INTO `rama` (nombre, contenido) VALUES
('Aritmética', '{"titulo":"Aritmética","descripcion":"La aritmética es una de las ramas más antiguas y elementales de las matemáticas, que se origina de la palabra griega arithmos, que significa número. Implica el estudio de los números, especialmente las propiedades de las operaciones tradicionales sobre ellos, como la suma, la resta, la división y la multiplicación.","imagen":"aritmetica1.jpg"}'),
('Álgebra', '{"titulo":"Álgebra","descripcion":"El álgebra es una de las ramas de las matemáticas que se ocupa de la teoría de números, la geometría y su análisis. A veces se lo conoce como el estudio de los símbolos matemáticos y las reglas que implican la manipulación de estos símbolos matemáticos. El álgebra incluye casi todo, desde la resolución de ecuaciones elementales hasta el estudio de las abstracciones.","imagen":"algebra.jpg"}'),
('Geometría', '{"titulo":"Geometría","descripcion":"La geometría se deriva de dos palabras latinas, geo + metron que significa tierra y medida. Por lo tanto, se ocupa de las propiedades y relaciones de puntos, líneas, superficies, sólidos y análogos dimensionales superiores.","imagen":"geometria.jpg"}'),
('Cálculo', '{"titulo":"Cálculo","descripcion":"El cálculo tiene que ver con la comparación de cantidades que varían de una sola línea. Tiene aplicaciones significativas en Ciencia e Ingeniería. Muchos de los temas que estudiamos, como la velocidad, la aceleración o la corriente en un circuito, no se comportan de forma lineal. Si las cantidades cambian continuamente, necesitamos cálculos para estudiar al respecto. El cálculo es la rama de las matemáticas que se ocupa del cambio continuo.","imagen":"calculo.jpg"}');


/**
* Inserts en la tabal TEMA:
*/
INSERT INTO `tema` (contenido) VALUES
('{}'),
('{}'),
('{}'),
('{}'),
('{}'),
('{}'),
('{}'),
('{}'),
('{}'),
('{}'),
('{}'),
('{}');

/**
* Inserts en la tabal RAMA_TEMA:
*/
TRUNCATE TABLE `rama_tema`;
INSERT INTO `rama_tema` (id_rama, id_tema) VALUES
(1,1),
(1,2),
(1,3),
(2,4),
(2,5),
(2,6),
(3,7),
(3,8),
(3,9),
(4,10),
(4,11),
(4,12);
