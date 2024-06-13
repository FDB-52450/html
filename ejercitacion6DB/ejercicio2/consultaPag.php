<html>
    <head>
        <title>Listados completo con PAGINACIÓN</title>
    </head>
    <body>
        <?php
        include("conexion.inc");
        $cantPorPag = 2;
        $pagina = isset ($_GET['pagina']) ? $_GET['pagina'] : null ;
        if (!$pagina) {
            $inicio = 0;
            $pagina = 1;
        } else {
            $inicio = ($pagina - 1) * $cantPorPag;
        }// total de páginas

        $sql = "SELECT * FROM ciudades";
        $resultado = mysqli_query($db, $sql);
        $totalRegistros=mysqli_num_rows($resultado);
        $totalPaginas = ceil($totalRegistros/ $cantPorPag);
        
        echo "Numero de registros encontrados: " . $totalRegistros . "<br>";
        echo "Se muestran paginas de " . $cantPorPag . " registros cada una<br>";
        echo "Mostrando la pagina " . $pagina . " de " . $totalPaginas . "<p>";

        $sql = "SELECT * FROM ciudades"." limit " . $inicio . "," . $cantPorPag;
        $resultado = mysqli_query($db, $sql);
        $totalRegistros=mysqli_num_rows($resultado);

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
            while ($fila = mysqli_fetch_array($resultado)) {
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

            mysqli_free_result($resultado);
            mysqli_close($db);
            ?>
            </td>
            </tr>
            </table>
            <?php
            if ($totalPaginas > 1) {
                for ($i=1;$i<=$totalPaginas;$i++) {
                    if ($pagina == $i)
                        echo $pagina . " ";
                    else
                        echo "<a href='consultaPag.php?pagina=" . $i ."'>" . $i . "</a> ";}}?>
                <p>&nbsp;</p>
            <p>&nbsp;</p>
        <p align="center"><a href="paginaPrincipal.html">Volver al men&uacute; del ABM</a></p>
    </body>
</html>