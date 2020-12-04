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
    }
}

function ocultarEliminar(){
  
}
?>