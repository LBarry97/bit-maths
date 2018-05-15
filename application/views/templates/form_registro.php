<?php
    if (isset($this->session->userdata['logeado'])) {
        header("location: http://localhost/bit-maths/index.php/autenticacion_usuario/logear_usuario");
    }
?>
<div id="wrapper">
    <main id="registro_main">
        <div id="registro">
            <h2>Registro</h2>
            <hr/>
            <?php
                echo "<div class='error_sms'>";
                echo validation_errors();
                echo "</div>";
                echo form_open('autenticacion_usuario/nuevo_registro');

                echo form_label('Nombre : ');
                echo"<br/>";
                $data = array(
                    'name' => 'nombre',
                    'required' => 'required'
                );
                echo form_input($data);
                echo"<br/>";
                echo"<br/>";
                echo form_label('Usuario : ');
                echo"<br/>";
                $data = array(
                    'name' => 'usuario',
                    'required' => 'required'
                );
                echo form_input($data);
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
                    'name' => 'email_value',
                    'required' => 'required'
                );
                echo form_input($data);
                echo"<br/>";
                echo"<br/>";
                echo form_label('Password : ');
                echo"<br/>";
                $data = array(
                    'name' => 'password',
                    'required' => 'required'
                );
                echo form_password($data);
                echo"<br/>";
                echo"<br/>";
            ?>
                <div class="d-flex justify-content-between">
                    <input class="btn" type="submit" value="Registrar" name="submit"/>
                    <a id="btn-cancelar" class="btn btn-danger" href="<?php echo base_url() ?>">Cancelar</a>
                </div>
            <?php
                echo form_close();
            ?>
            <a href="<?php echo base_url()?>index.php/autenticacion_usuario/login">Login</a>
        </div>
    </main>
    <footer id="footer" class="p-3 bg-dark text-white text-center">
        <em>&copy;2018 Lansana Barry Sow [lansanabarry97@gmail.com]</em>
    </footer>
</div>