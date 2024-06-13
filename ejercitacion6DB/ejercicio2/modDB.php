<html>
    <head>
        <title>Modificacion</title>
    </head>
    <body>
        <?php
        include ("conexion.inc");

        $vCiudad = $_POST['ciudad'];
        $vPais = $_POST['pais'];
        $vHabitantes = $_POST['habitantes'];
        $vSuperficie = $_POST['superficie'];

        if (isset($_POST['metro']))
            $vMetro = 1;
        else
            $vMetro = 0;

        $sql = "UPDATE ciudades set pais = '$vPais', habitantes = '$vHabitantes', superficie = '$vSuperficie', 
        tieneMetro = '$vMetro' where ciudad='$vCiudad'";
        mysqli_query($db,$sql) or die (mysqli_error($db));
        echo("Ciudad modificada con exito. <br>");
        echo("<A href='paginaPrincipal.html'>Volver al Menu del ABM</A>");

        mysqli_close($db);
        ?>
    </body>
</html>