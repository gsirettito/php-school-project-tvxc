<?php require("library.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>TVxC - Login</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="icon" href="img/icon.png" type="image/x-icon">

  </head>
  <body>
    <!--header-->
    <header class="main-header" id="header">
        <div class="bg-color">
            <!--nav-->
            <nav class="nav navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="col-md-12">
                        <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false" aria-controls="navbar">
                            <span class="fa fa-bars"></span>
                        </button>
                            <a href="index.php" class="navbar-brand">TVxC</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!--/ nav-->
            <div class="container text-center">
                <div class="wrapper wow fadeInUp delay-05s" >                    
                    <h1><span class="big text-uppercase">TVxC</span></h1>
                    <h4 class="text-ligh">Con TVXC podrás ver obtener un nuevo servicio de televisión HD<br>Únete a nosotros y disfruta</h4><br>
                    <form action="login.php" method="post" class="contactForm">
                        <center>
                            <input id="name" style="width:auto" class="form-control" type="text" placeholder="Correo" name="name" /><br>
                            <input style="width:auto" class="form-control" type="password" placeholder="Contraseña" name="passw" /><br>
                        </center>
                        <button class="btn btn-primary btn-lg btn-anis-effect" type="submit"><span class="btn-text">Entrar</span></button>
                    </form>
                    <?php                       
                        if(isset($_POST) && $_POST){
                            $name = $_POST["name"];
                            $passw = $_POST["passw"];
                            Login();
                            /*if($name && $passw){
                                if($name == "user" && $passw == "user")
                                    header("Location:user.php");
                                else if($name == "admin" && $passw == "admin")
                                    header("Location:admin.php");
                                else echo '<p style="color: rgb(225, 40, 40)">El usuario o la contraseña es incorrecta.</p>';
                            } else echo '<p style="color: rgb(225, 40, 40)">Debe rellenar todos los campos.</p>';*/
                        }
                    ?>
                </div>
            </div>
        </div>
    </header>
    <!--/ header-->
    <?php Footer();?>
    <!---->
    <!--contact ends-->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
    
  </body>
</html>