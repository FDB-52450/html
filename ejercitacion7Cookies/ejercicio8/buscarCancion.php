<html>
    <head>
        <title>BUSCAR CANCION</title>
    </head>
    <body>
        <h1>BUSCADOR DE CANCIONES</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nombre de cancion:</td>
                    <td><input type="text" name="cancion"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="AGREGAR"></td>
                </tr> 
            </table>
        </form>
    </body>

    <?php
    if (isset($_POST['submit'])) {
        $db = mysqli_connect("localhost", "root") or die ("Problemas de conexión a la base de datos");
        mysqli_select_db($db, "prueba");

        $nomCancion = $_POST['cancion'];

        $sql = "SELECT * FROM canciones WHERE nombre LIKE '%{$nomCancion}%'";
        $resultado = mysqli_query($db, $sql);
        $fila = mysqli_fetch_array($resultado);

        if (mysqli_num_rows($resultado) != 0) {
            echo "Cancion esta en la base de datos!";
        } else {
            echo "Cancion no esta guardada en la base de datos.";
        }
    }
    ?>
</html>