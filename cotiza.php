<?php

$nombre = ($_POST['nombre']);
$estado_origen = ($_POST['origen']);
$estado_destino = ($_POST['destino']);
$comentario = ($_POST['comentario']);

    $ZCT = 1;
    $ZST = 0;
    $ZNT = 2;
    if($estado_origen== 'Baja California' || 'Baja California Sur' || 'Sonora' || 'Chihuahua' || 'Coahuila' || 'Nuevo Leon' ||
    'Tamaulipas' || 'Sinaloa' || 'Durango' || 'Zacatecas' || 'San Luis Potosi'){
            $origen = 3;
            } elseif($estado_origen == 'Jalisco' || 'Colima' || 'Nayarit' || 'Aguascalientes' || 'Guanajuato' || 'Queretaro' || 'Estado De Mexico' || 'CDMX' || 'Veracruz' || 'Tlaxcala' || 'Puebla') 
            {
             $origen= 2;
            } else{
                $origen = 1;
            }
            if($estado_destino== 'Baja California' || 'Baja California Sur' || 'Sonora' || 'Chihuahua' || 'Coahuila' || 'Nuevo Leon' ||
            'Tamaulipas' || 'Sinaloa' || 'Durango' || 'Zacatecas' || 'San Luis Potosi'){
                    $destino= 3;
                    } elseif($estado_destino == 'Jalisco' || 'Colima' || 'Nayarit' || 'Aguascalientes' || 'Guanajuato' || 'Queretaro' || 'Estado De Mexico' || 'CDMX' || 'Veracruz' || 'Tlaxcala' || 'Puebla') 
                    {
                     $destino = 2;  
                    } else{
                        $destino= 1;
                    }

           if($origen == 1){
               $ZT = $ZNT; 
               } elseif ($origen == 2){
                $ZT = $ZCT;
            }else{
                $ZT = $ZST;
            }

            if($destino == 1){
                $ZT2 =  $ZNT; 
            } elseif($destino == 2){
                $ZT2 = $ZCT;
            } else{
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
        
            echo ('Su cotizacion es:');
            echo $estado_origen ;
            echo $estado_destino;
            echo $precioFinal;

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
                                            <p>  ¡Registrate y  <a href="FormularioUsuario.php"> Confirma tu envio!</a></p>

                                            <br> <br> 