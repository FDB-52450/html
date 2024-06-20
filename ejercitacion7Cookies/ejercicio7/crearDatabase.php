<?php
$db = mysqli_connect("localhost", "root") or die ("Problemas de conexión a la base de datos");

$result = mysqli_query($db, "CREATE DATABASE IF NOT EXISTS compras");
mysqli_select_db($db, "compras");

$query = "CREATE TABLE IF NOT EXISTS catalogo (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    producto VARCHAR(100),
    precio DECIMAL(9,2)
    )";

$result = mysqli_query($db, $query);

header("Location: iniciarSesion.php");
exit;
?>