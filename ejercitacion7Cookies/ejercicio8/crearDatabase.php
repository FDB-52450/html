<?php
$db = mysqli_connect("localhost", "root") or die ("Problemas de conexión a la base de datos");

$result = mysqli_query($db, "CREATE DATABASE IF NOT EXISTS prueba");
mysqli_select_db($db, "buscador");

$query = "CREATE TABLE IF NOT EXISTS buscador (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    )";

$result = mysqli_query($db, $query);

header("Location: iniciarSesion.php");
exit;
?>