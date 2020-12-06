<?php 
  include 'conexion.php';
  include 'seleccionados.php';
?>

<!Doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">

    <link rel="stylesheet" href="../estilo.css">
    <title>Viajes Solicitados</title>
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
                                <li><a class="nav-link" href="viajes.php"> Nuevo Viaje</a></li>
                                <li><a class="nav-link" href="cargados.php">Mis Viajes (<?php  
                               echo (empty($_SESSION['seleccionado']))?0:count($_SESSION['seleccionado']);             
                                ?>)</a></li>
                                <li><a class="nav-link"
                                        href="salir.php">Cerrar sesión</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
        </nav>
        <!--//nav-->
    </header>
    <div class="title-content text-left">
        <br> <br>
	<h1 class="title" style="border: 5px"> Selecciona el viaje </h1>
									
	</div>
		<nav id="breadcrumbs" class="breadcrumbs">
			<div class="container page-wrapper">
				<a href="../index.php"> Inicio </a> » <span class="breadcrumb_last" aria-current="page">Contacto </span>
			</div>
        </nav>

        <?php if($mensaje!=""){?>
        <div class= "alert alert-success">
            <?php echo $mensaje; ?>
        </div>
        <?php } ?>
        <div class="row" >
            <?php
            $sentencia = $link->prepare("SELECT * FROM `nuevoenvio`WHERE Estado = 'aprobado' OR Estado='camino'");
            $sentencia->execute();
            $listaViajes =$sentencia->fetchAll(PDO::FETCH_ASSOC);
            
           // print_r($listaViajes);

            ?>
            <!-- ESTE ARREGLO MANDA TODO LO DE LA TABLA ENVIOS A $ENVIOS EN DONDE SE
            IMPRIME TODO EN FORMA DE ARREGLO --> 
            <?php foreach($listaViajes as $envios){?>
                 <div class="col-4">
                 <div class="card">
                     <img
                     title="<?php echo $envios['Estado_Origen'];?>"
                     alt="<?php echo $envios['Estado_Destino'];?>"
                     class="card-img-top"
                     src = "<?php echo $envios['imagen'];?>"
                     data-toggle="popover"
                     data-trigger="hover"
                     data-content="<?php echo $envios['Comentario'];?>"
                     >
                     <div class="card-body">
                         <h5> Fecha de envio:  <?php echo $envios['Fecha_Envio'];?>  </h5>
                         <h6 class="card-title" style="color:red;"> De:  <?php echo $envios['Estado_Origen'];?>  a <?php echo $envios['Estado_Destino'];?> </h6>
                         <h5 class="card-title"> $ <?php echo $envios['Precio_final'];?> </h5>
                         <p class="card-text"> <?php echo $envios['Comentario'];?></p>
                         <form action="" method="POST">
                         <input type="hidden" name="id" id="id" value= "<?php echo $envios['ID_NEnvio'];?>">
                         <input type="hidden" name="origen" id="origen" value= "<?php echo $envios['Estado_Origen'];?>">
                         <input type="hidden" name="destino" id="destino" value= "<?php echo $envios['Estado_Destino'];?>">
                         <input type="hidden" name="fecha" id="fecha" value= "<?php echo $envios['Fecha_Envio'];?>">
                         <input type="hidden" name="comentario" id="comentario" value= "<?php echo $envios['Comentario'];?>">
                         <input type="hidden" name="precio" id="precio" value= "<?php echo $envios['Precio_final'];?>">
                         <input type="hidden" name="idc" id="idc" value= "<?php echo $envios['ID_Cliente'];?>">
                         <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit"> 
                         Seleccionar viaje
                         </button>
                         </form>
                     </div>
                    </div>
                 </div>
           <?php }  ?>
         
        </div>
<script> 
    $(function(){
        $('[data-toggle="popover"]').popover()
    
    });
</script>
    <!-- footer-66 -->
    <!-- footer-66 -->
</br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br>
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