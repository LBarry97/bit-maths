<?php
    if (isset($this->session->userdata['logeado'])) {
        $usuario = ($this->session->userdata['logeado']['usuario']);
        $email = ($this->session->userdata['logeado']['email']);
    } else {
        header("location: login");
    }
?>
<div id="wrapper">
    <div id="profile">
        <?php
            echo "Hello <b id='welcome'><i>" . $usuario . "</i> !</b>";
            echo "<br/>";
            echo "<br/>";
            echo "Welcome to Admin Page";
            echo "<br/>";
            echo "<br/>";
            echo "Your Username is " . $usuario;
            echo "<br/>";
            echo "Your Email is " . $email;
            echo "<br/>";
        ?>
    </div>
    <br/>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand" href="#">Bit-Maths | Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Ad</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout">Logout</a>
                </li>    
            </ul>
        </div>  
    </nav>
    <br>
    <div class="container">
        <div class="row justify-content-between">
            <div class="card col-sm-5">
                <a href="<?=site_url('admin/usuarios')?>" class="card-body text-center">Users</a>
            </div>
            <div class="card col-sm-5">
                <a href="#" class="card-body text-center">Bit-Maths</a>
            </div>
        </div>
    </div>
    <footer id="footer" class="p-3 bg-dark text-white text-center">
        <em>&copy;2018 Lansana Barry Sow [lansanabarry97@gmail.com]</em>
    </footer>
</div>