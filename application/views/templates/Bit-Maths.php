<div class="jumbotron text-center">
  <h1>Bit-Maths</h1>
  <p>Nos hemos propuesto lograr que nuestros usuarios se enamoren de las matemáticas.</p>
</div>
<div class="container mb-5">
  <!--<div class="row">
    <div class="col-sm-3">
      <ul class="list-group">
        <li class="list-group-item"><a Aritmética</li>
        <li class="list-group-item">Álgebra</li>
        <li class="list-group-item">Geometría</li>
        <li class="list-group-item">Cálculo</li>
      </ul>
    </div>
  </div> -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Aritmética</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Álgebra</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Geometría</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Cálculo</a>
    </li>
  </ul>
  <div class="tab-content ">
    <div id="home" class="container tab-pane active"><br>
      <div class="row">
        <div class="col-12 col-sm-5">
        <?php echo img(array('src'=>'static/img/usuario.jpg', 'alt'=> 'Usuario', 'class'=>'img-fluid')); ?>
        </div>
        <div class="col-12 col-sm-7">
        <h3>Aprende los procedimientos, entiende por qué funcionan, comprende los conceptos para aplicarlos en problemas cotidianos.</h3>
        <button type="button" class="btn btn-secondary mr-auto">Date de alta</button>
        </div>
      </div>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>  
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>
</div>  