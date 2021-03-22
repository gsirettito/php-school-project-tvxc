<?php require("library.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>TVxC</title>
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
                        <div class="collapse navbar-collapse navbar-right" id="mynavbar">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#header">Inicio</a></li>
                                <li><a href="#services">Servicios</a></li>
                                <li><a href="#topsix">Top Six</a></li>
                                <li><a href="#contact">Contactos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!--/ nav-->
            <div class="container text-center">
                <div class="wrapper wow fadeInUp delay-05s" >                    
                    <h1><span class="big text-uppercase">TVxC</span></h1>
                    <h4 class="text-ligh">Con TVXC podrás ver obtener un nuevo servicio de televisión HD<br>Únete a nosotros y disfruta</h4><br>
                    <a class="btn btn-primary btn-lg btn-anis-effect" href="register.php"><span class="btn-text">Registrar ahora</span></a>
                    <a class="btn btn-default btn-lg btn-anis-effect" href="login.php" data-waypoint-to="#section-childs">
                        <span class="btn-text">Ya estoy registrado</span></a>
                    <!--<button type="submit" class="btn btn-submit">Registrar ahora</button>-->
                </div>
            </div>
        </div>
    </header>
    <!--/ header-->
    <!---->
    <section id="cta-1">
        <div class="container">
            <div class="row">
                <div class="cta-info text-center">
                    <h3><span class="dec-tec">“</span>TVxC es un sitio que maneja un conjunto de servicios de canales de televisión, donde usted elije su preferencia.<span class="dec-tec">”</span> </h3>
                </div>
            </div>
        </div>
    </section>
    <!---->
    <!---->
    <section id="services" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 wow fadeInLeft delay-05s">
                    <div class="section-title">
                        <h2 class="head-title">Servicios</h2>
                        <hr class="botm-line">
                        <p class="sec-para">Paquetes de canales para todos.</p>
                    </div>
                </div>
                <?php Services();
                /*<div class="col-md-9">
                    <div class="col-md-6 wow fadeInRight delay-02s">
                        <div class="icon">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="icon-text">
                            <h3 class="txt-tl">Básico</h3>
                            <p class="txt-para">El servicio básico consta de 10 canales por un valor de $30 mensual. </p>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInRight delay-02s">
                        <div class="icon">
                            <i class="fa fa-spinner"></i>
                        </div>
                        <div class="icon-text">
                            <h3 class="txt-tl">Medio</h3>
                            <p class="txt-para">Consta de 40 canales por tan solo $50 mensuales. </p>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInRight delay-04s">
                        <div class="icon">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="icon-text">
                            <h3 class="txt-tl">Alto</h3>
                            <p class="txt-para">Este servicio le oferta 99 canales por un precio de $70 al mes. </p>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInRight delay-04s">
                        <div class="icon">
                            <i class="fa fa-magic"></i> 
                        </div>
                        <div class="icon-text">
                            <h3 class="txt-tl">Lo mejor</h3>
                            <p class="txt-para">Disfrute de más de cien canales pagando solo $80 en el mes. </p>
                        </div>
                    </div>*/?>
                    <div class="col-md-6 wow fadeInRight delay-06s">
                        <div class="icon">
                            <i class="fa fa-sitemap"></i> 
                        </div>
                        <div class="icon-text">
                            <h3 class="txt-tl">Internet</h3>
                            <p class="txt-para">Puede agregar internet a su paquete por solo $12. </p>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInRight delay-06s">
                        <div class="icon">
                            <i class="fa fa-money"></i>
                        </div>
                        <div class="icon-text">
                            <h3 class="txt-tl">Rebajas</h3>
                            <p class="txt-para">Disfrute de las rebajas que TVxC le brinda para las ocasiones más especiales. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---->
    <?php Rebajas(); TopSix(); Contacts(); Footer(); ?>
    <!---->
    <!--contact ends-->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>

    <?php Anime(); ?>
    
  </body>
</html>