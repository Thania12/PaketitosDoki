<?php
$conexion=mysqli_connect("localhost","root","","dokibase") or
    die("Problemas con la conexión");




if(isset($_REQUEST["entregado"]))
$registros = mysqli_query($conexion,"UPDATE nuevo_envio set Comentario = 'Entregado' where ID_NEnvio = ".$_REQUEST["entregado"].";");
if(isset($_REQUEST["camino"]))
$registros = mysqli_query($conexion,"UPDATE nuevo_envio set Comentario = 'En Camino' where ID_NEnvio = ".$_REQUEST["camino"].";");

//mysqli_query($conexion,"delete from nuevo_envio ne inner join cliente c on c.ID_Cliente = ne.ID_Cliente where ne.ID_NEnvio = ".$valor.";");


mysqli_close($conexion);

header("Location: misenvios.php");
?>