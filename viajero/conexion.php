<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname= "dokibase3";
try {
    $link= new PDO("mysql:host=$servername;dbname=dokibase3", $username, $password,
    array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  ?>