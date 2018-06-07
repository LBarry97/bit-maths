<?php
    if (isset($this->session->userdata['logeado'])) {
        $usuario = ($this->session->userdata['logeado']['usuario']);
    } else {
        header("location: ../autenticacion_usuario/login");
    }
?>
<div class="wrapper style">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand" href="#">Bit-Maths</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item hidden">
                    <a class="nav-link" href="#">Relleno</a>
                </li>
                </li>
                <li id="logout" class="nav-item btn btn-danger">
                    <a class="nav-link" href="logout">Logout</a>
                </li>    
            </ul>
        </div>  
    </nav>
    <div id="aula-formacion" class="container-fluid">
        <div class="row">
            <ul id="nav-home" class="col-sm-3 nav flex-column nav-pills">
                <li class="nav-item" data-toggle="collapse" data-target="#temas-artimetica">Aritmética</li>
                <ul id="temas-artimetica" class="list-group collapse show">
                </ul>
                <li class="nav-item" data-toggle="collapse" data-target="#temas-algebra">Álgebra</li>
                <ul id="temas-algebra" class="list-group collapse">
                </ul>
                <li class="nav-item" data-toggle="collapse" data-target="#temas-geometria">Geometría</li>
                <ul id="temas-geometria" class="list-group collapse">
                </ul>
                <li class="nav-item" data-toggle="collapse" data-target="#temas-calculo">Cálculo</li>
                <ul id="temas-calculo" class="list-group collapse">
                </ul>
            </ul>
            <div id="content-tema" class="col-sm-9">
                <!-- TEMA 1.1
                <h1>Números naturales</h1>
                <hr>
                <p>
                    Los numeros naturales son los que utilizamos en la vida cotidiana para contar u ordenar.<br>
                    <br>El conjunto de los números naturales se representa por ℕ y está formado por:<br>
                    <br>ℕ = {0, 1, 2, 3, 4, 5, 6, 7, 8, 9, ...}<br>
                    <br>Nosotros consideramos que 0 es un número natural, aunque no todos los autores están de acuerdo.<br>
                    <br>Los números naturales son ilimitados, si a un número natural le sumamos 1, obtenemos otro número natural.<br>
                    <br>Con los números naturales podemos:
                </p>
                <ol>
                    <li>Contar los elementos de un conjunto (número cardinal).</li><br>
                    <li>Expresar la posición u orden que ocupa un elemento en un conjunto (número ordinal).</li><br>
                    <li>Identificar y diferenciar los distintos elementos de un conjunto.</li><br>
                </ol>
                <p>Los números naturales están ordenados, lo que nos permite comparar dos números naturales entre sí:</p>
                <ul class="list-unstyled">
                    <li>5 > 3 <i class="fa fa-arrow-right" style="font-size:24px; margin: 0 10px; color: green;"></i> 5 es mayor que 3.</li><br>
                    <li>3 < 5  <i class="fa fa-arrow-right" style="font-size:24px; margin: 0 10px; color: green;"></i> 3 es menor que 5. </li>
                </ul>-->
                <!-- TEMA 1.2
                <h1>Suma de números naturales</h1>
                <hr>
                <p>
                    La suma o adición de dos o más números naturales es la operación que obtiene un determinada cantidad total con la reunión de esos números.
                </p>
                <p>Se representa con el signo +.</p>
                <p>3 + 5 = 8</p>
                <p>2 + 5 + 7 = 14 </p>
                <p>Términos que intervienen en una suma:</p>
                <ul>
                    <li>a + b = c</li>
                </ul>
                <p>Los términos que intervienen en una suma se denominan:</p>
                <ol>
                    <li>a y b se denominan sumandos.</li><br>
                    <li>El resultado (c) se denomina suma.</li>
                </ol>
                <h5>Propiedades de la suma de números naturales </h5>
                <hr>
                <ol>
                    <li>Operación interna
                    <p>
                        El resultado de sumar dos números naturales es otro número natural.
                    </p>
                    </li>
                    <li>Asociativa
                    <p>
                        El modo de agrupar los sumandos no varía el resultado.
                    </p>
                    </li>
                    <li>Conmutativa
                    <p>
                        El orden de los sumandos no varía la suma.
                    </p>
                    </li>
                    <li>Elemento neutro
                    <p>
                        El 0 es el elemento neutro de la suma, porque todo número sumado con él da él mismo número.
                    </p>
                    </li>
                    
                </ol>-->
                <!-- TEMA 1.3
                <h1>Resta de números naturales</h1>
                <hr>
                <p>La resta o sustracción de dos números naturales es la operación que quita la cantidad del número menor (sustraendo) al número mayor (minuendo). </p>
                <p>Se representa con el signo −.</p>
                <p>5 − 3 = 8</p>
                <p>4 − 6, en este caso no podemos realizar la operación porque el minuendo ha de ser mayor o igual al sutraendo.</p>
                <p>Los términos que intervienen en una resta se denominan:</p>
                <p>a − b = c</p>
                <ul>
                    <li>a se denomina minuendo.</li><br>
                    <li>b se denomina sustraendo.</li><br>
                    <li>El resultado (c) se denomina diferencia.</li>
                </ul>
                <h5>Propiedades de la resta de números naturales</h5>
                <hr>
                <ol>
                    <li>No interna
                    <p>El resultado de restar dos números naturales no siempre es otro número natural.</p>
                    </li>
                    <li>No conmutativa
                    <p>5 - 2 != 2 - 5</p>
                    </li>
                </ol>-->
            </div>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>application/static/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>application/static/js/formacion.js"></script>