<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname= "dokibase3";
try {
    $link= new PDO("mysql:host=$servername;dbname=dokibase3", $username, $password);
    // set the PDO error mode to exception
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  ?>