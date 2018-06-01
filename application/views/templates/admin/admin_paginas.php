<?php
    if (isset($this->session->userdata['logeado']) && $this->session->userdata['logeado']['admin'] == "1") {
        $usuario = ($this->session->userdata['logeado']['usuario']);
    } else {
        header("location: login");
    }
?>
<br>
<br>
    <div class="container">
        <div class="card bg-secondary text-white style-card">
            <a href="<?=site_url('admin/pagina/home_publica')?>" class="card-body text-center">Home Publica</a>
        </div>
        <div class="row justify-content-between style-card">
            <div class="card col-sm-5 bg-secondary text-white style-card">
                <a href="<?=site_url('admin/usuarios')?>" class="card-body text-center">Aritmética</a>
            </div>
            <div class="card col-sm-5 bg-secondary text-white style-card">
                <a href="<?=site_url('admin/paginas')?>" class="card-body text-center">Álgebra</a>
            </div>
        </div>
        <div class="row justify-content-between style-card">
            <div class="card col-sm-5 bg-secondary text-white style-card">
                <a href="<?=site_url('admin/usuarios')?>" class="card-body text-center">Geometría</a>
            </div>
            <div class="card col-sm-5 bg-secondary text-white style-card">
                <a href="<?=site_url('admin/paginas')?>" class="card-body text-center">Cálculo</a>
            </div>
        </div>
    </div>