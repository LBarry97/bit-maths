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
        <h3>Tabla usuarios:</h3>        
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
                <?php
                $len_usuarios = count($tabla_usuarios);
                for ($i = 0; $i < $len_usuarios; $i++) {
                ?>
                <tr>
                    <td><?=$tabla_usuarios[$i]['nombre']?></td>
                    <td><?=$tabla_usuarios[$i]['usuario']?></td>
                    <td><?=$tabla_usuarios[$i]['email']?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>