<?php

    include ('../viajero/conexion.php');

    $estado_origen = ($_POST['Estado_Origen']);
    $estado_destino = ($_POST['Estado_Destino']);
    $fecha_envio = ($_POST['Fecha_Envio']);
    $comentario = ($_POST['Comentario']);
    $id = ($_POST['ID_Cliente']);
 
    
    $consulta = $link -> prepare("INSERT INTO nuevo_envio ( Estado_Origen, Estado_Destino, Fecha_Envio, Comentario, ID_Cliente)
    VALUES (:Estado_Origen, :Estado_Destino, :Fecha_Envio, :Comentario, :ID_Cliente)");

$consulta->bindParam(':Estado_Origen',$estado_origen);
  $consulta ->bindParam(':Estado_Destino',$estado_destino);
   $consulta ->bindParam(':Fecha_Envio',$fecha_envio);
   $consulta -> bindParam(':Comentario',$comentario);
   $consulta ->bindParam(':ID_Cliente',$id);
   
                
   if($consulta->execute()){
       echo "Envio Registrado";
       header("Location: ../usuario/Envios.php");
   }else{
    echo "Error en el registro";
   }
?>
   