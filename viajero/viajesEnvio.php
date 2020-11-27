<?php 
  include 'conexion.php';
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
    <div class="title-content text-left">
        <br> <br>
	<h1 class="title" style="border: 5px"> Selecciona el viaje </h1>
									
	</div>
		<nav id="breadcrumbs" class="breadcrumbs">
			<div class="container page-wrapper">
				<a href="../index.php"> Inicio </a> » <span class="breadcrumb_last" aria-current="page">Contacto </span>
			</div>
        </nav>
        
        <div class="row" >
            <?php
            $sentencia = $link->prepare("SELECT * FROM `nuevo_envio` ");
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
                         <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit"> 
                         Seleccionar viaje
                         </button>
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
</body>
</html>