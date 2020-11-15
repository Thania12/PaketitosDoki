<?php

    include ('../viajero/conexion.php');

    $estado_origen = ($_POST['Estado_Origen']);
    $estado_destino = ($_POST['Estado_Destino']);
    $fecha_viaje = ($_POST['Fecha_Viaje']);
    $id = ($_POST['ID_Viajero']);
 
    
    $consulta = $link -> prepare("INSERT INTO nuevo_viaje (Estado_Origen, Estado_Destino, Fecha_Viaje,ID_Viajero)
    VALUES (:Estado_Origen, :Estado_Destino, :Fecha_Viaje, :ID_Viajero)");

   $consulta->bindParam(':Estado_Origen',$estado_origen);
   $consulta ->bindParam(':Estado_Destino',$estado_destino);
   $consulta ->bindParam(':Fecha_Viaje',$fecha_viaje);
   $consulta ->bindParam(':ID_Viajero',$id);
   
                
   if($consulta->execute()){
       echo "Viaje Registrado";
       header("Location: ../viajero/misviajes.php");
   }else{
    echo "Error en el registro";
   }
?>
   
