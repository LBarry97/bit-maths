<?php
    if (isset($this->session->userdata['logeado'])) {
        header("location: http://localhost/bit-maths/index.php/autenticacion_usuario/logear_usuario");
    }
?>
<main id="main">
    <div id="login">
        <h2>Registro</h2>
        <hr/>
        <?php
            echo "<div class='error_sms'>";
            echo validation_errors();
            echo "</div>";
            echo form_open('autenticacion_usuario/nuevo_registro');

            echo form_label('Nombre : ');
            echo"<br/>";
            echo form_input('nombre');
            echo"<br/>";
            echo"<br/>";
            echo form_label('Usuario : ');
            echo"<br/>";
            echo form_input('usuario');
            echo "<div class='error_sms'>";
            if (isset($sms_info)) {
                echo $sms_info;
            }
            echo "</div>";
            echo"<br/>";
            echo form_label('Email : ');
            echo"<br/>";
            $data = array(
                'type' => 'email',
                'name' => 'email_value'
            );
            echo form_input($data);
            echo"<br/>";
            echo"<br/>";
            echo form_label('Password : ');
            echo"<br/>";
            echo form_password('password');
            echo"<br/>";
            echo"<br/>";
            echo form_submit('submit', 'Registrar');
            echo form_close();
        ?>
        <a href="<?php echo base_url()?>index.php/autenticacion_usuario/login">Login</a>
    </div>
</main>