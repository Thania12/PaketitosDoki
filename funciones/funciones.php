<?php

function registro(){
    include ('../bd/conexion.php');
    $errores = [];
    $nombre = limpiar($_POST['Nombre']);
    $apellido = limpiar($_POST['Apellido']);
    $domicilio = limpiar($_POST['Domicilio']);
    date_default_timezone_set("America/Mexico_City");
    $fecha_registro = date("Y-m-d H:i:s");
    $rfc = limpiar($_POST['RFC']);
    $telefono = limpiar($_POST['Telefono']);
    $correo = limpiar($_POST['Correo']);
    $contra = limpiar($_POST['Contra']);


    $consulta = $link -> prepare("INSERT INTO viajero (Nombre, Apellido, Domicilio, Fecha_registro,RFC, Telefono, Correo, Contra) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?)");
    $consulta -> bind_param("sssssiss", $nombre, $apellido, $domicilio, $fecha_registro, $rfc, $telefono, $correo, $contra);
     $consulta -> execute();
     $resultado = $consulta -> affected_rows;
     $consulta -> free_result();
     $consulta -> close();
     $link -> close();

     if($resultado == 1){
         $_SESSION['Nombre'] = $nombre; 
         header('Location: loginV.php');

     } else{
         $errores[] = 'Estamos experimentando problemas, no se ha podido registrar. Intente por favor intente más tarde.';
     }

    return $errores;
}
   function limpiar($datos){
       $datos = trim($datos);
       $datos = stripslashes($datos);
       $datos = htmlspecialchars($datos);
       return $datos; 
   }

   function mostrarErrores($errores){
       $resultado= '<div class="alert alert-danger"><ul>';
       foreach($errores as $error){
           $resultado.='<li>' . htmlspecialchars($error) . '<li>';
       }
       $resultado .= '</ul></div>';
       return $resultado;
   }
?>