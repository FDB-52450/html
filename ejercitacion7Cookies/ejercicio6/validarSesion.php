<?php
session_start();

$db = mysqli_connect("localhost", "root") or die ("Problemas de conexión a la base de datos");
mysqli_select_db($db, "base2");

$email = $_POST['email'];

$sql = "SELECT * FROM alumnos WHERE mail='$email'";
$resultado = mysqli_query($db, $sql);
$fila = mysqli_fetch_array($resultado);

if (mysqli_num_rows($resultado) != 0) {
    $_SESSION['alumNombre'] = $fila['nombre'];
}

header("Location: paginaPrincipal.php");
exit;
?>