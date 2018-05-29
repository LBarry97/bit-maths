USE `bit-maths`;

/**
* Inserts de la tabla entorno:
*/
INSERT INTO `entorno` (nombre, accion) VALUES
('Admin', 'Mantener los datos de la aplicación'),
('Formacion', 'Mostrar la documentación de formación');


/**
* Inserts de la tabla vista:
*/
INSERT INTO `vista` (nombre, descripcion, contenido) VALUES
(
	'Home',
	'Introducción de la home publica',
	'{
		"titulo":"Bit-Maths",
		"introduccion":"Nos hemos propuesto lograr que nuestros usuarios se enamoren de las matemáticas. Aprende los procedimientos, entiende por qué funcionan, comprende los conceptos para aplicarlos en problemas cotidianos."
	}'
),
(
	'Aritmética',
	'Aritmética rama matematica',
	'{
		"titulo":"Aritmética",
		"descripcion":"La aritmética es una de las ramas más antiguas y elementales de las matemáticas, que se origina de la palabra griega arithmos, que significa número. Implica el estudio de los números, especialmente las propiedades de las operaciones tradicionales sobre ellos, como la suma, la resta, la división y la multiplicación."
        "imagen":"aritmetica1.jpg"
	}'
),
(
	'Álgebra',
	'Álgebra rama matematica',
	'{
		"titulo":"Álgebra",
		"descripcion":"El álgebra es una de las ramas de las matemáticas que se ocupa de la teoría de números, la geometría y su análisis. A veces se lo conoce como el estudio de los símbolos matemáticos y las reglas que implican la manipulación de estos símbolos matemáticos. El álgebra incluye casi todo, desde la resolución de ecuaciones elementales hasta el estudio de las abstracciones."
        "imagen":"algebra.jpg"
	}'
),
(
	'Geometría',
	'Geometría rama matematica',
	'{
		"titulo":"Geometría",
		"descripcion":"La geometría se deriva de dos palabras latinas, geo + metron que significa tierra y medida. Por lo tanto, se ocupa de las propiedades y relaciones de puntos, líneas, superficies, sólidos y análogos dimensionales superiores."
        "imagen":"geometria.jpg"
	}'
),
(
	'Cálculo',
	'Cálculo rama matematica',
	'{
		"titulo":"Cálculo",
		"descripcion":"El cálculo tiene que ver con la comparación de cantidades que varían de una sola línea. Tiene aplicaciones significativas en Ciencia e Ingeniería. Muchos de los temas que estudiamos, como la velocidad, la aceleración o la corriente en un circuito, no se comportan de forma lineal. Si las cantidades cambian continuamente, necesitamos cálculos para estudiar al respecto. El cálculo es la rama de las matemáticas que se ocupa del cambio continuo."
        "imagen":"calculo.jpg"
	}'
);