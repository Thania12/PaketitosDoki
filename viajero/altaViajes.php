<?php
session_start();
$_SESSION['ID_Viajero'] =$_POST[ID_Viajero];
$conexion=mysqli_connect("localhost","root","","dokibase") or
    die("Problemas con la conexión");

mysqli_query($conexion,"INSERT into nuevo_viaje(Estado_Origen, Estado_Destino, Fecha_Viaje, ID_Viajero) values 
                       ('$_POST[origen]','$_POST[destino]','$_POST[fecha]','$_POST[ID_Viajero]');")
  or die("Problemas en el select".mysqli_error($conexion));



mysqli_close($conexion);

header("Location: viajes.php");
?>