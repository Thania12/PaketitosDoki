<?php 
include 'conexion.php';
$id=  ($_POST['id']); 
$nombre =  ($_POST['nombre']);
$estado= ($_POST['Estado_Destino']);
$estado2 = ($_POST['estado']);
$fecha =($_POST['fecha']);

$consulta= $link -> prepare("INSERT INTO misviajes (NombreViajero,EstadoDestino, Fecha_entrega, Estado, ID_NEnvio) 
VALUES (:NombreViajero, :EstadoDestino, :Fecha_entrega, :Estado, :ID_NEnvio)");
$consulta ->bindParam(':NombreViajero',$nombre);
$consulta ->bindParam(':EstadoDestino',$estado);
$consulta->bindParam(':Fecha_entrega',$fecha);
$consulta ->bindParam(':Estado',$estado2);
$consulta ->bindParam(':ID_NEnvio',$id);

$consulta->execute();
header('Location: Viajes.php'); 

?>
