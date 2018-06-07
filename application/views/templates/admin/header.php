<!DOCTYPE html>
<html lang="en">
        <head>
                <title><?php echo $title; ?></title>
                <meta charset="UTF-8" />
                <meta name="author" content="Lansana Barry Sow" />
  	        <meta name="description" content="Bit-Maths Maths CodeIgniter DAW" />
                <meta name="keywords" content="CodeIgniter, PHP, Bootstrap, HTML5, CSS3, JS, jQuery, DAW, FBMOLL" />
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <?php echo link_tag('application/static/bootstrap-4.1.0/css/bootstrap.min.css'); ?>
                <?php echo link_tag('application/static/css/style.css'); ?>
        </head>
        <body>
                <div class="wrapper">
                        <nav id="navbar_admin" class="navbar navbar-expand-md bg-dark navbar-dark">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                                <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                                <ul class="navbar-nav">
                                        <li class="nav-item btn btn-dark active">
                                                <a class="nav-link" href="<?=site_url('autenticacion_usuario/admin')?>">Admin Home</a>
                                        </li>
                                        <li id="logout" class="nav-item btn btn-danger">
                                                <a class="nav-link" href="<?=site_url('autenticacion_usuario/logout')?>">Logout</a>
                                        </li>    
                                </ul>
                                </div>  
                        </nav>