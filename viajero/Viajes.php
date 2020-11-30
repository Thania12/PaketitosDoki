<?php

require_once('../bd/conexion.php');
require 'seleccionados.php';

?>


<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script> 
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	
	<link rel="stylesheet" href="../estilo.css">
	<title>Viajes</title>
	<!-- Template CSS -->
	<link rel="stylesheet" href="../assets/css/style-starter.css">
	<!-- Template CSS -->
	<link href="//fonts.googleapis.com/css?family=Noto+Sans+JP:100,300,400,500,700&display=swap" rel="stylesheet">
	<!-- Template CSS -->
</head>
<script>
        (function(w,d,u){
                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://cdn.bitrix24.es/b16024689/crm/site_button/loader_1_0ci0vx.js');
</script>
<body>


	<!---header-->
	<header class="w3l-header-nav">
		<!--/nav-->
		<nav class="navbar navbar-expand-lg navbar-light px-lg-0 py-0 px-3 stroke">
			<div class="container">

				<h1><a class="navbar-brand" href="../index.php"><span>P</span>aquetitos <span>D</span>oki</a></h1>
				<br> <br>
				</span></a></h1>	
						<button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
						aria-label="Toggle navigation">
						<span class="fa icon-expand fa-bars"></span>
						<span class="fa icon-close fa-times"></span>
						<br> <br> <br>
					</button>
					
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">		
							<li class="nav-item">
								<ul>
									<li><a class="nav-link" href="viajesEnvio.php">Viajes Solicitados</a></li>
									<li><a class="nav-link" href="cargados.php">Mis Viajes (<?php  
                               echo (empty($_SESSION['seleccionado']))?0:count($_SESSION['seleccionado']);             
                                ?>)</a></li>
									<li><a class="nav-link"   href="salir.php">Salir</a></li>
								</ul>
							</li>
						</ul>
		</nav>
		<!--//nav-->
	</header>
	
	<section class="w3l-specification-6">
		<div class="specification-6-mian py-5">
			<div class="container py-lg-4">
			
				<div class="row story-4-grids text-left">
					
					<div class="col-lg-7 story-gd pl-lg-4">
							<!--form para registro del viajero-->
								<!--Todo separado por grupos para el JQuery-->
						<div class="form-inner-cont">
				  <?php  
				  
				  $consulta = $link->prepare('SELECT * from cliente');
				  $datos = $consulta->fetch(PDO::FETCH_OBJ);
				  $_SESSION['Correo'];
				  $_SESSION['ID_Viajero'];
				  $_SESSION['Nombre'];
				 
				 
				 ?>
							<form  class="input-field" action="../funciones/funcionesViajero.php" method= "POST" id="formulario">
							  <div class="singup"> 
								<div class="title-content text-center">
								<h2><a> ¡Hola! <?php echo $_SESSION['Nombre']?> </a></h2>
	</br> </br>
									<h4 class="sub-title"> Registra tu nuevo viaje </h4>
									
								</div>
								<div class="d-grid align-form-map mt-lg-5 mt-4">
										<!-- Grupo Nombre con validacion --> 
											<div class="formulario__grupo" id="grupo__Nombre">
											<label for="Nombre" class="formulario__label"> Seleccionar Destino</label>
											<div class="">
											<select name="Estado_Destino" id="Estado_Destino" class="form-control" style="height: 60px; font-size:14px; line-height: 1.5">
											<option value ="Aguascalientes"> Aguascalientes </option>
											<option value ="Baja California"> Baja California </option>
											<option value ="Baja California Sur "> Baja California Sur </option>
											<option value ="Campeche"> Campeche </option>
											<option value ="CDMX"> CDMX </option>
											<option value ="Chihuahua"> Chihuahua </option>
											<option value ="Chiapas"> Chiapas </option>
											<option value ="Coahuila de Zaragoza"> Coahuila de Zaragoza </option>
											<option value ="Colima"> Colima </option>
											<option value ="Durango"> Durango</option>
											<option value ="Estado De Mexico"> Estado De Mexico </option>
											<option value ="Guanajuato"> Guanajuato </option>
											<option value ="Guerrero"> Guerrero </option>
											<option value ="Hidalgo"> Hidalgo </option>
											<option value ="Jalisco"> Jalisco </option>
											<option value ="Michoacan de Ocampo"> Michoacan de Ocampo </option>
											<option value ="Morelos"> Morelos </option>
											<option value ="Nayarit"> Nayarit </option>
											<option value ="Nuevo Leon"> Nuevo Leon </option>
											<option value ="Oaxaca">Oaxaca </option>
											<option value ="Puebla"> Puebla </option>
											<option value ="Queretaro"> Queretaro </option>
											<option value ="Quintana Roo"> Quintana Roo </option>
											<option value ="San Luis Potosi"> San Luis Potosi </option>
											<option value ="Sinaloa"> Sinaloa </option>
											<option value ="Sonora"> Sonora </option>
											<option value ="Tabasco"> Tabasco </option>
											<option value ="Tamaulipas"> Tamaulipas </option>
											<option value ="Tlaxcala"> Tlaxcala </option>
											<option value ="Veracruz"> Veracruz </option>
											<option value ="Yucatan"> Yucatan</option>
											<option value ="Zacatecas"> Zacatecas </option>
                                            </select>
                                            </div>
                                            
                                            </div>

                                            <div class="formulario__grupo" id="grupo__Nombre">
											<label for="Nombre" class="formulario__label"> Seleccionar Origen</label>
											<div class="">
											<select name="Estado_Origen" id="Estado_Origen" class="form-control" style="height: 60px; font-size:14px; line-height: 1.5">
											<option value ="Aguascalientes"> Aguascalientes </option>
											<option value ="Baja California"> Baja California </option>
											<option value ="Baja California Sur "> Baja California Sur </option>
											<option value ="Campeche"> Campeche </option>
											<option value ="CDMX"> CDMX </option>
											<option value ="Chihuahua"> Chihuahua </option>
											<option value ="Chiapas"> Chiapas </option>
											<option value ="Coahuila de Zaragoza"> Coahuila de Zaragoza </option>
											<option value ="Colima"> Colima </option>
											<option value ="Durango"> Durango</option>
											<option value ="Estado De Mexico"> Estado De Mexico </option>
											<option value ="Guanajuato"> Guanajuato </option>
											<option value ="Guerrero"> Guerrero </option>
											<option value ="Hidalgo"> Hidalgo </option>
											<option value ="Jalisco"> Jalisco </option>
											<option value ="Michoacan de Ocampo"> Michoacan de Ocampo </option>
											<option value ="Morelos"> Morelos </option>
											<option value ="Nayarit"> Nayarit </option>
											<option value ="Nuevo Leon"> Nuevo Leon </option>
											<option value ="Oaxaca">Oaxaca </option>
											<option value ="Puebla"> Puebla </option>
											<option value ="Queretaro"> Queretaro </option>
											<option value ="Quintana Roo"> Quintana Roo </option>
											<option value ="San Luis Potosi"> San Luis Potosi </option>
											<option value ="Sinaloa"> Sinaloa </option>
											<option value ="Sonora"> Sonora </option>
											<option value ="Tabasco"> Tabasco </option>
											<option value ="Tamaulipas"> Tamaulipas </option>
											<option value ="Tlaxcala"> Tlaxcala </option>
											<option value ="Veracruz"> Veracruz </option>
											<option value ="Yucatan"> Yucatan</option>
											<option value ="Zacatecas"> Zacatecas </option>
                                            </select>
                                            </div>
                                            
                                            </div>
                                            
                                            

                                            <!-- Grupo Edad con validacion --> 
											 <div class="formulario__grupo" id="grupo__Edad">
											 <label for="Nombre" class="formulario__label"> Fecha  </label>
											 <div class="formulario__grupo-input">
											<input type="date" class="formulario__grupo-input"  id="Fecha_Viaje" name="Fecha_Viaje">
											<i class="formulario__validacion-estado fas fa-times-circle"></i>
											</div>
											</div>

											<?php
											$id_viajero = isset($_SESSION['ID_Viajero']) ? $_SESSION['ID_Viajero'] : '';
											?>
											 <div class="formulario__grupo" id="grupo__id">
											
											 <div class="formulario__grupo-input">
											<input type="text"class="formulario__grupo-input"  id="ID_Viajero" name="ID_Viajero" value="<?php echo $id_viajero; ?>"/>
											<!-- Grupo boton --> 
													  <div class="formulario__grupo" id="formulario__grupo-btn-enviar">
										   <label for="Espacio" class="formulario__label"> </label> 
										   <input type="submit" id="register"  name="register" value="Registrar" /> 
										  <p class="formulario__mensaje-exito" id="formulario__mensaje-exito"> Registroso exitoso </p>
										  </div>
												</div>
												   </div>
												       </div>
                                                        </div>
                                                            </div> 
															</div>
                                            <div class="col-md-4">
                                                
												<div class="col-md-40 content4-right-info">
										 <h4 class="text-center" style="color: #4d9aef;"> Encuentra tu viajero compatible </h4>
											</br> </br><h6> Tus viajes registrados serán información para la administración de Paquetitos Doki, si encontramos coincidencia contigo, nos pondremos en contacto.  </h6>
										</br> <h6 style="color: #10529b"> > Navega en "Viajes Solicitados" y elige el ideal para tí. </h6>
										</br> <h6 style="color: #10529b"> > Navega en "Mis viajes" y conoce los viajes que tienes seleccionados. </h6>
									</br> <img style="width: 400px; height: 300px;" src="mapa.jpg" alt="">
							</div>

						</div>
											</div>
                                            </div>
                                        
											</form>
											
											</form>
			
												<style> 
													input[type=button] {
														 background-color: #3d73de;
														 color: white;
														 padding: 5px 10px;
														 border: none;
														 border-radius: 10px;
														 cursor: pointer;
														 float: right;
														 background: #5e9ad6;
														 text-align: center;
														 
														}
														input[type=submit]:hover {
															background-color: #5e9ad6; 
														}
														input[type=submit] {
															 background-color: #5e9ad6;
															 color: white;
															 padding: 5px 10px;
															 border: none;
															 border-radius: 10px;
															 cursor: pointer;
															 float: right;
															 text-align: center;
															}

															.warnings{
															 width: 200px;
															 text-align: center;
															 margin: auto;
															 color: #B06AB3;
															 padding-top: 20px;
															}
												</style>
	
	</section>

	<!-- //contact-form -->

	<!-- footer-66 -->
	<footer class="w3l-footer-66">
		<section class="footer-inner-main">
			<div class="footer-hny-grids py-5">
				<div class="container py-lg-4">
					<div class="text-txt">
						<div class="right-side">
							<div class="row sub-columns">
								<div class="col-lg-4 col-md-6 sub-one-left pr-lg-4">
									<h2><a class="navbar-brand" href="index.php">Paquetitos<span> Doki </span></a></h2>
									<!-- if logo is image enable this   
									<a class="navbar-brand" href="#index.php">
										<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
									</a> -->
									<p class="pr-lg-4"> Contactanos para más información en nuestras redes sociales </p>
									<div class="columns-2">
										<ul class="social">
											<li><a href="#facebook"><span class="fa fa-facebook"
														aria-hidden="true"></span></a>
											</li>
										
											<li><a href="#twitter"><span class="fa fa-twitter"
														aria-hidden="true"></span></a>
											</li>
										
										</ul>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 sub-one-left mid-footer-gd">
									<div class="sub-two-right">
										<h6>  Menú  </h6>
										<ul>
											<li><a href="viajes.php"><span
														class="fa fa-angle-right mr-2"></span>Viajes </a>
											</li>
											<li><a href="viajesSolicitados.php"><span
														class="fa fa-angle-right mr-2"></span>Viajes solicitados  </a>
											</li>
											<li><a href="misviajes.php"><span
														class="fa fa-angle-right mr-2"></span>Mis viajes </a></li>
											
										</ul>
									</div>
			
								</div>
								
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="below-section">
				<div class="container">
					<div class="copyright-footer">
						<div class="columns text-lg-left">
							<p>© 2020 Paquetitos Doki. Todos los derechos reservados  <a
									href="https://w3layouts.com"> Bienvenido </a></p>
						</div>
						<ul class="columns text-lg-right">
							<li><a href="#"> Politica de Privacidad </a>
							</li>
							<li><a href="about.php"> Acerca de nosotros </a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		<!-- copyright -->
		<!-- move top -->
		<button onclick="topFunction()" id="movetop" title="Go to top">
			<span class="fa fa-arrow-up" aria-hidden="true"></span>
		</button>
		<script>
			// When the user scrolls down 20px from the top of the document, show the button
			window.onscroll = function () {
				scrollFunction()
			};

			function scrollFunction() {
				if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
					document.getElementById("movetop").style.display = "block";
				} else {
					document.getElementById("movetop").style.display = "none";
				}
			}

			// When the user clicks on the button, scroll to the top of the document
			function topFunction() {
				document.body.scrollTop = 0;
				document.documentElement.scrollTop = 0;
			}
		</script>
		<!-- /move top -->

	</section>
</footer>
<!--//footer-66 -->

</body>

</html>
<script src="../assets/js/jquery-3.3.1.min.js"></script>
<!-- disable body scroll which navbar is in active -->

<!--//-->
<script>
$(function () {
	$('.navbar-toggler').click(function () {
		$('body').toggleClass('noscroll');
	})
});
</script>
<!--/scroll-down-JS-->
<!--//pop-up-box-->
<script src="../assets/js/bootstrap.min.js"></script>
<script src="funcionesViajero.php"> </script>