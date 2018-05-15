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
        <b id="logout"><a href="logout">Logout</a></b>
    </div>
    <br/>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand" href="#">Bit-Maths</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>    
            </ul>
        </div>  
    </nav>
    <br>
    <div class="container">
        <div class="row justify-content-between">
            <div class="card col-sm-5">
                <a href="#" class="card-body text-center">Users</a>
            </div>
            <div class="card col-sm-5">
                <a href="#" class="card-body text-center">Bit-Maths</a>
            </div>
        </div>
    </div>
    <!-- NAV 
    <nav class="nav-side-menu">
        <div class="brand">Brand Logo</div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                    <a href="#">
                        <i class="fa fa-dashboard fa-lg"></i> Dashboard
                    </a>
                </li>
                <li data-toggle="collapse" data-target="#products" class="collapsed active">
                    <a href="#"><i class="fa fa-gift fa-lg"></i> UI Elements <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li class="active"><a href="#">CSS3 Animation</a></li>
                    <li><a href="#">General</a></li>
                    <li><a href="#">Buttons</a></li>
                    <li><a href="#">Tabs &amp; Accordions</a></li>
                    <li><a href="#">Typography</a></li>
                    <li><a href="#">FontAwesome</a></li>
                    <li><a href="#">Slider</a></li>
                    <li><a href="#">Panels</a></li>
                    <li><a href="#">Widgets</a></li>
                    <li><a href="#">Bootstrap Model</a></li>
                </ul>
                <li data-toggle="collapse" data-target="#service" class="collapsed">
                    <a href="#"><i class="fa fa-globe fa-lg"></i> Services <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="service">
                    <li>New Service 1</li>
                    <li>New Service 2</li>
                    <li>New Service 3</li>
                </ul>


                <li data-toggle="collapse" data-target="#new" class="collapsed">
                    <a href="#"><i class="fa fa-car fa-lg"></i> New <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="new">
                    <li>New New 1</li>
                    <li>New New 2</li>
                    <li>New New 3</li>
                </ul>
                <li>
                    <a href="#">
                        <i class="fa fa-user fa-lg"></i> Profile
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-users fa-lg"></i> Users
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container" id="main">
        <div class="row">
            <div class="col-md-12">
                <h4>This is suppose to be in the main content</h4>
            </div>
        </div>
    </div>-->
</div>