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

$sql = "DELETE FROM admin WHERE Id_admin=".$_GET['id'];

if ($conn->query($sql) === TRUE) {
  header("Location: contacts.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
