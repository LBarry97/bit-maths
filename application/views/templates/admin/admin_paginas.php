<?php
    if (isset($this->session->userdata['logeado'])) {
        $usuario = ($this->session->userdata['logeado']['usuario']);
        $email = ($this->session->userdata['logeado']['email']);
    } else {
        header("location: login");
    }
?>
<div id="wrapper">
    <nav id="admin-navbar" class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand" href="../autenticacion_usuario/logear_usuario">Bit-Maths | Admin</a>
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
                    <a class="nav-link" href="../autenticacion_usuario/logout">Logout</a>
                </li>    
            </ul>
        </div>  
    </nav>
    <div class="container">
        <div class="card style-card">
            <a href="<?=site_url('admin/pagina/home_publica')?>" class="card-body text-center">Home Publica</a>
        </div>
        <div class="row justify-content-between style-card">
            <div class="card col-sm-5 style-card">
                <a href="<?=site_url('admin/usuarios')?>" class="card-body text-center">Aritmética</a>
            </div>
            <div class="card col-sm-5 style-card">
                <a href="<?=site_url('admin/paginas')?>" class="card-body text-center">Álgebra</a>
            </div>
        </div>
        <div class="row justify-content-between style-card">
            <div class="card col-sm-5 style-card">
                <a href="<?=site_url('admin/usuarios')?>" class="card-body text-center">Geometría</a>
            </div>
            <div class="card col-sm-5 style-card">
                <a href="<?=site_url('admin/paginas')?>" class="card-body text-center">Cálculo</a>
            </div>
        </div>
    </div>
    <footer id="footer" class="p-3 bg-dark text-white text-center">
        <em>&copy;2018 Lansana Barry Sow [lansanabarry97@gmail.com]</em>
    </footer>
</div>