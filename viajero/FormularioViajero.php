<?php
session_start();
require_once('../funciones/funciones.php');
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ficha'])) {
   registro();
}
require_once('../bd/conexion.php');

?>

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script> 
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	
	<link rel="stylesheet" href="../estilo.css">
	<title>Paquetitos Doki</title>
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

	<!---HEADER (TODO LO DEL MENU)-->
	<header class="w3l-header-nav" style="background-color: #c8d2dd" >
		<!--/nav-->
		<nav class="navbar navbar-expand-lg navbar-light px-lg-0 py-0 px-3 stroke">
			<div class="container">
				<h1><a class="navbar-brand"  style="background-color: #c8d2dd"href="../index.php"> Paquetitos Doki <span>
				</span></a></h1>
				<!-- if logo is image enable this   
						<a class="navbar-brand" href="#index.php">
							<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
						</a> -->
						<button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
						aria-label="Toggle navigation">
						<span class="fa icon-expand fa-bars"></span>
						<span class="fa icon-close fa-times"></span>
					</button>
	
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="../index.php">Inicio</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="../about.php">Acerca de Nosotros</a>
							</li>
		                <!--MENU DE LOS ENLACES DE ARRIBA-->
							<li class="nav-item">
								<ul>
									<li><a class="nav-link" href="../viajero/FormularioViajero.php">Viajero</a></li>
									<li><a class="nav-link" href="../usuario/FormularioUsuario.php">Usuario</a></li>
									<li><a class="nav-link" href="loginV.php"> Iniciar sesión </a></li>
                                    
								</ul>
							</li>
						</ul>
		</nav>
		<!--//nav-->
	</header>
	<!-- //w3l-header -->
	<!-- /breadcrumbs -->
		<nav id="breadcrumbs" class="breadcrumbs">
			<div class="container page-wrapper">
				<a href="../index.php"> Inicio . </a> » <span class="breadcrumb_last" aria-current="page">Contacto </span>
			</div>
		</nav>
	<!-- //breadcrumbs -->
	<!-- INFORMACION DE LADO IZQUIERDO-->

	<section class="w3l-specification-6">
		<div class="specification-6-mian py-5">
			<div class="container py-lg-4">
			
				<div class="row story-4-grids text-left">
					<div class="col-lg-5 story-gd">
					<div class="title-content text-center">
							<h3 color: #66B2FF> Registrate como viajero </h3>
							
							<br> <br> 
						</div>
						<div class="title-content text-center">
						<img src="../assets/images/v1.jpg" class="img-fluid" alt="/">
						<br>
						<br> <h6 class="hny-title"> Convierte tus destinos en una forma de ganar dinero </h6> </br>
						</div>
						<div class="title-content text-center">
							<div class="columns-2">
							<img src="../assets/images/ruta.jpg" class="img-fluid" alt="/">
							<br>
							<br> <h6 class="hny-title"> Postula tus destinos y consigue más ganancias </h6> </br>							</ul>
						</div>
						</div>
					</div>
					<div class="col-lg-7 story-gd pl-lg-4">
							<!--form para registro del viajero-->
								<!--Todo separado por grupos para el JQuery-->
				        
						<div class="form-inner-cont">
						<!-- AQUI INICIA EL FORM, AQUI VA EL METHOD -->
							<?php if(!empty($errores)){ echo mostrarErrores($errores);}?>
							<form  class="input-field" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method= "POST" id="formulario">
							  <input type="hidden" name="ficha" value="<?php echo ficha_csrf(); ?>">
							 <div class="singup"> 
								<div class="title-content text-center">
									<h6 class="sub-title">Crear Nueva Cuenta de Viajero</h6>
									<h3 class="hny-title"> Comienza a ganar dinero</h3>
								</div>
								<div class="d-grid align-form-map mt-lg-5 mt-4">
										<!-- Grupo Nombre con validacion --> 
											<div class="formulario__grupo" id="grupo__Nombre">
											<div class="formulario__grupo-input">
											<input type="text" class="formulario__grupo-input" placeholder="Nombre(s)" value= "<?php campo('Nombre')?>" id= "Nombre" name="Nombre" required="">										
											</div>
											    </div>

                                      	<!-- Grupo Apellido con validacion --> 
											<div class="formulario__grupo" id="grupo__Apellido">
											<div class="formulario__grupo-input">
											<input type="text" class="formulario__grupo-input" placeholder="Apellido" value= "<?php campo('Apellido')?>" id="Apellido" name="Apellido" required="" >
										    </div>
											 </div>

 
											  <!-- Grupo Domicilio con validacion --> 										
											  <div class="formulario_grupo" id="grupo_Nombre">
											<label for="Nombre" class="formulario__label"> Seleccione su Estado de Origen </label>
											<div class="">
											<select name="Domicilio" id="Domicilio" class="form-control" style="height: 60px; font-size:14px; line-height: 1.5">
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
										    
										    <!-- Grupo RFC con validacion --> 
											<div class="formulario__grupo" id="grupo__RFC">
											<div class="formulario__grupo-input">
											<input type="text" class="formulario__grupo-input" placeholder="RFC" value= "<?php campo('RFC')?>" id="RFC" name="RFC" required="">
											</div>
										    	</div>
											
									       <!-- Grupo Telefono con validacion --> 
											<div class="formulario__grupo" id="grupo__Telefono">
											<div class="formulario__grupo-input">
											<input type="text" class="formulario__grupo-input" placeholder="Teléfono" value= "<?php campo('Telefono')?>" id="Telefono" name= "Telefono" required="" >
											</div>
											   </div>
											
									       <!-- Grupo Correo con validacion --> 
											<div class="formulario__grupo" id="grupo__Correo">
											<div class="formulario__grupo-input">
											<input type="text" class="formulario__grupo-input" placeholder ="correo@correo.com" id="Correo" value= "<?php campo('Correo')?>" class="email" name = "Correo" required="">
											</div>
										    	</div>

											    <!-- Grupo Contra con validacion --> 
											<div class="formulario__grupo" id="grupo__Contra">
											<div class="formulario__grupo-input">
											<input type="password" class="formulario__grupo-input" placeholder="Contraseña" value= "<?php campo('Contra')?>" id="Contra" name = "Contra" required="">
											</div>
											  </div>
											  
											 <!-- Grupo Confirmar contra--> 
											<div class="formulario__grupo" id="grupo__Contra">
											<div class="formulario__grupo-input">
											<input type="password" class="formulario__grupo-input" placeholder="Confirma la contraseña" value= "<?php campo('Contra2')?>"  id="Contra2" name = "Contra2" required="">
											</div>
											  </div>

											 <!-- Grupo Edad con validacion --> 
											 <div class="formulario__grupo" id="grupo__Edad">
											 <div class="formulario__grupo-input">
											 <label for="Nombre" class="formulario__label"> Fecha de Nacimiento </label>
											<input type="date" class="formulario__grupo-input" placeholder="Fecha de nacimiento" value= "<?php campo('Edad')?>" id="Edad" name="Edad" required="">
											</div>
											  </div>

											<!-- Grupo boton --> 
									       <div class="formulario__grupo" id="formulario__grupo-btn-enviar">
										   <label for="Espacio" class="formulario__label"> </label> 
										   <input type="submit" id="register"  name="register" value="Registrar" /> 
										   </div>
									        <p> Aviso de privacidad <a href="../aviso.php"> Consultar </a> </p>
										   <p>       ¿Ya tienes un cuenta?<a href="loginV.php"> Iniciar Sesión</a></p>
											<p class="warnings" id="warnings"></p>   
											         </div>						
											           </div>
											                </div>
											                </div> </div>
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

	<!-- FOOTER DE ABAJO CON LA INFORMACION Y ENLACES DEL SITIO -->

	    <!-- footer-66 -->
    <!-- footer-66 -->
	<footer class="w3l-footer-66">
		<section class="footer-inner-main">
			<div class="footer-hny-grids py-1">
				<div class="container py-lg-3">
					<div class="text-txt">
						<div class="right-side">
							<div class="row sub-columns">
								<div class="col-lg-4 col-md-4 sub-one-left pr-lg-4">
									<h2><a class="navbar-brand" href="../index.php">Paquetitos<span> Doki </span></a></h2>
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
							<li><a href="../aviso.php"> Aviso de Privacidad </a>
							</li>
							<li><a href="../about.php"> Acerca de nosotros </a>
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