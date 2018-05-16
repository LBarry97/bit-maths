<?php
if (isset($this->session->userdata['logged_in'])) {
    header("location: http://localhost/bit-maths/index.php/autenticacion_usuario/logear_usuario");
}
?>
<?php
    if (isset($sms_info)) {
        echo "<div class='sms'>";
        echo $sms_info;
        echo "</div>";
    }
?>
<div id="wrapper">
    <main id="login_main">
        <div id="login">
            <h2>Login</h2>
            <hr/>
            <?php echo form_open('autenticacion_usuario/logear_usuario'); ?>
            <?php
                echo "<div class='error_sms'>";
                if (isset($sms_error)) {
                    echo $sms_error;
                }
                echo validation_errors();
                echo "</div>";
            ?>
            <label>Usuario :</label>
            <input type="text" name="usuario" id="nombre" placeholder="nombre" required="required"/><br /><br />
            <label>Password :</label>
            <input type="password" name="password" id="password" placeholder="**********" required="required"/><br/><br />
            <div class="d-flex justify-content-between">
                <input class="btn" type="submit" value=" Login " name="submit"/>
                <a id="btn-cancelar" class="btn btn-danger" href="<?=site_url('')?>">Cancelar</a>
            </div>
            <a href="<?=site_url('autenticacion_usuario/registro')?>">Registro</a>
            <?php echo form_close(); ?>
        </div>
    </main>
    <footer id="footer" class="p-3 bg-dark text-white text-center">
        <em>&copy;2018 Lansana Barry Sow [lansanabarry97@gmail.com]</em>
    </footer>
</div>

