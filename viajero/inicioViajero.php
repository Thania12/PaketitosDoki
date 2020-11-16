<?php
    session_start(); 
    include ("../bd/conexion.php");
    $Correo = $_POST['Correo'];
    $Contra= $_POST['Contra'];
    $consulta = $link->prepare('SELECT * from viajero where
                            Correo = ? and Contra =?;');

    $consulta->execute([$Correo, $Contra]);
    $datos = $consulta->fetch(PDO::FETCH_OBJ);
    
    if($datos == FALSE ){
        header('Location: loginV.php');
    }elseif($consulta->rowCount()==1){
        //CONSULTA PARA OBTENER EL ID
     $_SESSION['Correo'] = $datos->Correo;
     $_SESSION['ID_Viajero']= $datos->ID_Viajero;
     $_SESSION['Nombre']= $datos->Nombre;
     header('Location: Viajes.php');
    }
 ?>
     <a href="funcionesViajero.php"></a>;
