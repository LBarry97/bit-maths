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
            <div id="content-tema" class="col-sm-9"></div>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>application/static/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>application/static/js/formacion.js"></script>