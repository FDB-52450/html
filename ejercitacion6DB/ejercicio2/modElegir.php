<html>
    <head>
        <title>Modificacion</title>
    </head>
    <body>
        <?php
        include ("conexion.inc");

        $vCiudad = $_POST['ciudad'];
        $sql = "SELECT * FROM ciudades WHERE ciudad ='$vCiudad'";
        $resultado = mysqli_query($db, $sql) or die (mysqli_error($db));
        $fila = mysqli_fetch_array($resultado);

        if (mysqli_num_rows($resultado) == 0) {
            echo ("Ciudad no registrada. <br>");
            echo ("<A href='formMod.html'>Continuar</A>");
        } else {
        ?>
            <form action="modDB.php" method="POST" name="modElec">
                <table width="356">
                <tr>
                    <td width="103">Ciudad: </td>
                    <td width="243"><input type="text" name="ciudad" value="<?php
                    echo($fila['ciudad']); ?>" readonly="readonly">
                    </td>
                </tr>
                <tr>
                    <td width="103">Pais: </td>
                    <td width="243"> <input type="text" name="pais" size="20" maxlength="40"
                    value="<?php echo($fila['pais']); ?>">
                    </td>
                </tr>
                <tr>
                    <td width="103">Habitantes: </td>
                    <td width="243"> <input type="number" name="habitantes" size="20"
                    value="<?php echo($fila['habitantes']); ?>">
                    </td>
                </tr>
                <tr>
                    <td width="103">Superficie: </td>
                    <td width="243"> <input type="number" name="superficie" size="20" step="0.01"
                    value="<?php echo($fila['superficie']); ?>">
                    </td>
                </tr>
                <tr>
                    <td>Tiene metro?</td>
                    <td><input type="checkbox" name="metro" size="20" 
                    <?php if ($fila['tieneMetro'] == 1) echo "checked='checked'"; ?>> </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"> <input type="SUBMIT" name="Submit"
                    value="Modificar">
                    </td>
                </tr>
                </table>
            </form>
        <?php
        }

        mysqli_free_result($resultado);
        mysqli_close($db);
        ?>
</html>