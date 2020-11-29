<?php 
session_start();
$mensaje="";
if(isset($_POST['btnAccion'])){
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
        $_SESSION['seleccionado'] [0] = $agregado;
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
    }
    $mensaje = print_r($_SESSION, true);
}
?>