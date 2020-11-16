<?php
    session_start(); 
    include ("conexion.php");
    $Correo = $_POST['Correo'];
    $Contrasena= $_POST['Contrasena'];
    $consulta = $link->prepare('SELECT * from cliente where
                            Correo = ? and Contrasena =?;');

    $consulta->execute([$Correo, $Contrasena]);
    $datos = $consulta->fetch(PDO::FETCH_OBJ);
    
    if($datos == FALSE ){
        header('Location: loginU.php');
    }elseif($consulta->rowCount()==1){
        //CONSULTA PARA OBTENER EL ID
     $_SESSION['Correo'] = $datos->Correo;
     $_SESSION['ID_Cliente']= $datos->ID_Cliente;
     $_SESSION['Nombre']= $datos->Nombre;
     header('Location: Envios.php');
    }
 ?>
     <a href="../funcionesUsuario.php"></a>;
