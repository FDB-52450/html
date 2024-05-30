<?php 
session_start();

if (isset($_SESSION['visitas'])) {
    $_SESSION['visitas'] += 1;
} else {
   $_SESSION['visitas'] = 1;
}
?>

<html>
    <head>
        <title>CONTADOR DE VISITAS</title>
    </head>
    <body>
        <a href="ejercicio4Test.php">LINK A PAGINA SECUNDARIA</a> <br>
        <?php
        echo "Has visitado el sitio web ".$_SESSION['visitas']." veces.";
        ?>
    </body>
</html>