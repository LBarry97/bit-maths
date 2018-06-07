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
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#tema1">
                            Tema 1
                            </a>
                        </div>
                        <div id="tema1" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <label for="contentRama">Contenido:</label>
                                <br>
                                <div class="btn-group">
                                    <button type="button" class="pl-4 pr-4 btn btn-secondary">H1</button>
                                    <button type="button" class="pl-4 pr-4 btn btn-secondary">H2</button>
                                    <button type="button" class="pl-4 pr-4 btn btn-secondary">H3</button>
                                    <button type="button" class="pl-4 pr-4 btn btn-secondary">H4</button>
                                    <button type="button" class="pl-4 pr-4 btn btn-secondary">HR</button>
                                    <button type="button" class="pl-4 pr-4 btn btn-secondary">P</button>
                                    <button type="button" class="pl-4 pr-4 btn btn-secondary">BR</button>
                                    <button type="button" class="pl-4 pr-4 btn btn-secondary">DIV</button>
                                    <button type="button" class="pl-4 pr-4 btn btn-secondary">UL</button>
                                    <button type="button" class="pl-4 pr-4 btn btn-secondary">OL</button>
                                    <button type="button" class="pl-4 pr-4 btn btn-secondary">LI</button>
                                    <button type="button" class="pl-3 pr-3 btn btn-secondary">IMG</button>
                                    <button type="button" class="btn btn-secondary">BUTTON LINK</button>
                                    <button type="button" class="pl-3 pr-3 btn btn-secondary">STRONG</button>
                                </div>
                                <textarea class="form-control" id="contentRama" rows="10" heig></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div id="btn-form-admin" class="d-flex justify-content-between">
                <input class="btn btn-success" type="submit" value="Guardar" name="submit"/>
                <a id="btn-cancelar" class="btn btn-danger" href="<?=site_url('')?>">Cancelar</a>
            </div>
        </div>
        <?php
            echo form_close();
        ?>
    </div>
    <script src="<?php echo base_url(); ?>application/static/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>application/static/js/admin_paginas.js"></script>