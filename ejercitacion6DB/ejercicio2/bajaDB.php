<html>
    <head>
        <title>Baja</title>
    </head>
    <body>
        <?php
        include ("conexion.inc");
        $vCiudad = $_POST['ciudad'];
        $sql = "SELECT * FROM ciudades WHERE ciudad = '$vCiudad'";
        $resultado = mysqli_query($db, $sql);

        if (mysqli_num_rows($resultado) == 0) {
            echo ("Ciudad inexistente. <br>");
            echo ("<A href='formBaja.html'>Continuar</A>");
        } else {
            $sql = "DELETE FROM ciudades WHERE ciudad = '$vCiudad'";
            mysqli_query($db, $sql);
            echo("Ciudad borrada con exito.<br>");
            echo("<A href='paginaPrincipal.html'>Volver al Menu del ABM</A>");
        }

        mysqli_free_result($resultado);
        mysqli_close($db);
        ?>
    </body>
</html>
