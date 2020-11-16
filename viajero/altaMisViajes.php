<?php
$conexion=mysqli_connect("localhost","root","","dokibase") or
    die("Problemas con la conexión");


$valor = $_REQUEST["agrega"];

$registros = mysqli_query($conexion,"SELECT ne.ID_NEnvio as ID,c.Nombre as Nombre, ne.Estado_Destino as Destino, ne.Fecha_Envio as Fecha, ne.Comentario as Comentario from nuevo_envio ne inner join cliente c on c.ID_Cliente = ne.ID_Cliente where ID = ".$valor.";");
//mysqli_query($conexion,"delete from nuevo_envio ne inner join cliente c on c.ID_Cliente = ne.ID_Cliente where ne.ID_NEnvio = ".$valor.";");


echo ($registros);

    mysqli_query($conexion, "INSERT INTO mis_viajes(ID_NViaje, ID_NEnvio, Fecha_Envio, Modo, ID_Admin) values 
                       (1,'.$registros[ID].','.$registros[Fecha].','.$registros[Comentario].',1);")
  or die("Problemas en el select".mysqli_error($conexion));
 

mysqli_close($conexion);

header("Location: misviajes.php");
?>