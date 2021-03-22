<?php
	function Contacts(){
		echo '<section class="section-padding wow fadeInUp delay-05s" id="contact">
	        <div class="container">
	            <div class="row white">
	                <div class="col-md-8 col-sm-12">
	                    <div class="section-title">
	                        <h2 class="head-title black">Contactenos</h2>
	                        <hr class="botm-line">
	                        <p class="sec-para black">Envíenos su opinión y sus ideas para compartirlas con todos.</p>
	                    </div>
	                </div>
	                <div class="col-md-12 col-sm-12">
	                    <div class="col-md-4 col-sm-6">
	                        <h3 class="cont-title">Visítenos</h3>
	                        <div class="location-info">
	                            <p class="white"><span aria-hidden="true" class="fa fa-map-marker"></span>Universidad de Oriente sede Mella, Santiago de Cuba, Cuba</p>
	                            <p class="white"><span aria-hidden="true" class="fa fa-phone"></span>Teléfono: 22-721827 & 54-792987</p>
	                            <p class="white"><span aria-hidden="true" class="fa fa-envelope"></span>Correo: <a href="" class="link-dec">guillermo.siret@estudaintes.uo.edu.cu</a> & <a href="" class="link-dec">arles</a></p>
	                        </div>
	                    </div>
	                    <div class="col-md-4">
	                        <div class="contact-icon-container hidden-md hidden-sm hidden-xs">
	                            <span aria-hidden="true" class="fa fa-envelope-o"></span>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>';
    	return true;
	}

	function MinHeader($user){
		echo '<header id="header">
	        <nav class="nav navbar-default navbar-fixed-top">
	                <div class="container">
	                    <div class="col-md-12">
	                        <div class="navbar-header">
	                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false" aria-controls="navbar">
	                            <span class="fa fa-bars"></span>
	                        </button>
	                            <a href="'.$user.'.php" class="navbar-brand">TVxC</a>
	                        </div>
	                    </div>
	                </div>
	            </nav>
	    </header>
		<section id="cta-1">
	        <div class="container">
	            <div class="row">
	                <!--registro-->
	            </div>
	        </div>
	    </section>';
	    return true;
	}	

	function Footer(){
		echo '<footer class="" id="footer">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-7 footer-copyright">
	                    © TVxC - Todos los derechos reservados
	                    <div class="credits">
	                        Diseñado por: <a style="color: #FFD34E" href="mailto:guillermo.siret@estudaintes.uo.edu.cu">Guillermo Siret Tito</a> & <a style="color: #FFD34E" href="mailto:arles.romero@estudaintes.uo.edu.cu">Arles Romero Rodríguez</a></div>
	                </div>
	            </div>
	        </div>
	    </footer>';
	    return true;
	}

	function TopSix(){
		echo '<section class="section-padding wow fadeInUp delay-02s" id="topsix">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-3 col-sm-12">
	                    <div class="section-title">
	                        <h2 class="head-title">Top Six</h2>
	                        <hr class="botm-line">
	                        <p class="sec-para">Los seis servicios más solicitados</p>
	                    </div>
	                </div>
	                <div class="col-md-9 col-sm-12">
	                    <div class="col-md-4 col-sm-6 padding-right-zero">
	                        <div class="hero-land clearfix">
	                            <div class="landing men-land">
	                            	<ul class="tsix1">
			                            <li><img src="img/sport1.jpg" class="img-responsive" alt="slide"></li>
			                            <li><img src="img/sport2.jpg" class="img-responsive" alt="slide"></li>
			                        </ul>
	                                <div class="caption animated fadeInUp"><h1>Deportes</h1><a href=""><i class="fa fa-angle-right"></i></a></div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-4 col-sm-6 padding-right-zero">
	                        <div class="hero-land clearfix">
	                            <div class="landing men-land">
	                            	<ul class="tsix2">
			                            <li><img src="img/music1.jpg" class="img-responsive" alt="slide"></li>
			                            <li><img src="img/music2.jpg" class="img-responsive" alt="slide"></li>
			                            <li><img src="img/music3.jpg" class="img-responsive" alt="slide"></li>
			                            <li><img src="img/music4.jpg" class="img-responsive" alt="slide"></li>
			                            <li><img src="img/music5.jpg" class="img-responsive" alt="slide"></li>
			                        </ul>
	                                <div class="caption animated fadeInUp"><h1>Música</h1><a href=""><i class="fa fa-angle-right"></i></a></div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-4 col-sm-6 padding-right-zero">
	                        <div class="hero-land clearfix">
	                            <div class="landing men-land">
	                            	<ul class="tsix3">
			                            <li><img src="img/animals1.jpg" class="img-responsive" alt="slide"></li>
			                            <li><img src="img/animals2.jpg" class="img-responsive" alt="slide"></li>
			                            <li><img src="img/animals3.jpg" class="img-responsive" alt="slide"></li>
			                            <li><img src="img/animals4.jpg" class="img-responsive" alt="slide"></li>
			                            <li><img src="img/animals5.jpg" class="img-responsive" alt="slide"></li>
			                            <li><img src="img/animals6.jpg" class="img-responsive" alt="slide"></li>
			                        </ul>
	                                <div class="caption animated fadeInUp"><h1>Animales</h1><a href=""><i class="fa fa-angle-right"></i></a></div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-4 col-sm-6 padding-right-zero">
	                        <div class="hero-land clearfix">
	                            <div class="landing men-land">
	                            	<ul class="tsix4">
			                            <li><img src="img/ciencia1.jpg" class="img-responsive" alt="slide"></li>
			                            <li><img src="img/ciencia2.jpg" class="img-responsive" alt="slide"></li>
			                            <li><img src="img/ciencia3.jpg" class="img-responsive" alt="slide"></li>
			                            <li><img src="img/ciencia4.jpg" class="img-responsive" alt="slide"></li>
			                            <li><img src="img/ciencia5.jpg" class="img-responsive" alt="slide"></li>
			                        </ul>
	                                <div class="caption animated fadeInUp"><h1>Ciencia y tecnología</h1><a href=""><i class="fa fa-angle-right"></i></a></div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-4 col-sm-6 padding-right-zero">
	                        <div class="hero-land clearfix">
	                            <div class="landing men-land">
	                            	<ul class="tsix5">
			                            <li><img src="img/cocina1.jpg" class="img-responsive" alt="slide"></li>
			                            <li><img src="img/cocina2.jpg" class="img-responsive" alt="slide"></li>
			                            <li><img src="img/cocina3.jpg" class="img-responsive" alt="slide"></li>
			                        </ul>
	                                <div class="caption animated fadeInUp"><h1>Cocina</h1><a href=""><i class="fa fa-angle-right"></i></a></div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-4 col-sm-6 padding-right-zero">
	                        <div class="hero-land clearfix">
	                            <div class="landing men-land">
	                            	<ul class="tsix6">
			                            <li><img src="img/cine1.jpg" class="img-responsive" alt="slide"></li>
			                            <li><img src="img/cine2.jpg" class="img-responsive" alt="slide"></li>
			                            <li><img src="img/cine3.jpg" class="img-responsive" alt="slide"></li>
			                            <li><img src="img/cine4.jpg" class="img-responsive" alt="slide"></li>
			                            <li><img src="img/cine5.jpg" class="img-responsive" alt="slide"></li>
			                            <li><img src="img/cine6.jpg" class="img-responsive" alt="slide"></li>
			                        </ul>
	                                <div class="caption animated fadeInUp"><h1>Cine</h1><a href=""><i class="fa fa-angle-right"></i></a></div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>';
		return true;
	}

	function Rebajas(){
		echo '<section class="section-padding parallax bg-image-2 section wow fadeIn delay-08s" id="cta-2">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-8">
	                    <div class="cta-txt">
	                        <ul class="ppt">
	                            <li><h3>Día de las madres y padres</h3><p>Si posees el paquete AAA te ofrecemos una rebaja del 60% para este servicio</p></li>
	                            <li><h3>14 de Febrero</h3><p>TVxC te ofrece una rebaja del 50% de tus servicios</p></li>
	                            <li><h3>Fin de año</h3><p>Si posees al menos dos paquetes te ofrecemos una rebaja del 50% por toda la semana y si solo posees también te ofrecemos un descuento de 65%</p></li>
	                            <li><h3>1ro de Mayo</h3><p>Si posees al menos dos paquetes te ofrecemos una rebaja del 55% por toda la semana</p></li>
	                        </ul>
	                    </div>
	                </div>
	                <div class="col-md-4 text-center">
	                    <a class="btn btn-accept btn-lg btn-anis-effect" href="register.php" data-waypoint-to="#section-childs">Regístrate ahora</a>
	                </div>
	            </div>
	        </div>
	    </section>';
		return true;
	}

	function Anime(){
		echo '<script type="text/javascript">  
	        $(".ppt li:gt(0)").hide();  
	        $(".ppt li:last").addClass("last");

	        $(".tsix1 li:gt(0)").hide();  
	        $(".tsix1 li:last").addClass("last");  

	        $(".tsix2 li:gt(0)").hide();  
	        $(".tsix2 li:last").addClass("last");  

	        $(".tsix3 li:gt(0)").hide();  
	        $(".tsix3 li:last").addClass("last");  

	        $(".tsix4 li:gt(0)").hide();  
	        $(".tsix4 li:last").addClass("last");  

	        $(".tsix5 li:gt(0)").hide();  
	        $(".tsix5 li:last").addClass("last");  

	        $(".tsix6 li:gt(0)").hide();  
	        $(".tsix6 li:last").addClass("last");  
	          
	        var cur = $(".ppt li:first");  
	        var cur1 = $(".tsix1 li:first");
	        var cur2 = $(".tsix2 li:first");
	        var cur3 = $(".tsix3 li:first");
	        var cur4 = $(".tsix4 li:first");
	        var cur5 = $(".tsix5 li:first");
	        var cur6 = $(".tsix6 li:first");
	          
	        function animate() {  
	            cur.fadeOut( 1000 );  
	            cur1.fadeOut( 1000 ); 
	            cur2.fadeOut( 2000 ); 
	            cur3.fadeOut( 3000 ); 
	            cur4.fadeOut( 4000 ); 
	            cur5.fadeOut( 5000 ); 
	            cur6.fadeOut( 6000 ); 

	            if ( cur.attr("class") == "last" )  
	                cur = $(".ppt li:first");  
	            else  
	                cur = cur.next();  
	            cur.fadeIn( 1000 );  

	            if ( cur1.attr("class") == "last" )  
	                cur1 = $(".tsix1 li:first");  
	            else  
	                cur1 = cur1.next();  
	            cur1.fadeIn( 1000 );

	            if ( cur2.attr("class") == "last" )  
	                cur2 = $(".tsix2 li:first");  
	            else  
	                cur2 = cur2.next();  
	            cur2.fadeIn( 2000 );

	            if ( cur3.attr("class") == "last" )  
	                cur3 = $(".tsix3 li:first");  
	            else  
	                cur3 = cur3.next();  
	            cur3.fadeIn( 3000 );

	            if ( cur4.attr("class") == "last" )  
	                cur4 = $(".tsix4 li:first");  
	            else  
	                cur4 = cur4.next();  
	            cur4.fadeIn( 3000 );

	            if ( cur5.attr("class") == "last" )  
	                cur5 = $(".tsix5 li:first");  
	            else  
	                cur5 = cur5.next();  
	            cur5.fadeIn( 2000 );

	            if ( cur6.attr("class") == "last" )  
	                cur6 = $(".tsix6 li:first");  
	            else  
	                cur6 = cur6.next();  
	            cur6.fadeIn( 1000 );
	        }  
	          
	        $(function() {  
	            setInterval( "animate()", 5000 );  
	        });  
	    </script> ';
	}

	function Search(){
		return true;
	}

	function DBConnect(){
		// old way
		// $lk = mysql_connect('localhost', 'root');
    	// if (!$lk) 
        	// return false;
    	// mysql_select_db('tvxc', $lk);
    	// mysql_set_charset('UTF-8', $lk);

    	// new way
    	return new PDO('mysql:host=localhost;dbname=tvxc;charset=utf8mb4', 'root', '');
	}

	function BDClose(){
		mysql_close();		
	}

	function AddService($name, $cost, $description, $channels, $internet){
		if($db = DBConnect()){
    		$sql = "INSERT INTO `services`(`idSs`, `name`, `cost`, `descript`, `channels`, `internet`) VALUES (null,'$name',$cost,'$description', $channels, $internet)";
        	$result = $db->query($sql);
        	if($result->rowCount()){
        		echo '<div class="col-md-6 wow fadeInRight delay-02s">
                        <div class="icon-text">
                        	<p>Servicio agregado correctamente.</p>
                        </div>
                    </div>';
        		return true;
        	} echo '<div class="col-md-6 wow fadeInRight delay-02s">
                        <div class="icon-text">
                        	<p style="color: rgb(225, 40, 40)">Ha ocurrido un error.</p>
                        </div>
                    </div>';   	
        }
        return false;
	}

	function AddRebaja($name, $desc, $description, $datei, $datef){
		if(DBConnect()){
    		$sql = "INSERT INTO `service`(`idS`, `name`, `desc`, `descript`, `datei`, `datef`) VALUES (null,'$name', $desc,'$description', '$datei', '$datef')";
        	$result = $db->query($sql);
        	if($result){
        		echo "<h3>Rebaja agregada correctamente.</h3>";
        		return true;
        	}        	
        }
        return false;
	}

	function Login(){
		session_start();
		if(!isset($_SESSION)){

			header("Location:index.php");
		}
		if($_POST && $db = DBConnect()){
			$user = $_POST["name"];
			$pass =$_POST["passw"];
			$pass = sha1(md5($pass));
			$sql = "SELECT `name`, `lastname`, `phone`, `user`, `level` FROM `access` INNER JOIN `client` ON access.user = client.email Where user='$user' and password='$pass'";
				echo '<p style="color: rgb(225, 40, 40)">'.$sql.'</p>';
			$result = $db->prepare($sql);
			$result->execute();
			$array = $result->fetch();
			if($array){
				$_SESSION["gname"] = $array["name"];
				$_SESSION["glastname"] = $array["lastname"];
				$_SESSION["guser"] = $array["user"];
				$_SESSION["gphone"] = $array["phone"];
				$_SESSION["glevel"] = $array["level"];
				if($array["level"])
					header("Location:admin.php?$user");
				else header("Location:user.php?$user");
				echo '<p style="color: rgb(225, 40, 40)">No tiene permiso para acceder a esta página.</p>';
			} else {
				echo '<p style="color: rgb(225, 40, 40)">El usuario o la contraseña es incorrecta.</p>';
			}
		} 
	}

	function Logout(){
		if(!isset($_SESSION)){
			header("Location:login.php");
		} else {		
			session_unset();
			session_destroy();
			//DBClose();
			header("Location:login.php");
		}
	}

	function Register(){
	    if(!($db = DBConnect())) return false;

	    if($_POST){
	        $dir = $_POST["adress"];
	        $phone = $_POST["phone"];
	        $name = $_POST["name"];
	        $lastname = $_POST["lastname"];
	        $munc = $_POST["province"];
	        $prov = $_POST["munic"];
	        $user = $_POST["email1"];
	        $email = $_POST["email2"];
	        $pass1 = $_POST["passw1"];
	        $pass2 = $_POST["passw2"];

	        if($name && $lastname && $phone && $dir && $user && $pass1 && $pass2){
	            if($pass1 == $pass2){                                
	                if((int)$phone - 0 != 0){
	                    $sql = "SELECT `user` FROM `access` WHERE user='$user'";
	                    $result = $db->query($sql);
	                    if($result->rowCount()){
	                        echo '<div class="col-md-6 wow fadeInRight delay-02s">
	                                <div class="icon-text">
	                                	<p style="color: rgb(225, 40, 40)">Este correo ya ha sido empleado.</p>
	                                </div>
	                            </div>';
	                    } else {
	                        $sql = "INSERT INTO `client`(`idC`, `name`, `lastname`, `phone`, `adress`, `munc`, `prov`, `email`) VALUES (null,'$name','$lastname','$phone', '$dir', '$munc', '$prov', '$user')";
	                        $result = $db->query($sql);
	                        if($result->rowCount()) {
	                            $pass2 = sha1(md5($pass2));
	                            $sql = "INSERT INTO `access`(`user`, `password`, `level`) VALUES ('$user', '$pass2', 0)";
	                            $result = $db->query($sql);
	                            if($result){
	                                echo '<div class="col-md-6 wow fadeInRight delay-02s">
			                                <div class="icon-text">
			                                	<a href="login.php">Iniciar Sesi&oacute;n</a>
			                                </div>
			                            </div>';
	                                return true;
	                            }
	                            else echo '<div class="col-md-6 wow fadeInRight delay-02s">
			                                <div class="icon-text">
			                            		<p style="color: rgb(225, 40, 40)">Ha ocurrido un error durante su ingreso, por favor intentalo de nuevo.<br></p>
			                            	</div>
			                            </div>';
	                        }else echo '<div class="col-md-6 wow fadeInRight delay-02s">
			                                <div class="icon-text">
			                                	<p style="color: rgb(225, 40, 40)">Ha ocurrido un error durante su ingreso, por favor intentalo de nuevo.<br></p>
			                                </div>
			                            </div>';
	                    }
	                } else echo '<div class="col-md-6 wow fadeInRight delay-02s">
	                                <div class="icon-text">
	                                	<p style="color: rgb(225, 40, 40)">El Teléfono está incorrecto.</p>
	                                </div>
	                            </div>';
	            } else echo '<div class="col-md-6 wow fadeInRight delay-02s">
	                            <div class="icon-text">
	                            	<p style="color: rgb(225, 40, 40)">Las contraseñas deben coincidir, por favor intentalo de nuevo.<br></p>
	                            </div>
                            </div>';
	        } else echo '<div class="col-md-6 wow fadeInRight delay-02s">
                            <div class="icon-text">
                            	<p style="color: rgb(225, 40, 40)">Debe rellenar todos los campos.</p>
                            </div>
                        </div>';
	    }
	    return false;
	}

	function EndAgreement(){
		if($_POST && $db = DBConnect()){
			$user = $_SESSION["guser"];
			$pass = $_POST["passw"];
			$pass = sha1(md5($pass));
			$sql = "SELECT `user` FROM `access` WHERE user='$user' AND password='$pass'";
			$result = $db->query($sql);
			if($result->rowCount()){	
				$sql = "DELETE FROM `client` WHERE email='$user'";
				$result = $db->query($sql);
				if($result){
					$sql = "DELETE FROM `access` WHERE user='$user'";
					$result = $db->query($sql);
					if($result){
						echo '<div class="col-md-6 wow fadeInRight delay-02s">
                                <div class="icon-text">
                                	<p style="color: rgb(225, 40, 40)">Su contarto con esta página haterminado.</p>
                                </div>
                            </div>';
                        $time = 50000;
                        while($time--){}
                       	Logout();
                        header("Location:index.php");
						return true;
					}
				}
			} else echo '<div class="col-md-6 wow fadeInRight delay-02s">
                            <div class="icon-text">
                            	<p style="color: rgb(225, 40, 40)">Contraseña incorrecta.</p>
                            </div>
                        </div>';
		} return false;
	}

	function Services(){
		if($db = DBConnect()){
			$sql = "SELECT `name`, `descript`, `cost`, `channels` FROM `services`";
			$result = $db->prepare($sql);
			$result->execute();
			if($result){
				while ($row = $result->fetch()){
					if(!isset($_SESSION))
						echo '<div class="col-md-6 wow fadeInRight delay-02s">
	                        <div class="icon">
	                            <i class="fa fa-shopping-cart"></i>
	                        </div>
	                        <div class="icon-text">
	                            <h3 class="txt-tl">'.$row[0].'</h3>
	                            <p class="txt-para">'.$row[1].' </p>
                            </div>
                        </div>';
					elseif(isset($_SESSION["guser"]) && isset($_SESSION["glevel"]) && !$_SESSION["glevel"]) {	
						echo '<div class="col-md-6 wow fadeInRight delay-02s">
	                        <div class="icon">
	                            <i class="fa fa-shopping-cart"></i>
	                        </div>
	                        <div class="icon-text">
	                            <h3 class="txt-tl">'.$row[0].'</h3>
	                            <p class="txt-para">'.$row[1].' </p>';				
									if(isset($_GET["b"])){
										$chg = $_GET["b"];
										if($chg)
											echo '<a href="?b=0#services" class="btn btn-default"><i class="fa fa-remove"></i> Retirame</a>';
										else echo '<a href="?b=1#services" class="btn btn-default"><i class="fa fa-shopping-cart"></i> Añadir al carrito</a>';
									}else echo '<a href="?b=1#services" class="btn btn-default"><i class="fa fa-shopping-cart"></i> Añadir al carrito</a>';                        
	                        echo '</div>
	                    </div>';
	                } elseif (isset($_SESSION["guser"]) && isset($_SESSION["glevel"]) && $_SESSION["glevel"] == 9) {
	                	echo '<div class="col-md-6 wow fadeInRight delay-02s">
	                        <div class="icon">
	                            <i class="fa fa-shopping-cart"></i>
	                        </div>
	                        <div class="icon-text">
	                            <h3 class="txt-tl">'.$row[0].'</h3>
	                            <p class="txt-para">'.$row[1].' </p>
	                            <a href="addservice.php?do=Básico" class="btn btn-default"><i class="fa fa-edit"></i> Editar</a>
	                            <a href="?remove='.$row[0].'" class="btn btn-default"><i class="fa fa-remove"></i></a>';
	                            if(isset($_GET["remove"])){
									$chg = $_GET["remove"];
									if(DBConnect()){
										$sql = "SELECT `name` FROM `services` WHERE name='$chg'";
										$result = $db->query($sql);
										if($result->rowCount()){	
											$sql = "DELETE FROM `services` WHERE name='$chg'";
											$result = $db->query($sql);
											if($result){}
										}
									}
								}
                            echo '</div>
                        </div>';
	                }
	            }
			}
		}
	}
?>