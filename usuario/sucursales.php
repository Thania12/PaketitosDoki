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
    <title> Sucursales de Paquetitos Doki </title>
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
        


        <div class="table-bordered">
<table class="table table-light table-bordered" style="text-align:center">  
            <tbody>
            <tr>
            <th width="15%" class="text-center" style="color:red"> Aguascalientes </th>
            <th width="15%" class="text-center" style="color:red"> Baja California </th>
            <th width="15%" class="text-center" style="color:red"> Baja California Sur </th>
            <th width="15%" class="text-center" style="color:red"> Campeche </th>
            <th width="15%" class="text-center" style="color:red"> Chiapas </th>
            <th width="15%" class="text-center"style="color:red"> Chihuahua </th>
            </tr>
            <tr>
            <td width="15%" class="text-center"> Av Aguascalientes Nte 711, Trojes de Alonso, 20116 Aguascalientes, Ags. </td>
            <td width="15%" class="text-center"> Carr. Transpeninsular 763, Valle Dorado, 22890 Ensenada, B.C</td>
            <td width="15%" class="text-center"> 5 de Febrero 1050, Zona Central, 23000 La Paz, B.C.S. </td>
            <td width="15%" class="text-center">  Av, Maestros Campechanos No. 586, Multunchac, 24095 Campeche</td>
			<td width="15%" class="text-center"> Belisario Domínguez 2002, Belisario Domínguez Primera Secc, 30040 Comitán de Domínguez, Chis.</td>
            <td width="15%" class="text-center"> Blvrd Antonio Ortiz Mena 431, Presidentes, 31210 Chihuahua, Chih.</td>
            </tr>
            
            </tbody>
            </table>
    </div>
            <table class="table table-light table-bordered" style="text-align:center">  
            <tbody>
            <tr>
            <th width="15%" class="text-center" style="color:red"> Coahuila de Zaragoza </th>
            <th width="15" class="text-center" style="color:red"> Colima </th>
            <th width="15%" class="text-center" style="color:red"> Durango </th>
            <th width="15%" class="text-center" style="color:red"> Estado de México </th>
            <th width="15%" class="text-center" style="color:red"> Guanajuato </th>
            <th width="15%" class="text-center" style="color:red"> Guerrero </th>
            </tr>
            <tr>
            <td width="15%" class="text-center"> Paseo de los Leones 2980, Fundadores, 26740 Sabinas, Coah. </td>
            <td width="15%" class="text-center"> Av Rey Coliman 333, Centro, 28000 Colima, Col. </td>
            <td width="15%" class="text-center"> Blvrd Francisco Villa SN, Cd Industrial, Fraccionamiento Guadalupe, 34220 Durango, Dgo. </td>
            <td width="15%" class="text-center"> Col, Autopista México Querétaro, Valle de Los Pinos 3011, 54040 Tlalnepantla de Baz, Méx.</td>
			<td width="15%" class="text-center"> Carretera Guanajuato - Juventino Rosas k, m. 5 5, Burocrata, 36250 Guanajuato, Gto.</td>
            <td width="15%" class="text-center"> Av Costera Miguel Alemán 706, Hornos, 39355 Acapulco de Juárez, Gro. </td>
            </tr>
            
            </tbody>
            </table>

            <table class="table table-light table-bordered" style="text-align:center">  
            <tbody>
            <tr>
            <th width="15%" class="text-center" style="color:red"> Hidalgo </th>
            <th width="15%" class="text-center" style="color:red"> Jalisco </th>
            <th width="15%" class="text-center" style="color:red"> Michoacán de Ocampo </th>
            <th width="15%" class="text-center" style="color:red"> Morelos </th>
            <th width="15%" class="text-center" style="color:red"> Nayarit </th>
            <th width="15%" class="text-center" style="color:red"> Nuevo León </th>
            </tr>
            <tr>
            <td width="15%" class="text-center"> Blvrd Felipe Angeles 1521, Ex-hacienda de Coscotitlán, Ex Hacienda de Coscotitlán, 42080 Pachuca de Soto, Hgo. </td>
            <td width="15%" class="text-center"> Av. Plan de San Luis 2060, Lomas del Country, 44610 Guadalajara, Jal. </td>
            <td width="15%" class="text-center"> Av Francisco I. Madero Pte 1613, Gertrudis Bocanegra, 58150 Morelia, Mich. </td>
            <td width="15%" class="text-center"> José María Morelos 35, Chipitlan, 62076 Cuernavaca, Mor. </td>
			<td width="15%" class="text-center"> De Los Insurgentes Pte. S/N, San Juan, 63130 Tepic, Nay.</td>
            <td width="15%" class="text-center"> venida Gonzalitos No.655 Fraccionamiento, Gonzalitos, 64020 Monterrey, N.L. </td>
            </tr>

            </tbody>
            </table>

            <table class="table table-light table-bordered" style="text-align:center">  
            <tbody>
            <tr>
            <th width="15%" class="text-center" style="color:red"> Oaxaca </th>
            <th width="15%" class="text-center" style="color:red"> Puebla </th>
            <th width="15%" class="text-center" style="color:red"> Querétaro </th>
            <th width="15%" class="text-center" style="color:red"> Quintana Roo </th>
            <th width="15%" class="text-center" style="color:red"> San Luis Potosí </th>
            <th width="15%" class="text-center" style="color:red"> Sinaloa </th>
            </tr>
            <tr>
            <td width="15%" class="text-center"> Francisco I. Madero 1008, Santa María del Marquesado, Ex-Marquezado, 68000 Oaxaca de Juárez, Oax</td>
            <td width="15%" class="text-center"> Blvrd Atlixco 4717, Estrellas del Sur, 72190 Puebla, Pue.</td>
            <td width="15%" class="text-center"> Blvd. Bernardo Quintana # 5113, San Pablo, 76130 Santiago de Querétaro, Qro</td>
            <td width="15%" class="text-center"> Luis Donaldo Colosio SM 310, 77560 Cancún, Q.R.</td>
			<td width="15%" class="text-center"> Av Venustiano Carranza 2130, Polanco, Col del Valle, 78220 San Luis, S.L.P.</td>
            <td width="15%" class="text-center"> Blvd. Emiliano Zapata 156 Ote, Guadalupe, 80220 Culiacán Rosales, Sin.</td>
            </tr>

            </tbody>
            </table>
            <table class="table table-light table-bordered" style="text-align:center">  
            <tbody>
            <tr>
            <th width="15%" class="text-center" style="color:red"> Sonora </th>
            <th width="15%" class="text-center" style="color:red"> Tabasco </th>
            <th width="15%" class="text-center" style="color:red"> Tamaulipas </th>
            <th width="15%" class="text-center" style="color:red"> Tlaxcala </th>
            <th width="15%" class="text-center" style="color:red"> Veracruz de Ignacio de la Llave </th>
            <th width="15%" class="text-center" style="color:red"> Yucatán </th>
            <th width="15%" class="text-center" style="color:red"> Zacatecas </th>
            </tr>
            <tr>
            <td width="15%" class="text-center"> 3160 S Pacific Ave, Yuma, AZ 85365, Estados Unidos</td>
            <td width="15%" class="text-center"> Boulevard Adolfo Ruiz Cortines 1304, Periodistas, 86059 Villahermosa, Tab.</td>
            <td width="15%" class="text-center"> Calle Francisco I. Madero 737, Zona Centro, 87000 Cd Victoria, Tamps.</td>
            <td width="15%" class="text-center"> Lat. Av. Puebla - Tlaxcala #132 A, La Loma Xicohtencatl, Colinas del Sur, 90110 Tlaxcala de Xicohténcatl, Tlax.</td>
			<td width="15%" class="text-center"> Av, Av. Ejército Mexicano Ote. 997, Los Pinos, 94297 Boca del Río, Ver.</td>
            <td width="15%" class="text-center"> Carretera Mérida - Progreso Unidad Revolución KM 9.5, Cordemex, 97110 Mérida, Yuc.</td>
            <td width="15%" class="text-center"> Calz. Revolución Mexicana No.1, Lomas del Consuelo, 98614 Guadalupe, Zac.</td>
            </tr>

            </tbody>
            </table>










        
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
