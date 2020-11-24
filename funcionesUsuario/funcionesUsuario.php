<?php

function registro(){
    include ('../bd/conexion.php');
    $errores = [];
    $nombre = limpiar($_POST['Nombre']);
    $apellido = limpiar($_POST['Apellido']);
    $edad = limpiar($_POST['Edad']);
       //$dia_actual = date("Y-m-d");
    //$edad_diff= date_diff(date_create($edad), date_create($dia_actual));
    //$edadc = $edad_diff -> format('%y');
    $sexo = limpiar("Sexo");
    $correo = limpiar($_POST['Correo']);
    $contrasena = limpiar($_POST['Contrasena']);
    $passHash = password_hash($contrasena, PASSWORD_BCRYPT);
    $telefono = limpiar($_POST['Telefono']);
    $estado_origen = limpiar($_POST['Estado_Origen']);
 
    password_verify($contrasena, $passHash);
    $consulta = $link -> prepare("INSERT INTO cliente (Nombre, Apellido, Edad, Sexo, Correo, Contrasena, Telefono, Estado_Origen) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?)");
    echo getcwd();
    $consulta -> bind_param("ssssssss", $nombre, $apellido, $edad, $sexo, $correo, $passHash, $telefono, $estado_origen);
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
   function mostrarErrores($errores){
    $resultado= '<div class="alert alert-danger errores"><ul>';
    foreach($errores as $error){
        $resultado.='<li>' . htmlspecialchars($error);
    }
    $resultado .= '</ul></div>';
    return $resultado;
}
function ficha_csrf(){
    $ficha = bin2hex(random_bytes(32));
    return $_SESSION['ficha'] = $ficha;
}
//usada para la ficha creada, con el hash se protege del timing attack
function validar_ficha($ficha){
    if(isset($_SESSION['ficha']) && hash_equals($_SESSION['ficha'], $ficha)){
        unset($_SESSION['ficha']);
        return true;
    }
    return false;
}
?>