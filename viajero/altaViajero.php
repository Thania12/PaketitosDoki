<?php 

include ("conexion.php");

date_default_timezone_set("America/Mexico_City");
   $errores = duplicacion();

    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Edad = $_POST['Edad'];
    $Domicilio = $_POST['Domicilio'];
    $Fecha_registro=date("Y-m-d H:i:s");
    $RFC = $_POST['RFC'];
    //$Calificacion = $_POST['Calificacion'];
    $Telefono = $_POST['Telefono'];
    $Correo = $_POST['Correo'];
    $Contra = $_POST['Contra'];
   
    try{
        
    $link= new PDO("mysql:host=$servername;dbname=bdnegocios", $username, $password);
    // set the PDO error mode to exception
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  
    $consulta = "INSERT INTO viajero (Nombre, Apellido, Domicilio, Fecha_registro, RFC,  Telefono, Correo, Contra) 
    VALUES ('$Nombre', '$Apellido' , '$Domicilio', '$Fecha_registro' , '$RFC' , '$Telefono' , '$Correo', '$Contra')";
  
    $link ->exec($consulta);
    $link -> close();
    $link -> close();
                  } 
                  catch (PDOException $e) {
                      echo $consulta . "<br>" . $e->getMessage();
                    } 

                $conn = null;
?>