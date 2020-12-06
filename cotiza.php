<?php

$nombre = ($_POST['nombre']);
$estado_origen = ($_POST['origen']);
$estado_destino = ($_POST['destino']);
$comentario = ($_POST['comentario']);
$norte  = array('Baja California', 'Baja California Sur', 'Sonora','Chihuahua', 'Sinaloa','Coahuila', 'Durango', 'Nuevo Leon' );
$centro  = array('Zacatecas','Nayarit','Aguascalientes','San Luis Potosi','Guanajuato','Jalisco', 'Colima','Queretaro', 'Hidalgo', 'Tlaxcala', 'CDMX', 'Michoacan', 'Morelos');
$sur  = array('Guerrero','Puebla','Veracruz','Oaxaca','Tabasco','Chiapas', 'Quintana Roo', 'Campeche','Yucatan');

    
    foreach($centro as $centro1){
        $lev = levenshtein($estado_origen, $centro1);
        if($lev == 0){
            $origen=2;
        }
    }
    foreach($norte as $norte1){
        $lev = levenshtein($estado_origen, $norte1);
        if($lev == 0){
            $origen=3;
        }
    }
    foreach($sur as $sur1){
        $lev = levenshtein($estado_origen, $sur1);
        if($lev == 0){
            $origen=1;
        }
    }


    foreach($centro as $centro1){
        $lev = levenshtein($estado_destino, $centro1);
        if($lev == 0){
            $destino=2;
        }
    }
    foreach($norte as $norte1){
        $lev = levenshtein($estado_destino, $norte1);
        if($lev == 0){
            $destino=3;
        }
    }
    foreach($sur as $sur1){
        $lev = levenshtein($estado_destino, $sur1);
        if($lev == 0){
            $destino=1;
        }
    }
    $ZCT = 1;
    $ZST = 0;
    $ZNT = 2;

    $ZCTO = 1;
    $ZSTO = 0;
    $ZNTO = 2;


            if($origen == 1){
               $ZT = $ZNTO; 
               } elseif ($origen == 2){
                $ZT = $ZCTO;
            }
            if($origen == 3){
                $ZT = $ZSTO;
            }


            if($destino == 1){
                $ZT2 =  $ZNT; 
            } elseif($destino == 2){
                $ZT2 = $ZCT;
            } 
            if($destino == 3){
                $ZT2 = $ZST; 
            }

            $precioTemporal = $ZT - $ZT2;
            if($precioTemporal == 0){
                $precioFinal = 150;
            } elseif($precioTemporal == 1){
                $precioFinal = 200;
            } else{
                $precioFinal = 250;
            }
            echo $destino;
            echo $origen;

?>


<!doctype html>
<html lang="zxx">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Paquetitos Doki </title>
	<!-- Template CSS -->
	<link rel="stylesheet" href="assets/css/style-starter.css">
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

	<!--w3l-header-->
	<header class="w3l-header-nav" style="background-color: #c8d2dd">
		<!--/nav-->
		<nav class="navbar navbar-expand-lg navbar-light px-lg-0 py-0 px-3 stroke">
			<div class="container">
				<h1><a class="navbar-brand"   style="background-color: #c8d2dd"href="index.php">Paquetitos <span> Doki</span></a></h1>
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
								<a class="nav-link" href="index.php">Inicio</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="about.php">Acerca de Nosotros</a>
							</li>
		
							<li class="nav-item">
								<ul>
									<li><a class="nav-link" href="viajero/FormularioViajero.php">Viajero</a></li>
									<li><a class="nav-link" href="usuario/FormularioUsuario.php">Usuario</a></li>
									<li><a class="nav-link" href="loginU.php"> Iniciar sesión </a></li>
                                    <li><a class="nav-link" href="FormularioUsuario.php"> Resgistrarme  </a></li>
								</ul>
							</li>
						</ul>
		</nav>
		<!--//nav-->
	</header>


    <section class="w3l-specification-6">
		<div class="specification-6-mian py-5">
			<div class="container py-lg-4">
				<div class="row story-6-grids text-left">
					<div class="col-lg-5 story-gd">
						<img src="assets/images/presu.jpg" class="img-fluid" alt="/">
					</div>
					<div class="col-lg-7 story-gd pl-lg-4">
						<div class="title-content text-left">
							<h6 class="sub-title">Conozca nuestros precios bajos </h6>
                            <br> <br>
							<h3 class="hny-title"> Su cotizació de envio </h3>
							<br> 
                            <table class="table">
                            <thead>
                            <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col"> Estado de destino</th>
                            <th scope="col">Estado de Origen</th>
                            <th scope="col">Precio </th>
                                </tr>
                                </thead>
                                  <tbody>
                                    <tr>
                                   
                                    <td> <?php  echo $nombre; ?> </td>
                                    <td> <?php echo $estado_destino;  ?> </td>
                                    <td> <?php echo $estado_origen; ?></td>
                                    <td style = "color: red;"> $ <?php echo $precioFinal; ?></td>
                                     </tr>

					                    	</div>
                                            <p>  ¡Registrate y  <a href="usuario/FormularioUsuario.php"> Confirma tu envio!</a></p>

                                            <br> <br> 