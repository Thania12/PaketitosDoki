<?php
session_start();
require_once('../funcionesUsuario/funcionesUsuario.php');
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ficha'])){
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

	<!---header-->
	<header class="w3l-header-nav" style="background-color: #c8d2dd">
		<!--/nav-->
		<nav class="navbar navbar-expand-lg navbar-light px-lg-0 py-0 px-3 stroke">
			<div class="container">
				<h1><a class="navbar-brand" style="background-color: #c8d2dd" href="../index.php"> Paquetitos Doki <span>
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
		
							<li class="nav-item">
								<ul>
									<li><a class="nav-link" href="../viajero/FormularioViajero.php">Viajero</a></li>
									<li><a class="nav-link" href="../usuario/FormularioUsuario.php">Usuario</a></li>
									<li><a class="nav-link" href="loginU.php"> Iniciar sesión </a></li>
                                    <li><a class="nav-link" href="FormularioUsuario.php"> Resgistrarme  </a></li>
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
				<a href="../index.php"> Inicio </a> » <span class="breadcrumb_last" aria-current="page">Contacto</span>
			</div>
		</nav>
	<!-- //breadcrumbs -->
	<!-- /contact-form -->
</section>
<!-- //feature1 -->
<section class="w3l-specification-6">
	<div class="specification-6-mian py-5">
		<div class="container py-lg-4">
			<div class="row story-6-grids text-left">
				<div class="col-lg-5 story-gd">
					<div class="title-content text-center">
						<h3 class="hny-title"> Bienvenido </h3>
					</div>
					<img src="../assets/images/e1.jpg" class="img-fluid" alt="/">
					<div class="title-content text-center">
						<div class="columns-2">
						<ul> <li><a class="hny-title"> Obten precios justos </a> </li>
						<li> <a class="hny-title"> Enlaza tu envio con un viajero </a> </li>							</ul>
					</div>
					</div>
				</div>
				<div class="col-lg-7 story-gd pl-lg-4">
						<div class="form-inner-cont">
						<!--FORM PARA REGISTRO DE USUARIOS AQUI VA EL METHOD Y ESO-->
						
						<!-- CADA INPUT TIENE UN ID Y NAME-->
						<?php if(!empty($errores)){ echo mostrarErrores($errores);}?>
							<form  class="input-field" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method= "POST" id="formularioUsuario">
							<input type="hidden" name="ficha" value="<?php echo ficha_csrf(); ?>"> 
							<div class="singup"> 
								<div class="title-content text-center">
									<h6 class="sub-title">Crea tu cuenta de Usuario </h6>
									<h3 class="hny-title"> Realiza tus envios </h3>
								</div>
								<div class="d-grid align-form-map mt-lg-5 mt-4">
										<!-- Grupo Nombre con validacion --> 
											<div class="formulario__grupo" id="grupo__Nombre">
											<label for="Nombre" class="formulario__label"> Nombre(s)</label>
								        	<div class="formulario__grupo-input">
											<input type="text" class="formulario__grupo-input" id= "Nombre" name="Nombre" required="">
											</div>
											</div>
											<!-- Grupo Apellido con validacion --> 
											<div class="formulario__grupo" id="grupo__Apellido">
											<label for="Nombre" class="formulario__label"> Apellido </label>
											<div class="formulario__grupo-input">
											<input type="text" class="formulario__grupo-input" id="Apellido" name="Apellido" required="">
										     </div>
											  </div>
											  <!-- Grupo Edad con validacion --> 
											<div class="formulario__grupo" id="grupo__Edad">
											<label for="Nombre" class="formulario__label"> Fecha de nacimiento </label>
											<div class="formulario__grupo-input">
											<input type="date" class="formulario__grupo-input" id="Edad" name="Edad" required="" >
										     </div>
											  </div>
											<!-- Grupo Sexo con validacion --> 
											<div class="formulario__grupo" id="grupo__Sexo">
											<label for="Nombre" class="formulario__label"> Sexo </label>
											<div class="formulario__grupo-input">
											<input type="text"  list="items"class="formulario__grupo-input" id="Sexo" name="Sexo" required="">
											<datalist id="items">
											<option value="Femenino"> Femenino </option>
											<option value="Masculino"> Masculino </option>
											</datalist>
											</div>
								  			</div>
											<!-- Grupo Correo con validacion --> 
											<div class="formulario__grupo" id="grupo__Correo">
											<label for="Nombre" class="formulario__label"> Correo </label>
											<div class="formulario__grupo-input">
											<input type="text" class="formulario__grupo-input" id="Correo" class="email" name = "Correo" required="">
											</div>
											  </div>
											<!-- Grupo Contraseña con validacion --> 
											<div class="formulario__grupo" id="grupo__Contrasena">
											<label for="Nombre" class="formulario__label"> Contraseña </label>
											<div class="formulario__grupo-input">
											<input type="password" class="formulario__grupo-input" id="Contra" name = "Contra" required="">
	 										</div>
											  </div>
											<!-- Grupo Telefono con validacion --> 
											<div class="formulario__grupo" id="grupo__Telefono">
											<label for="Nombre" class="formulario__label"> Telefono  </label>
											<div class="formulario__grupo-input">
											<input type="text" class="formulario__grupo-input"  id="Telefono" name= "Telefono" required="">
										 	</div>
											</div>
									        <!-- Grupo Estado con validacion --> 
											<div class="formulario_grupo" id="grupo_Nombre">
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
										   <!-- Grupo boton --> 
											<div class="formulario__grupo" id="formulario__grupo-btn-enviar">
										   <label for="Espacio" class="formulario__label"> </label> 
										   <input type="submit" id="register"  name="register" value="Registrar" /> 
										   </div>
									
										   <p>       ¿Ya tienes un cuenta?<a href="loginU.php"> Iniciar Sesión</a></p>
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
								<div class="col-lg-4 col-md-6 sub-one-left mid-footer-gd">
									<div class="sub-two-right">
										<h6>  Menú  </h6>
										<ul>
											<li><a href="../index.php"><span
														class="fa fa-angle-right mr-2"></span> Inicio </a>
											</li>
											<li><a href="../about.php"><span
														class="fa fa-angle-right mr-2"></span> Acerca de nosotros </a>
											</li>
											<li><a href="../services.php"><span
														class="fa fa-angle-right mr-2"></span>Servicios </a></li>
											<li><a href="../contact.php"><span
														class="fa fa-angle-right mr-2"></span>Contacto </a></li>
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