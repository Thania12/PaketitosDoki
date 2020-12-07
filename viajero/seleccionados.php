<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">

    <link rel="stylesheet" href="../estilo.css">
<?php 
include 'conexion.php';

session_start();
$mensaje="";
if(isset($_POST['btnAccion'])){
    switch($_POST['btnAccion']){
    
        case 'Agregar':
    $id= ($_POST['id']);
    $origen= ($_POST['origen']);
    $destino= ($_POST['destino']);
    $fecha= ($_POST['fecha']);
    $comentario= ($_POST['comentario']);
    $precio= ($_POST['precio']);
    $idc = ($_POST['idc']);

    if(!isset($_SESSION['seleccionado'])){
        $agregado = array(
            'id' => $id,
            'origen' => $origen,
            'destino' => $destino,
            'fecha' => $fecha,
            'comentario' => $comentario,
            'precio' => $precio,
            'idc' => $idc

        );
        //esta linea de session es la importante por que trae los valores
        $_SESSION['seleccionado'] [0] = $agregado;
        $mensaje ="Viaje Seleccionado";
    } else {
        //vamos a validar que el viaje no se duplique
        $idViaje = array_column($_SESSION['seleccionado'], "id");
        if(in_array($id, $idViaje)){
            echo "<script> alert ('El viaje ya fue seleccionado');</script>";
        } else {
        $NumeroViajes = count($_SESSION['seleccionado']);
        $agregado=array(
            'id' => $id,
            'origen' => $origen,
            'destino' => $destino,
            'fecha' => $fecha,
            'comentario' => $comentario,
            'precio' => $precio,
            'idc' => $idc
        );
        $_SESSION['seleccionado'] [$NumeroViajes] = $agregado;
        $mensaje ="Viaje Seleccionado";
    }
    //$mensaje = print_r($_SESSION, true);
}

break;
    case "Eliminar":
        $id= ($_POST['id']);
        foreach($_SESSION['seleccionado'] as $indice=>$agregado){
            if($agregado['id'] == $id){
                unset($_SESSION['seleccionado'][$indice]);
                echo "<script> alert ('Viaje eliminado ...');</script>";

            }
        }
    
    
    break;
    case "camino":
        $id= ($_POST['id']);
        $sentencia = $link->prepare("UPDATE `nuevoenvio` 
     SET `Estado` = 'camino' 
     WHERE `nuevoenvio`.`ID_NEnvio` = '$id'");
     $sentencia->bindParam(":ID_NEnvio" ,$id);
     $sentencia->execute();
    $completado=$sentencia->rowCount();
    break;

    case "entregado":
        $id= ($_POST['id']);
        $sentencia = $link->prepare("UPDATE `nuevoenvio` 
     SET `Estado` = 'entregado' 
     WHERE `nuevoenvio`.`ID_NEnvio` = '$id'");
     $sentencia->bindParam(":ID_NEnvio" ,$id);
     $sentencia->execute();
    $completado=$sentencia->rowCount();

    foreach($_SESSION['seleccionado'] as $indice=>$agregado){
        if($agregado['id'] == $id){
            unset($_SESSION['seleccionado'][$indice]);
            echo "<script> alert ('Complete la información');</script>";

        }
    }

       ?>
        <section class="w3l-specification-6">
		<div class="specification-6-mian py-5">
			<div class="container py-lg-4">
			
				<div class="row story-4-grids text-left">
					
					<div class="col-lg-30 story-gd pl-lg-6">
							<!--form para registro del viajero-->
								<!--Todo separado por grupos para el JQuery-->
						<div class="form-inner-cont">
                                <?php $id= ($_POST['id']); ?>
                                <h3> Complete los siguientes datos: </h3>
                                 <form action="misViajes.php" method="POST">
                                     <input type="hidden" name="id" value="<?php echo $id; ?>" >
                                     <input type="text" name="nombre" placeholder="Nombre de Viajero">
                                     <!-- Grupo Destino con validacion --> 
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
    </br> </br>
                                            <input type="date" name="fecha" placeholder="Fecha de Entrega">
                                            <select name="estado" id="estado" class="form-control" style="height: 60px; font-size:14px; line-height: 1.5">
											<option value ="entregado"> Entregado </option>
                                            <option value ="no_entregado"> No Entregado </option>
                                            </select>
    </br> </br>
                                            <button type="submit" class="btn btn-success" name="Completar" href="misViajes.php"> Aceptar </button>
                                          
    </div> </div> </div> </div> </div> 
 </section>
   
													
    </form>
    
 
    <?php
   
      break;
    }
}

?>