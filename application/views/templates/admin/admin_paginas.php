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
    </div>
    <script src="<?php echo base_url(); ?>application/static/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>application/static/js/admin_paginas.js"></script>