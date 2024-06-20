<html>
    <head>
        <title>SELECTOR DE ESTILO</title>
    </head>
    <body>
        <?php
        if (isset($_COOKIE['estilo'])) {
            $estilo = $_COOKIE['estilo'];
            echo '<link rel="STYLESHEET" href="'.$estilo.'.css"';
        }
        ?>
        <h1>SELECTOR DE ESTILOS</h1>
        <form action="modificarEstilo.php" method="POST">
            Seleccionar estilo de pagina: <br>
            <select name="estilo">
                <option value="verde"> Verde
                <option value="rojo"> Rojo
                <option value="azul"> Azul
            </select>
            <input type="submit" name="submit" value="Actualizar">
        </form>
    </body>
</html>