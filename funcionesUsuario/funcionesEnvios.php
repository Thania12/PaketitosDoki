<?php

    include ('../viajero/conexion.php');

    $estado_origen = ($_POST['Estado_Origen']);
    $estado_destino = ($_POST['Estado_Destino']);
    $fecha_envio = ($_POST['Fecha_Envio']);
    $comentario = ($_POST['Comentario']);
    $id = ($_POST['ID_Cliente']);
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
			

    $consulta = $link -> prepare("INSERT INTO nuevo_envio ( Estado_Origen, Estado_Destino, Fecha_Envio, Comentario, ID_Cliente, Precio_final)
    VALUES (:Estado_Origen, :Estado_Destino, :Fecha_Envio, :Comentario, :ID_Cliente, '$precioFinal')");

$consulta->bindParam(':Estado_Origen',$estado_origen);
  $consulta ->bindParam(':Estado_Destino',$estado_destino);
   $consulta ->bindParam(':Fecha_Envio',$fecha_envio);
   $consulta -> bindParam(':Comentario',$comentario);
   $consulta ->bindParam(':ID_Cliente',$id);
                
   if($consulta->execute()){
       echo "Envio Registrado";
       header("Location: ../usuario/Envios.php");
   }else{
    echo "Error en la creacion del nuevo envio, intente despues";
   }
?>
   