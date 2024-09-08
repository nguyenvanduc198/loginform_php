<?php
$serverName = "localhost";
// $username = "root";
$username = "phpmyadmin";
// $username = "kum";
// $password = "22011994";
$password = "password";
$dbname = "codestar";
$port = "3306";

try {
    $conn = new PDO("mysql:host=$serverName;dbname=$dbname", $username, $password);

    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // set the PDO error mode to exception
    } catch (PDOException $e) {
       echo "Connection failed: " . $e->getMessage();
      }

?>
