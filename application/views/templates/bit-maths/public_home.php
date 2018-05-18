<div id="wrapper">
  <main>
    <div id="home-jumbotron" class="jumbotron text-center">
      <h1 id="my_logo">Bit-Maths</h1>
      <div id="description-home">
        <h4>Nos hemos propuesto lograr que nuestros usuarios se enamoren de las matemáticas.</h4>
        <p>Aprende los procedimientos, entiende por qué funcionan, comprende los conceptos para aplicarlos en problemas cotidianos.</p>
      </div>
      <div id="cont-btn-acces">
        <a href="<?=site_url('autenticacion_usuario/registro')?>" class="btn btn-success">Registrar</a>
        <a href="<?=site_url('autenticacion_usuario/login')?>" class="btn btn-secondary">Login</a>
      </div>
    </div>
    <div id="temas-home-cont" class="container mb-5">
      <div class="row shadow-temas">
        <div class="col-12 col-sm-5 order-1">
          <?php echo img(array('src'=>'application/static/img/aritmetica1.jpg', 'alt'=> 'Aritmética', 'class'=>'img-fluid')); ?>
        </div>
        <div class="col-12 col-sm-7 order-2">
          <h2>Aritmética</h2>
          <p class="text-justify tema">La <strong>aritmética</strong> es una de las ramas más antiguas y elementales de las matemáticas, que se origina de la palabra griega arithmos, que significa número. Implica el estudio de los números, especialmente las propiedades de las operaciones tradicionales sobre ellos, como la suma, la resta, la división y la multiplicación.</p>
        </div>
      </div>
      <div class="row shadow-temas">
        <div class="col-12 col-sm-5 order-2">
          <?php echo img(array('src'=>'application/static/img/algebra.jpg', 'alt'=> 'Algebra', 'class'=>'img-fluid')); ?>
        </div>
        <div class="col-12 col-sm-7 order-1">
          <h2>Álgebra</h2>
          <p class="text-justify tema">El <strong>álgebra</strong> es una de las ramas de las matemáticas que se ocupa de la teoría de números, la geometría y su análisis. A veces se lo conoce como el estudio de los símbolos matemáticos y las reglas que implican la manipulación de estos símbolos matemáticos. El álgebra incluye casi todo, desde la resolución de ecuaciones elementales hasta el estudio de las abstracciones.</p>
        </div>
      </div>
      <div class="row shadow-temas">
        <div class="col-12 col-sm-5 order-1">
          <?php echo img(array('src'=>'application/static/img/geometria.jpg', 'alt'=> 'Geometría', 'class'=>'img-fluid')); ?>
        </div>
        <div class="col-12 col-sm-7 order-2">
          <h2>Geometría</h2>
          <p class="text-justify tema">La <strong>geometría</strong> se deriva de dos palabras latinas, geo + metron que significa tierra y medida. Por lo tanto, se ocupa de las propiedades y relaciones de puntos, líneas, superficies, sólidos y análogos dimensionales superiores.</p>
        </div>
      </div>
      <div class="row shadow-temas">
        <div class="col-12 col-sm-5 order-2">
          <?php echo img(array('src'=>'application/static/img/calculo.jpg', 'alt'=> 'Calculo', 'class'=>'img-fluid')); ?>
        </div>
        <div class="col-12 col-sm-7 order-1">
          <h2>Cálculo</h2>
          <p class="text-justify tema">El <strong>cálculo</strong> tiene que ver con la comparación de cantidades que varían de una sola línea. Tiene aplicaciones significativas en Ciencia e Ingeniería. Muchos de los temas que estudiamos, como la velocidad, la aceleración o la corriente en un circuito, no se comportan de forma lineal. Si las cantidades cambian continuamente, necesitamos cálculos para estudiar al respecto. El cálculo es la rama de las matemáticas que se ocupa del cambio continuo.</p>
        </div>
      </div>
    </div>
  </main>
  <footer class="p-3 bg-dark text-white text-center">
    <em>&copy;2018 Bit-Maths By Lansana Barry Sow [lansanabarry97@gmail.com]</em>
  </footer>
</div>