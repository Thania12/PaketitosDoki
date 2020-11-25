<?php
$conexion=mysqli_connect("localhost","root","","dokibase") or
    die("Problemas con la conexión");


$valor = $_REQUEST["agrega"];

$registros = mysqli_query($conexion,"SELECT ne.ID_NEnvio as ID,c.Nombre as Nombre, ne.Estado_Destino as Destino, ne.Fecha_Envio as Fecha, ne.Comentario as Comentario from nuevo_envio ne inner join cliente c on c.ID_Cliente = ne.ID_Cliente where ID = ".$valor.";");
//mysqli_query($conexion,"delete from nuevo_envio ne inner join cliente c on c.ID_Cliente = ne.ID_Cliente where ne.ID_NEnvio = ".$valor.";");


print_r($registros);
//mysqli_query($conexion, "INSERT INTO mis_viajes(ID_NEnvio, Estado_origen, Estado_destino, Fecha_Envio, Comentario, Precio_final ) values 
  //              ('.$registros[ID].','.$registros[Nombre].','.$registros[Origen].','.$registros[Destino].','.$registros[Fecha].','.$registros[Precio].');")
 
// or die("Problemas en el select".mysqli_error($conexion));
 

mysqli_close($conexion);

header("Location: misviajes.php");
?>