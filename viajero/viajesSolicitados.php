<?php
session_start();
require_once('../bd/conexion.php');

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
                                <li><a class="nav-link" href="misviajes.php">Mis Viajes</a></li>
                                <li><a class="nav-link"
                                        href="loginV.php">Salir</a>
                                </li>
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

                    <div class="col-lg-12 story-gd pl-lg-4">
                        <!--form para registro del viajero-->
                        <!--Todo separado por grupos para el JQuery-->
                        <div class="form-inner-cont">
                            <form class="input-field" id="formulario">
                                <div class="singup">
                                    <div class="title-content text-center">
                                        <div class="bg-white row" style="height: 300px;">
                                            <div class="col-md-6">
                                                <table class="table">
                                                    <th>Usuario</th>
                                                    <th>Destino</th>
                                                    <th>Fecha</th>
                                                    <th>Comentarios</th>

                                                    <?php
													$conexion=mysqli_connect("localhost","root","","dokibase") or
													die("Problemas con la conexión");

													$registros=mysqli_query($conexion,"SELECT ne.ID_NEnvio AS ID,c.Nombre AS Nombre, ne.Estado_Destino AS Destino, ne.Fecha_Envio AS Fecha, ne.Comentario AS Comentario FROM nuevo_envio ne INNER JOIN cliente c ON c.ID_Cliente = ne.ID_Cliente") or 
													die("Problemas en el select:".mysqli_error($conexion));
                                                    while ($reg=mysqli_fetch_array($registros)) {
                                                    echo'
                                                    <tr>
                                                        <td>'.$reg["Nombre"].'</td>
                                                        <td>'.$reg["Destino"].'</td>
                                                        <td>'.$reg["Fecha"].'</td>
                                                        <td>'.$reg["Comentario"].'</td>
                                                        <td><form action="altaMisViajes.php" method="´POST">
                                                            <button name="agrega" class="border-0 font-weight-bold" type="submit" value="'.$reg["ID"].'"
                                                                style="background-color:yellowgreen; color: white;">Agregar Viaje
                                                            </button>
                                                            </form>
                                                        </td>
                                                    </tr>';
                                                    }
                                                    
                                                    mysqli_close($conexion);
													?>

                                                </table>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <img style="width: 400px; height: 300px;" src="highway.jpg" alt="">
                                            </div>

                                        </div>

                                    </div>
                                    <br>

                                    <style>
                                    input[type=button] {
                                        background-color: #3d73de;
                                        color: white;
                                        padding: 5px 10px;
                                        border: none;
                                        border-radius: 10px;
                                        cursor: pointer;
                                        float: right;
                                        background: #;
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

                                    .warnings {
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
                                        <h6> Menú </h6>
                                        <ul>
                                            <li><a href="viajes.php"><span class="fa fa-angle-right mr-2"></span>Elegir Viaje
                                                </a>
                                            </li>
                                            <li><a href="viajesSolicitados.php"><span
                                                        class="fa fa-angle-right mr-2"></span>Viajes solicitados </a>
                                            </li>
                                            <li><a href="misviajes.php"><span class="fa fa-angle-right mr-2"></span>Mis
                                                    viajes </a></li>

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
                            <p>© 2020 Paquetitos Doki. Todos los derechos reservados <a href="https://w3layouts.com">
                                    Bienvenido </a></p>
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
            window.onscroll = function() {
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
$(function() {
    $('.navbar-toggler').click(function() {
        $('body').toggleClass('noscroll');
    })
});
</script>
<!--/scroll-down-JS-->
<!--//pop-up-box-->
<script src="../assets/js/bootstrap.min.js"></script>