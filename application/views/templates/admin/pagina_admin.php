<?php
    if (isset($this->session->userdata['logeado']) && $this->session->userdata['logeado']['admin'] == "1") {
        $usuario = ($this->session->userdata['logeado']['usuario']);
    } else {
        header("location: login");
    }
?>
    <br>
    <div class="container">
        <div id="admin-home" class="row justify-content-between">
            <div class="card col-sm-5 bg-secondary text-white">
                <a href="<?=site_url('admin/usuarios')?>" class="card-body text-center">Users</a>
            </div>
            <div class="card col-sm-5 bg-secondary text-white">
                <a href="<?=site_url('admin/paginas')?>" class="card-body text-center">Bit-Maths</a>
            </div>
        </div>
    </div>