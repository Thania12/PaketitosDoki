
<?php
    
    
    include ('../viajero/conexion.php');
    $comentario = ($_POST['comentario']);
    $calificacion = ($_POST['calificacion']);
    $consulta= $link -> prepare("INSERT INTO opiniones (comentario,calificacion) 
    VALUES (:comentario, :calificacion)");
   $consulta ->bindParam(':comentario',$comentario);
   $consulta ->bindParam(':calificacion',$calificacion);
   $consulta->execute();

   echo "<script> alert ('Gracias por su apoyo');</script>";
   header('Location: Envios.php');
    ?>