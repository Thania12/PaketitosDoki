<?php

function registro(){
    include ('../bd/conexion.php');
    $errores = [];
    $nombre = limpiar($_POST['Nombre']);
    $apellido = limpiar($_POST['Apellido']);
    $edad = limpiar($_POST['Edad']);
    $sexo = limpiar("Sexo");
    $correo = limpiar($_POST['Correo']);
    $contrasena = limpiar($_POST['Contrasena']);
    $telefono = limpiar($_POST['Telefono']);
    $estado_origen = limpiar($_POST['Estado_Origen']);
   
   


    $consulta = $link -> prepare("INSERT INTO cliente (Nombre, Apellido, Edad, Sexo, Correo, Contrasena, Telefono, Estado_Origen) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?)");
    echo getcwd();
    $consulta -> bind_param("ssisssss", $nombre, $apellido, $edad, $sexo, $correo, $contrasena, $telefono, $estado_origen);
     $consulta -> execute();
     $resultado = $consulta -> affected_rows;
     $consulta -> free_result();
     $consulta -> close();
     $link -> close();

     if($resultado == 1){
         $_SESSION['Nombre'] = $nombre; 
         header('Location: ../usuario/loginU.php');

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
?>