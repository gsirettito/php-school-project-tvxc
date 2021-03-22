<?php require("library.php"); 
    session_start();
    if(!isset($_SESSION) || !isset($_SESSION["guser"]) || (isset($_SESSION["glevel"]) && !$_SESSION["glevel"] == 9))
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

    <script type="text/javascript">
        function Sel(){
            var d=document.forms["addedit"];
            var edit ="addservice.php?do=" + d.ofert.value;
            window.location.replace(edit);
        }
    </script>

  </head>
  <body>
    <!--header-->
    <?php MinHeader("admin"); ?>
    <!--/ header-->
    <!---->
    <section id="form" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 wow fadeInLeft delay-05s">
                    <div class="section-title">
                        <h2 class="head-title">Servicos</h2>
                        <hr class="botm-line">
                        <p class="sec-para">Aquí puedes modificar o agregar nuevos servicios. No puedes dejar campos vacíos.</p>
                    </div>
                </div>
                <div class="col-md-9">
                    <form name="addedit" action="" method="post" role="form" class="contactForm">
                        <div class="col-md-6 wow fadeInRight delay-06s">
                            <div class="icon-text">
                                <select class="form-control" type="text" placeholder="Ofertas" name="ofert">
                                    <option onclick="Sel()" style="color: rgb(225, 40, 40)">Nuevo</option>
                                    <option onclick="Sel()">Básico</option>
                                    <option onclick="Sel()">Medio</option>
                                    <option onclick="Sel()">Alto</option>
                                    <option onclick="Sel()">Lo mejor</option>
                                </select>                                
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInRight delay-02s">
                            <div class="icon-text">
                                <input class="form-control" type="text" placeholder="Título" name="title" />
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInRight delay-02s">
                            <div class="icon-text">
                                <input class="form-control" type="text" placeholder="Descripción" name="info" />
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInRight delay-04s">
                            <div class="icon-text">
                                <input class="form-control" type="text" placeholder="Nº de Canales" name="nchannel" />
                            </div>
                        </div>      
                        <div class="col-md-6 wow fadeInRight delay-04s">
                            <div class="icon-text">
                                <input class="form-control" type="text" placeholder="Precio" name="cost" />
                            </div>
                        </div>                
                        <div class="col-md-6 wow fadeInRight delay-02s">
                            <div class="icon-text">
                                <button type="submit" class="btn btn-send btn-lg btn-anis-effect">Aceptar</button>
                            </div>
                        </div>
                        <?php 
                            if(isset($_GET['do'])) 
                                echo '<script type="text/javascript"> 
                                    var d=document.forms["addedit"];
                                    d.ofert.value = "'.$_GET["do"].'";
                                    d.title.value = "'.$_GET["do"].'";
                                </script>';
                        ?>                        
                    </form>
                    <?php
                        if(isset($_POST) && $_POST){
                            $title = $_POST['title']; 
                            $info = $_POST["info"];
                            $nchannel = $_POST["nchannel"];
                            $cost = $_POST["cost"];
                            $ofert = $_POST["ofert"];
                            if(!$title || !$info || !$nchannel || !$cost)
                                echo '<div class="col-md-6 wow fadeInRight delay-02s">
                                    <div class="icon-text">
                                    <p style="color: rgb(225, 40, 40)">Debe rellenar todos los campos.</p>
                                    </div>
                                </div>';
                            else if($nchannel - 0 == 0)
                                echo '<div class="col-md-6 wow fadeInRight delay-02s">
                                    <div class="icon-text">
                                    <p style="color: rgb(225, 40, 40)">El número de canales debe representar un entero.</p>
                                    </div>
                                </div>';
                            else if($cost - 0 == 0)
                                echo '<div class="col-md-6 wow fadeInRight delay-02s">
                                    <div class="icon-text">
                                    <p style="color: rgb(225, 40, 40)">El costo debe representar un valor numérico.</p>
                                    </div>
                                </div>';
                            else if($ofert == "Nuevo") AddService($title, $cost, $info, $nchannel, 0);
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