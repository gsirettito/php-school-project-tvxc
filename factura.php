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
    <!--header-->
    <?php MinHeader("user"); ?>
    <!--/ header-->
    <!---->
    <section id="form" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 wow fadeInLeft delay-05s">
                    <div class="section-title">
                        <h2 class="head-title">Mi Factura</h2>
                        <hr class="botm-line">
                        <p class="sec-para">Factura de Servicios. Consumo mensual.</p>
                    </div>
                </div>
                <div class="col-md-9">
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="col-md-6 wow fadeInRight delay-02s">
                            <div class="form-group">
                                <table class="tabla" width="450px" name="factura" border="0" cellspacing="0" cellpadding="0">
                                    <tr style="border-bottom:dotted 2px #000;">
                                        <td>Nombre y Apellidos<br>Direccion<br>Teléfono<br>Periodo de Consumo</td>
                                    </tr>
                                    <tr height="4px" style="border-bottom:dotted 2px #000;"></tr>
                                    <tr>
                                        <td class="lcelda">Servicio(s) Facturado(s)</td>
                                        <td class="rcelda">Código</td>
                                    </tr>
                                    <tr>
                                        <td class="lcelda">Cuota Mensual</td>
                                        <td class="rcelda">30.00</td>
                                    </tr>
                                    <tr>
                                        <td class="lcelda">Subtotal</td>
                                        <td class="rcelda">30.00</td>
                                    </tr>
                                    <tr style="border-top:dotted 2px #000;">
                                        <td class="lcelda">Total a pagar</td>
                                        <td class="rcelda">30.00</td>
                                    </tr>
                                </table>
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInRight delay-02s">
                            <div class="icon-text">
                                <button type="submit" class="btn btn-send btn-lg btn-anis-effect">Descargar</button>
                            </div>
                        </div>                        
                    </form>
                    <?php
                        if(isset($_POST) && $_POST){
                            
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