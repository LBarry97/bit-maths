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
('{"descripcion":"<h1>Números naturales</h1><hr><p>Los numeros naturales son los que utilizamos en la vida cotidiana para contar u ordenar.<br><br>El conjunto de los números naturales se representa por ℕ y está formado por:<br><br>ℕ = {0, 1, 2, 3, 4, 5, 6, 7, 8, 9, ...}<br><br>Nosotros consideramos que 0 es un número natural, aunque no todos los autores están de acuerdo.<br><br>Los números naturales son ilimitados, si a un número natural le sumamos 1, obtenemos otro número natural.<br><br>Con los números naturales podemos:</p><ol><li>Contar los elementos de un conjunto (número cardinal).</li><br><li>Expresar la posición u orden que ocupa un elemento en un conjunto (número ordinal).</li><br><li>Identificar y diferenciar los distintos elementos de un conjunto.</li><br></ol><p>Los números naturales están ordenados, lo que nos permite comparar dos números naturales entre sí:</p><ul><li>5 > 3 --> 5 es mayor que 3.</li><br><li>3 < 5  --> 3 es menor que 5. </li></ul>"}'),
('{"descripcion":"<h1>Suma de números naturales</h1><hr><p>La suma o adición de dos o más números naturales es la operación que obtiene un determinada cantidad total con la reunión de esos números.</p><p>Se representa con el signo +.</p><p>3 + 5 = 8</p><p>2 + 5 + 7 = 14 </p><p>Términos que intervienen en una suma:</p><ul><li>a + b = c</li></ul><p>Los términos que intervienen en una suma se denominan:</p><ol><li>a y b se denominan sumandos.</li><br><li>El resultado (c) se denomina suma.</li></ol><h5>Propiedades de la suma de números naturales </h5><hr><ol><li>Operación interna<p>El resultado de sumar dos números naturales es otro número natural.</p></li><li>Asociativa<p>El modo de agrupar los sumandos no varía el resultado.</p></li><li>Conmutativa<p>El orden de los sumandos no varía la suma.</p></li><li>Elemento neutro<p>El 0 es el elemento neutro de la suma, porque todo número sumado con él da él mismo número.</p></li></ol>"}'),
('{"descripcion":"<h1>Resta de números naturales</h1><hr><p>La resta o sustracción de dos números naturales es la operación que quita la cantidad del número menor (sustraendo) al número mayor (minuendo). </p><p>Se representa con el signo −.</p><p>5 − 3 = 8</p><p>4 − 6, en este caso no podemos realizar la operación porque el minuendo ha de ser mayor o igual al sutraendo.</p><p>Los términos que intervienen en una resta se denominan:</p><p>a − b = c</p><ul><li>a se denomina minuendo.</li><br><li>b se denomina sustraendo.</li><br><li>El resultado (c) se denomina diferencia.</li></ul><h5>Propiedades de la resta de números naturales</h5><hr><ol><li>No interna<p>El resultado de restar dos números naturales no siempre es otro número natural.</p></li><li>No conmutativa<p>5 - 2 diferente 2 - 5</p></li></ol>"}');

/**
* Inserts en la tabal RAMA_TEMA:
*/
TRUNCATE TABLE `rama_tema`;
INSERT INTO `rama_tema` (id_rama, id_tema) VALUES
(1,1),
(1,2),
(1,3);
