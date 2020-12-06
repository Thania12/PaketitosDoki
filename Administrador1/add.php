<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dokibase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO admin (Nombre, Apellido, Correo, Contraseña, Telefono) VALUES ('".$_POST['nombre']."','".$_POST['apellido']."','".$_POST['correo']."','".$_POST['contraseña']."','".$_POST['telefono']."')";

if ($conn->query($sql) === TRUE) {
  header("Location: contacts.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
