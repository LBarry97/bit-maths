<main>
  <div class="jumbotron text-center">
    <h1>Bit-Maths</h1>
    <p>Nos hemos propuesto lograr que nuestros usuarios se enamoren de las matemáticas.</p>
  </div>
  <div class="container mb-5">
    <div>
      <button class="btn btn-success">Date de alta</button>
    </div>
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#aritmetica">Aritmética</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#algebra">Álgebra</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#geometria">Geometría</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#calculo">Cálculo</a>
      </li>
    </ul>
    <div class="tab-content ">
      <div id="home" class="container tab-pane active"><br>
        <div class="row">
          <div class="col-12 col-sm-5">
          <?php echo img(array('src'=>'static/img/usuario.jpg', 'alt'=> 'Usuario', 'class'=>'img-fluid')); ?>
          </div>
          <div class="col-12 col-sm-7">
          <p>Aprende los procedimientos, entiende por qué funcionan, comprende los conceptos para aplicarlos en problemas cotidianos.</p>
          <button type="button" class="btn btn-secondary mr-auto">Date de alta</button>
          </div>
        </div>
      </div>
      <div id="aritmetica" class="container tab-pane fade"><br>
        <div class="row">
          <div class="col-12 col-sm-5">
            <?php echo img(array('src'=>'static/img/aritmetica.png', 'alt'=> 'Aritmética', 'class'=>'img-fluid')); ?>
          </div>
          <div class="col-12 col-sm-7">
            <p>La aritmética es una de las ramas más antiguas y elementales de las matemáticas, que se origina de la palabra griega arithmos, que significa número. Implica el estudio de los números, especialmente las propiedades de las operaciones tradicionales sobre ellos, como la suma, la resta, la división y la multiplicación.</p>
          </div>
        </div>
      </div>
      <div id="algebra" class="container tab-pane fade"><br>
        <div class="row">
          <div class="col-12 col-sm-5">
            <?php echo img(array('src'=>'static/img/algebra.jpg', 'alt'=> 'Algebra', 'class'=>'img-fluid')); ?>
          </div>
          <div class="col-12 col-sm-7">
            <p>El álgebra es una de las ramas de las matemáticas que se ocupa de la teoría de números, la geometría y su análisis. A veces se lo conoce como el estudio de los símbolos matemáticos y las reglas que implican la manipulación de estos símbolos matemáticos. El álgebra incluye casi todo, desde la resolución de ecuaciones elementales hasta el estudio de las abstracciones.</p>
          </div>
        </div>
      </div>
      <div id="geometria" class="container tab-pane fade"><br>
        <div class="row">
          <div class="col-12 col-sm-5">
            <?php echo img(array('src'=>'static/img/algebra.jpg', 'alt'=> 'Algebra', 'class'=>'img-fluid')); ?>
          </div>
          <div class="col-12 col-sm-7">
          <p>La geometría se deriva de dos palabras latinas, geo + metron que significa tierra y medida. Por lo tanto, se ocupa de las propiedades y relaciones de puntos, líneas, superficies, sólidos y análogos dimensionales superiores.</p>
          </div>
        </div>
      </div>
      <div id="calculo" class="container tab-pane fade"><br>
        <div class="row">
          <div class="col-12 col-sm-5">
            <?php echo img(array('src'=>'static/img/calculo.jpg', 'alt'=> 'Calculo', 'class'=>'img-fluid')); ?>
          </div>
          <div class="col-12 col-sm-7">
          <p>El cálculo tiene que ver con la comparación de cantidades que varían de una sola línea. Tiene aplicaciones significativas en Ciencia e Ingeniería. Muchos de los temas que estudiamos, como la velocidad, la aceleración o la corriente en un circuito, no se comportan de forma lineal. Si las cantidades cambian continuamente, necesitamos cálculos para estudiar al respecto. El cálculo es la rama de las matemáticas que se ocupa del cambio continuo.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>