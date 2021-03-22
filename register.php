<?php require("library.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>TVxC - Registro</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="icon" href="img/icon.png" type="image/x-icon">
  </head>
  <body>
    <!--header-->
    <?php MinHeader("index"); ?>
    <!--/ header-->
    <!---->
    <section id="form" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 wow fadeInLeft delay-05s">
                    <div class="section-title">
                        <h2 class="head-title">Registro</h2>
                        <hr class="botm-line">
                        <p class="sec-para">Aquí debes escribir tus datos personales. Debes rellenar todos los campos.</p>
                    </div>
                </div>
                <div class="col-md-9">
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="col-md-6 wow fadeInRight delay-02s">
                            <div class="icon-text">
                                <input class="form-control" type="text" placeholder="Nombre" name="name" />
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInRight delay-02s">
                            <div class="icon-text">
                                <input class="form-control" type="text" placeholder="Apellidos" name="lastname" />
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInRight delay-04s">
                            <div class="icon-text">
                                <input class="form-control" type="text" placeholder="Teléfono" name="phone" />
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInRight delay-04s">
                            <div class="icon-text">
                                <input class="form-control" type="text" placeholder="Direccón" name="adress" />
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInRight delay-06s">
                            <div class="icon-text">
                                <select class="form-control" title="Provincia" name="province">
                                    <option>Pinar del Río</option>
                                    <option>Artemisa</option>
                                    <option>Mayabeque</option>
                                    <option>La Habana</option>
                                    <option>Matanzas</option>
                                    <option>Cienfuegos</option>
                                    <option>Villa Clara</option>
                                    <option>Sancti Spíritus</option>
                                    <option>Ciego de Ávila</option>
                                    <option>Camagüey</option>
                                    <option>Las Tunas</option>
                                    <option>Holguín</option>
                                    <option>Granma</option>
                                    <option>Santiago de Cuba</option>
                                    <option>Guantánamo</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInRight delay-06s">
                            <div class="icon-text">
                                <input class="form-control" type="text" placeholder="Municipio" name="munic" />
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInRight delay-04s">
                            <div class="icon-text">
                                <input class="form-control" type="email" placeholder="Correo" name="email1" />
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInRight delay-04s">
                            <div class="icon-text">
                                <input class="form-control" type="email" placeholder="Confirmar correo" name="email2" />
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInRight delay-02s">
                            <div class="icon-text">
                                <input class="form-control" type="password" placeholder="Contraseña" name="passw1" />
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInRight delay-02s">
                            <div class="icon-text">
                                <input class="form-control" type="password" placeholder="Confirmar contraseña" name="passw2" />
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInRight delay-02s">
                            <div class="icon-text">
                                <select class="form-control" title="Pequete" name="pack">
                                    <option>Básico</option>
                                    <option>Medio</option>
                                    <option>Alto</option>
                                    <option>Lo Mejor</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInRight delay-02s">
                            <div class="icon-text">
                                <input type="checkbox" checked="checked" name="internet"/><span> Internet</span>
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
                            $email1 = $_POST["email1"];
                            $email2 = $_POST["email2"];
                            if($email1 == $email2)
                                Register();
                            else echo '<div class="col-md-6 wow fadeInRight delay-02s">
                                    <div class="icon-text">
                                    <p style="color: rgb(225, 40, 40)">Los correos no coinciden.</p>
                                    </div>
                                </div>';
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