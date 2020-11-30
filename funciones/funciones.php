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
    $passHash = hash('sha512', $contra);
    $edad = limpiar($_POST['Edad']);


    $consulta = $link -> prepare("INSERT INTO viajero (Nombre, Apellido, Domicilio, Fecha_registro,RFC, Telefono, Correo, Contra, Edad) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $consulta -> bind_param("sssssssss", $nombre, $apellido, $domicilio, $fecha_registro, $rfc, $telefono, $correo, $passHash, $edad);    
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
   //validar campos vacios, para cada formulario solo se cambiaran en el arreglo campos, los name de los input del formulario
   function validar($campos){
       $errores = [];
       foreach($campos as $nombre => $mostrar){
           if (!isset($_POST[$nombre]) || $_POST[$nombre] == NULL){
               $errores[] = $mostrar . ' Es un campo requerido';
           }
       }
       return $errores;
   } 
   //funcion usada para que cuando en el formulario se marquen errores, no se borren los
   function campo($nombre){
       echo $_POST[$nombre]  ?? '';
   }
?>

