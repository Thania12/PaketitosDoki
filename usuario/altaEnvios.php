<?php

include ("conexion.php");

mysqli_query($link,"INSERT INTO nuevo_envio (Estado_Origen, Estado_Destino, Fecha_Envío, Comentario, ID_Cliente) values ('$_POST[origen]','$_POST[destino]','$_POST[fecha]','$_POST[comentarios]',1);");

mysqli_close($link);

header("Location: envios.php");
?>