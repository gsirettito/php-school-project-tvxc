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
            var edit ="addrebaja.php?do=" + d.ofert.value;
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
                        <h2 class="head-title">Ofertas</h2>
                        <hr class="botm-line">
                        <p class="sec-para">Aquí puedes modificar o agregar nuevas ofertas. No puedes dejar campos vacíos.</p>
                    </div>
                </div>
                <div class="col-md-9">
                    <form name="addedit" action="" method="post" role="form" class="contactForm">
                        <div class="col-md-6 wow fadeInRight delay-06s">
                            <div class="icon-text">
                                <select class="form-control" type="text" placeholder="Ofertas" name="ofert">
                                    <option onclick="Sel()" style="color: rgb(225, 40, 40)">Nueva</option>
                                    <?php ?>
                                    <option onclick="Sel()">Día de las madres y padres</option>
                                    <option onclick="Sel()">14 de Febrero</option>
                                    <option onclick="Sel()">1ro de Mayo</option>
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
                                <input class="form-control" type="date" placeholder="Fecha de Inicio [01/01/2017]" name="idate" />
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInRight delay-04s">
                            <div class="icon-text">
                                <input class="form-control" type="date" placeholder="Fecha de Fin [01/01/2017]" name="fdate" />
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInRight delay-04s">
                            <div class="icon-text">
                                <input class="form-control" type="text" placeholder="Descuento [%]" name="desc" />
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
                            $idate = $_POST["idate"];
                            $fdate = $_POST["fdate"];
                            $desc = $_POST["desc"];
                            if(!$title || !$info || !$idate || !$fdate || !$desc)
                                echo '<div class="col-md-6 wow fadeInRight delay-02s">
                                    <div class="icon-text">
                                    <p style="color: rgb(225, 40, 40)">Debe rellenar todos los campos.</p>
                                    </div>
                                </div>';
                            else if($desc - 0 == 0)
                                echo '<div class="col-md-6 wow fadeInRight delay-02s">
                                    <div class="icon-text">
                                    <p style="color: rgb(225, 40, 40)">El descuento debe representar un porciento.</p>
                                    </div>
                                </div>';
                            else AddRebaja($title, $desc, $description, $idate, $fdate);
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