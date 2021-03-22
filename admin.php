<?php require("library.php"); 
    session_start();
    if(!isset($_SESSION) || !isset($_SESSION["guser"]) || (isset($_SESSION["glevel"]) && !$_SESSION["glevel"] == 9))
        header("Location:login.php");
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>TVxC - </title>
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
                            <a href="" class="navbar-brand">TVxC</a>
                        </div>
                        <div class="collapse navbar-collapse navbar-right" id="mynavbar">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#header">Inicio</a></li>
                                <li><a href="#services">Servicios</a></li>
                                <li><a href="#topsix">Top Six</a></li>
                                <li><a href="adminuser.php">Usuarios</a></li>
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
                    <a class="btn btn-primary btn-lg btn-anis-effect" href="admin.php?exit=true"><span class="btn-text">Salir</span></a>
                    <?php
                        if(isset($_GET) && isset($_GET["exit"])=="true"){
                            Logout();
                        }
                    ?>
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
                    <ul class="ppt">
                        <li><h3>Día de las madres y padres</h3><p>Si posees el paquete AAA te ofrecemos una rebaja del 60% para este servicio</p></li>
                        <li><h3>14 de Febrero</h3><p>TVxC te ofrece una rebaja del 50% de tus servicios</p></li>
                        <li><h3>Fin de año</h3><p>Si posees al menos dos paquetes te ofrecemos una rebaja del 50% por toda la semana y si solo posees también te ofrecemos un descuento de 65%</p></li>
                        <li><h3>1ro de Mayo</h3><p>Si posees al menos dos paquetes te ofrecemos una rebaja del 55% por toda la semana</p></li>
                    </ul>
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
                <form name="form1" id="form1" method="put" action="addservice.php" class="form-horizontal">
                    <div class="col-md-9">
                        <?php Services();
                        /*<div class="col-md-6 wow fadeInRight delay-02s">
                            <div class="icon">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <div class="icon-text">
                                <h3 class="txt-tl">Básico</h3>
                                <p class="txt-para">El servicio básico consta de 10 canales por un valor de $30 mensual. </p>
								<a href="addservice.php?do=Básico" class="btn btn-default"><i class="fa fa-edit"></i> Editar</a>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInRight delay-02s">
                            <div class="icon">
                                <i class="fa fa-spinner"></i>
                            </div>
                            <div class="icon-text">
                                <h3 class="txt-tl">Medio</h3>
                                <p class="txt-para">Consta de 40 canales por tan solo $50 mensuales. </p>
                                <a href="addservice.php?do=Medio" class="btn btn-default"><i class="fa fa-edit"></i> Editar</a>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInRight delay-04s">
                            <div class="icon">
                                <i class="fa fa-plus"></i>
                            </div>
                            <div class="icon-text">
                                <h3 class="txt-tl">Alto</h3>
                                <p class="txt-para">Este servicio le oferta 99 canales por un precio de $70 al mes. </p>
                                <a href="addservice.php?do=Alto" class="btn btn-default"><i class="fa fa-edit"></i> Editar</a>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInRight delay-04s">
                            <div class="icon">
                                <i class="fa fa-magic"></i>
                            </div>
                            <div class="icon-text">
                                <h3 class="txt-tl">Lo mejor</h3>
                                <p class="txt-para">Disfrute de más de cien canales pagando solo $80 en el mes. </p>
                                <a href="addservice.php?do=Lo mejor" class="btn btn-default"><i class="fa fa-edit"></i> Editar</a>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInRight delay-06s">
                            <div class="icon">
                                <i class="fa fa-sitemap"></i>
                            </div>
                            <div class="icon-text">
                                <h3 class="txt-tl">Internet</h3>
                                <p class="txt-para">Puede agregar internet a su paquete por solo $12. </p>
                                <a href="addservice.php?do=" class="btn btn-default"><i class="fa fa-edit"></i> Editar</a>
                            </div>
                        </div>*/?>

                        <div class="col-md-9 wow fadeInRight delay-06s">
                            <div class="icon">
                                <i class="fa fa-add"></i>
                            </div>
                            <div class="icon-text">
                                <a href="addservice.php?do=new" class="btn btn-default"><i class="fa fa-plus"></i> Nuevo Servicio</a>
                            </div>
                        </div>

                        <div class="col-md-6 wow fadeInRight delay-06s">
                            <div class="icon">
                                <i class="fa fa-money"></i>
                            </div>
                            <div class="icon-text">
                                <h3 class="txt-tl">Rebajas</h3>
                                <p class="txt-para">Disfrute de las rebajas que TVxC le brinda para las ocasiones más especiales. </p>
                                <a href="addrebaja.php" class="btn btn-default"><i class="fa fa-edit"></i> Editar</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <?php TopSix(); Contacts(); Footer(); ?>
    <!--contact ends-->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>

    <script type="text/javascript">  
        $('.ppt li:gt(0)').hide();  
        $('.ppt li:last').addClass('last');  
          
        var cur = $('.ppt li:first');  
          
        function animate() {  
            cur.fadeOut( 1000 );  
            if ( cur.attr('class') == 'last' )  
                cur = $('.ppt li:first');  
            else  
                cur = cur.next();  
            cur.fadeIn( 1000 );  
        }  
          
        $(function() {  
            setInterval( "animate()", 5000 );  
        });  
    </script>

  </body>
</html>