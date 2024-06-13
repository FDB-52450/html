<html>
    <head>
        <title>Alta Usuario</title>
    </head>
    <body>
        <?php
        include("conexion.inc");

        $vCiudad = $_POST['ciudad'];
        $vPais = $_POST['pais'];
        $vHabitantes = $_POST['habitantes'];
        $vSuperficie = $_POST['superficie'];

        if (isset($_POST['metro']))
            $vMetro = 1;
        else
            $vMetro = 0;

        $sql = "SELECT Count(ciudad) as cantidad FROM ciudades WHERE ciudad='$vCiudad'";
        $resultado = mysqli_query($db, $sql) or die (mysqli_error($db));;
        $cantUsuarios = mysqli_fetch_assoc($resultado);


        if ($cantUsuarios['cantidad'] != 0){
            echo ("La capital ingresada ya existe. <br>");
            echo ("<A href='paginaPrincipal.html'>VOLVER AL MENU</A>");
        }
        else {
            $sql = "INSERT INTO ciudades (ciudad, pais, habitantes, superficie, tieneMetro)
            values ('$vCiudad', '$vPais', '$vHabitantes', '$vSuperficie', '$vMetro')";
            mysqli_query($db, $sql) or die (mysqli_error($db));
            echo("Datos de capital registrados con exito. <br>");
            echo ("<A href='paginaPrincipal.html'>VOLVER AL MENU</A>");

            mysqli_free_result($resultado);
        }

        mysqli_close($db);
        ?>
    </body>
</html>