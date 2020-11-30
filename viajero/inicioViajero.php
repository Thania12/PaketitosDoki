<?php
    session_start(); 
    $conexion=mysqli_connect("localhost","root","","dokibase3");
    $Correo = $_POST['Correo'];
    $Contra= $_POST['Contra'];
    $Contra = hash('sha512', $Contra);
   
    $consulta = mysqli_query($conexion, "SELECT * from viajero where
                            Correo = '$Correo' AND Contra ='$Contra'");
     
    if(mysqli_num_rows($consulta) > 0 ){
          //CONSULTA PARA OBTENER EL ID
     $_SESSION['Correo'] = $datos->Correo;
     $_SESSION['ID_Viajero']= $datos->ID_Viajero;
     $_SESSION['Nombre']= $datos->Nombre;
     header('Location: Viajes.php');
    }else{
         echo '<script> alert("VERIFIQUE LOS DATOS") </script>';
    }
  
 ?>
     <a href="funcionesViajero.php"></a>;
     
    