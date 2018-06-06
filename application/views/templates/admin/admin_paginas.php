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
        <?php
            echo form_open('autenticacion_usuario/nuevo_registro');
        ?>
        <div class="form-group">
            <label for="contentRama">Descripción Rama:</label>
            <textarea class="form-control" id="contentRama" rows="3"></textarea>
            <br>
            <br>
            <div>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home">Tema 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu1">Tema 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu2">Tema 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#">+</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="home" class="container tab-pane active"><br>
                        <label for="contentRama">Contenido:</label>
                        <br>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary">H1</button>
                            <button type="button" class="btn btn-secondary">H2</button>
                            <button type="button" class="btn btn-secondary">H3</button>
                            <button type="button" class="btn btn-secondary">P</button>
                            <button type="button" class="btn btn-secondary">BR</button>
                            <button type="button" class="btn btn-secondary">DIV</button>
                            <button type="button" class="btn btn-secondary">UL</button>
                            <button type="button" class="btn btn-secondary">LI</button>
                            <button type="button" class="btn btn-secondary">IMG</button>
                            <button type="button" class="btn btn-secondary">BUTTON LINK</button>
                            <button type="button" class="btn btn-secondary">STRONG</button>
                        </div>
                        <textarea class="form-control" id="contentRama" rows="10" heig></textarea>
                    </div>
                    <div id="menu1" class="container tab-pane fade"><br>
                        <label for="contentRama">Contenido:</label>
                        <textarea class="form-control" id="contentRama" rows="10"></textarea>
                    </div>
                    <div id="menu2" class="container tab-pane fade"><br>
                        <label for="contentRama">Contenido:</label>
                        <textarea class="form-control" id="contentRama" rows="10"></textarea>
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