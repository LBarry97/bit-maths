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
            echo form_open('manage_data/showDataPost');
        ?>
        <div class="form-group">
            <?php
                echo "<div class='error_sms'>";
                if (isset($sms_info)) {
                    echo $sms_info;
                }
                echo "</div>";
                echo"<br/>";
            ?>
            <label for="contentRama">Descripción Rama:</label>
            <textarea class="form-control" id="contentRama" rows="3" name="rama"></textarea>
            <br>
            <br>
            <div>
                <div id="accordion">
                </div>
            </div>
            <br>
            <div id="btn-form-admin" class="d-flex justify-content-between">
                <input class="btn btn-success" type="submit" value="Guardar" name="submit"/>
                <input id="nuevo-tema" class="btn btn-secondary" type="button" value="Nuevo Tema"/>
                <a id="btn-cancelar" class="btn btn-danger" href="<?=site_url('autenticacion_usuario/admin')?>">Cancelar</a>
            </div>
        </div>
        <?php
            echo form_close();
        ?>
    </div>
    <script src="<?php echo base_url(); ?>application/static/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>application/static/js/admin_paginas.js"></script>