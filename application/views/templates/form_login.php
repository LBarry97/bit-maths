

<html>
    <?php
    if (isset($this->session->userdata['logged_in'])) {
        header("location: http://localhost/login/index.php/user_authentication/user_login_process");
    }
    ?>
    <head>
        <title>Formulario de login</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php
            if (isset($logout_message)) {
                echo "<div class='message'>";
                echo $logout_message;
                echo "</div>";
            }
        ?>
        <?php
            if (isset($sms_info)) {
                echo "<div class='message'>";
                echo $sms_info;
                echo "</div>";
            }
        ?>
        <main id="main">
            <div id="login">
                <h2>Formulario de login</h2>
                <hr/>
                <?php echo form_open('autenticacion_usuario/user_login_process'); ?>
                <?php
                    echo "<div class='error_msg'>";
                    if (isset($error_message)) {
                        echo $error_message;
                    }
                    echo validation_errors();
                    echo "</div>";
                ?>
                <label>Nombre :</label>
                <input type="text" name="usuario" id="nombre" placeholder="nombre"/><br /><br />
                <label>Password :</label>
                <input type="password" name="password" id="password" placeholder="**********"/><br/><br />
                <input type="submit" value=" Login " name="submit"/><br />
                <a href="<?php echo base_url() ?>index.php/autenticacion_usuario/user_registration_show">To SignUp Click Here</a>
                <?php echo form_close(); ?>
            </div>
        </main>
    </body>
</html>

