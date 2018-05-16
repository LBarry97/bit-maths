<?php
    if (isset($this->session->userdata['logeado'])) {
        $usuario = ($this->session->userdata['logeado']['usuario']);
        $email = ($this->session->userdata['logeado']['email']);
    } else {
        header("location: ../autenticacion_usuario/login");
    }
?>
<div id="wrapper">
    <div class="container">
        <h3>Tabla usuarios</h3>        
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
    <footer id="footer" class="p-3 bg-dark text-white text-center">
        <em>&copy;2018 Lansana Barry Sow [lansanabarry97@gmail.com]</em>
    </footer>
</div>