<?php
if (isset($_POST['submit'])) {
    $estilo = $_POST['estilo'];
    setcookie("estilo", $estilo);
}

header("Location: paginaPrincipal.php");
exit;
?>