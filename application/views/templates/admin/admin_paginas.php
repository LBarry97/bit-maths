<?php
    if (isset($this->session->userdata['logeado']) && $this->session->userdata['logeado']['admin'] == "1") {
        $usuario = ($this->session->userdata['logeado']['usuario']);
    } else {
        header("location: ../autenticacion_usuario/login");
    }
?>
<br>
<br>
    <div class="container">
        <?php
            echo form_open('autenticacion_usuario/nuevo_registro');
        ?>
        <div class="form-group">
            <label for="contentRama">Descripción Rama:</label>
            <textarea class="form-control" id="contentRama" rows="3"></textarea>
            <br>
            <br>
            <div>
                <div id="accordion">
                </div>
            </div>
            <br>
            <div id="btn-form-admin" class="d-flex justify-content-between">
                <input class="btn btn-success" type="submit" value="Guardar" name="submit"/>
                <a class="btn btn-secondary" href="<?=site_url('')?>">Nevo Tema</a>
                <a id="btn-cancelar" class="btn btn-danger" href="<?=site_url('')?>">Cancelar</a>
            </div>
        </div>
        <?php
            echo form_close();
        ?>
    </div>
    <script src="<?php echo base_url(); ?>application/static/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>application/static/js/admin_paginas.js"></script>