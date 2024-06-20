<?php
session_start();
if (isset($_POST['usuario']) && isset($_POST['contra'])) {
    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['contra'] = $_POST['contra'];

    header("Location: mostrarDatos.php");
    exit;
}
?>