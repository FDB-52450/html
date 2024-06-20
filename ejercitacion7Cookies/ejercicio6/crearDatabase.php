<?php
$db = mysqli_connect("localhost", "root") or die ("Problemas de conexión a la base de datos");

$result = mysqli_query($db, "CREATE DATABASE IF NOT EXISTS base2");
mysqli_select_db($db, "base2");

$query = "CREATE TABLE IF NOT EXISTS alumnos (
    codigo INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    mail VARCHAR(100),
    codCurso INT
    )";

$result = mysqli_query($db, $query);

header("Location: iniciarSesion.php");
exit;
?>