<?php
session_start();
if (isset($_SESSION['alumNombre'])) {
    echo "<h1> Bienvenido a la pagina principal, ".$_SESSION['alumNombre']."</h1>";
} else {
    echo "<h1> Los datos ingresados son invalidos, intente de nuevo: </h1> <br>
    <a href='iniciarSesion.php'>INICIAR SESION </a>";
}
?>