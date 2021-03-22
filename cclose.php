<?php require("library.php");
    session_start();
    if(!isset($_SESSION) || !isset($_SESSION["guser"]))
        header("Location:login.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>TVxC - Perfil</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="icon" href="img/icon.png" type="image/x-icon">
    
  </head>
  <body>
    <!---->
    <?php MinHeader("user"); ?>
    <!---->
    <section id="form" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 wow fadeInLeft delay-05s">
                    <div class="section-title">
                        <h2 class="head-title">Fin del Contrato</h2>
                        <hr class="botm-line">
                        <p class="sec-para">Yo user deseo Terminar mi contrato en TVxC.</p>
                    </div>
                </div>
                <div class="col-md-9">
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="col-md-6 wow fadeInRight delay-02s">
                            <div class="icon-text">
                                <input readonly="true" class="form-control" type="text" placeholder="Nombre" name="name" <?php echo 'value="'.$_SESSION["gname"].'"'; ?> />
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInRight delay-02s">
                            <div class="icon-text">
                                <input readonly="true" class="form-control" type="text" placeholder="Apellidos" name="lastname" <?php echo 'value="'.$_SESSION["glastname"].'"'; ?> />
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInRight delay-04s">
                            <div class="icon-text">
                                <input readonly="true" class="form-control" type="email" placeholder="Correo" name="email1" <?php echo 'value="'.$_SESSION["guser"].'"'; ?> />
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInRight delay-04s">
                            <div class="icon-text">
                                <input class="form-control" type="password" placeholder="Contraseña" name="passw" />
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInRight delay-02s">
                            <div class="icon-text">
                                <button type="submit" class="btn btn-send btn-lg btn-anis-effect">Aceptar</button>
                            </div>
                        </div>                        
                    </form>
                    <?php
                        if(isset($_POST) && $_POST){
                            $pass0 = $_POST["passw"];
                            if(!$pass0){
                                echo '<div class="col-md-6 wow fadeInRight delay-02s">
                                    <div class="icon-text">
                                    <p style="color: rgb(225, 40, 40)">Debe especififar su contraseña.</p>
                                    </div>
                                </div>';
                            } else EndAgreement();
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!---->
    <?php Footer(); ?>
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