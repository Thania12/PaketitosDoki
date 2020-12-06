<?php
session_start();
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
    <title>Mis Envios</title>
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
                <h1><a class="navbar-brand" stylr="color:  #5e9ad6" href="Envios.php"> Mis Envios <span>
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
                        <li class="nav-item">
                            <ul>
                                <li><a class="nav-link" href="Envios.php"> Nuevo Envio </a></li>
                                <li><a class="nav-link"
                                        href="salir.php"> Cerrar Sesión </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
        </nav>
        <!--//nav-->
    </header>
    <div class="title-content text-left">
        <br> <br>
									
	</div>
		<nav id="breadcrumbs" class="breadcrumbs">
			<div class="container page-wrapper">
				<a href="../index.php"> Inicio </a> » <span class="breadcrumb_last" aria-current="page">Contacto </span>
			</div>
		</nav>
		<br>

             <?php
			$conexion=mysqli_connect("localhost","root","","dokibase3") or
			die("Problemas con la conexión");
            $id_cliente = isset($_SESSION['ID_Cliente']) ? $_SESSION['ID_Cliente'] : '';
			//Aqui se le tiene que agregar el ID del usuario logueado en un where
			$registros=mysqli_query($conexion,"SELECT * from nuevoenvio  WHERE ID_Cliente = $id_cliente AND Estado ='aprobado' OR Estado='camino' OR Estado='entregado'") or 
			die("Problemas en el select:".mysqli_error($conexion));

			
			while ($reg=mysqli_fetch_array($registros))
			{
                if($reg['Estado']=='entregado'){
                    echo '<h6 style="text-center"> El paquete esta entregado en la sucursal de su Estado Destino,  Consulte: <a href="sucursales.php"> Dirección de sucursales </a> </h6>';
                 } else{
                    echo '<h6 style="text-center"> Cuando el estado de su paquete este Entregado, Consulte: <a href="sucursales.php"> Dirección de sucursales </a> </h6>';
                 }
            echo '
            <table class="table table-light table-bordered" style="center">  
            <tbody>
            <tr>
            <th width="10%" class="text-center" style="color:red"> Clave de Envio </th>
            <th width="10%" class="text-center"> Origen </th>
            <th width="10%" class="text-center"> Destino </th>
            <th width="10%" class="text-center"> Fecha </th>
            <th width="10%" class="text-center"> Precio </th>
            <th width="15%" class="text-center"> Estado de mi Envio </th>
            </tr>
            <tr>
            <td width="10%" class="text-center">'.$reg['ID_NEnvio'].'</td>
            <td width="10%" class="text-center">'.$reg['Estado_Origen'].'</td>
            <td width="10%" class="text-center">'.$reg['Estado_Destino'].'</td>
            <td width="10%" class="text-center">'.$reg['Fecha_Envio'].'</td>
			<td width="10%" class="text-center">'.$reg['Precio_final'].'</td>
            <td width="15%" class="text-center" style="color:red">'.$reg['Estado'].'</td>>
            </tr>
            
            </tbody>
            </table>
            </div>';
			}
		     
			mysqli_close($conexion);
            ?>
          

</br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> 

    <!-- //contact-form -->

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
