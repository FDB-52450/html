<?php
$db = mysqli_connect("localhost", "root") or die ("Problemas de conexión a la base de datos");

try {
    mysqli_select_db($db, "capitales");
} catch (Exception $e) {
    $result = mysqli_query($db, "CREATE DATABASE capitales");
    mysqli_select_db($db, "capitales");

    $query = "CREATE TABLE IF NOT EXISTS ciudades (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        ciudad VARCHAR(100),
        pais VARCHAR(100),
        habitantes INT,
        superficie FLOAT,
        tieneMetro INT
        )";
    
    $result = mysqli_query($db, $query);
}
?>