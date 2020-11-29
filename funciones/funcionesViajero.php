<?php

    include ('../viajero/conexion.php');

    $estado_origen = ($_POST['Estado_Origen']);
    $estado_destino = ($_POST['Estado_Destino']);
    $fecha_viaje = ($_POST['Fecha_Viaje']);
    $id = ($_POST['ID_Viajero']);
 
    
    $consulta = $link -> prepare("INSERT INTO nuevoviaje (ID_Viajero, Estado_Origen, Estado_Destino, Fecha_Viaje)
    VALUES (:ID_Viajero, :Estado_Origen, :Estado_Destino, :Fecha_Viaje)");

   $consulta ->bindParam(':ID_Viajero',$id);
   $consulta->bindParam(':Estado_Origen',$estado_origen);
   $consulta ->bindParam(':Estado_Destino',$estado_destino);
   $consulta ->bindParam(':Fecha_Viaje',$fecha_viaje);
  
   
                
   if($consulta->execute()){
       echo "Viaje Registrado";
       header("Location: ../viajero/viajesEnvio.php");
   }else{
    echo "<script> alert ('Ya tiene un viaje registrado...');</script>";
    echo $id;
   }
?>
   
