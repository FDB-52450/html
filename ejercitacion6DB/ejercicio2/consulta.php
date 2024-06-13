<html>
    <head>
        <title> Listados completo </title>
    </head>
    <body>
        <?php
        include("conexion.inc");

        $sql = "SELECT * FROM ciudades";
        $resultado = mysqli_query($db, $sql);
        $totalRegistros = mysqli_num_rows($resultado);

        ?>
        <table border=1>
            <tr>
                <td><b>Ciudad</b></td>
                <td><b>Pais</b></td>
                <td><b>Habitantes</b></td>
                <td><b>Superficie</b></td>
                <td><b>Tiene metro?</b></td>
            </tr>
                <?php
                while ($fila = mysqli_fetch_array($resultado))
                {
                ?>
                <tr>
                    <td><?php echo ($fila['ciudad']); ?></td>
                    <td><?php echo ($fila['pais']); ?></td>
                    <td><?php echo ($fila['habitantes']); ?></td>
                    <td><?php echo ($fila['superficie']); ?></td>
                    <td><?php echo ($fila['tieneMetro']); ?></td>
                </tr>
                <tr>
                <td colspan="5">
                <?php
                }
            // Liberar conjunto de resultados
            mysqli_free_result($resultado);
            // Cerrar la conexion
            mysqli_close($db);
            ?>
            </td>
            </tr>
        </table>
        <p>&nbsp;</p>
        <p align="center"><a href="paginaPrincipal.html">Volver al menu del ABM</a></p>
    </body>
</html>