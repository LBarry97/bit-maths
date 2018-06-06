<?php
    if (isset($this->session->userdata['logeado'])) {
        $usuario = ($this->session->userdata['logeado']['usuario']);
    } else {
        header("location: ../autenticacion_usuario/login");
    }
?>
<div class="wrapper">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand" href="#">Bit-Maths</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item hidden">
                    <a class="nav-link" href="#">Ad</a>
                </li>
                </li>
                <li id="logout" class="nav-item btn btn-danger">
                    <a class="nav-link" href="logout">Logout</a>
                </li>    
            </ul>
        </div>  
    </nav>
    <ul id="nav-home" class="nav flex-column nav-pills">
        <li class="nav-item">
            <a class="nav-link active" href="#">Bit-Maths</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Aritmética</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Álgebra</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Geometría</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Cálculo</a>
        </li>
    </ul>
    <script src="<?php echo base_url(); ?>application/static/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>application/static/js/formacion.js"></script>