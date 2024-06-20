<html>
    <head>
        <title>INGRESO DE USUARIO</title>
    </head>
    <body>
        <?php
        if (isset($_POST['submit'])) {
            $usuario = $_POST['usuario'];
            setcookie("nombreUsuario", $usuario, time() + 60);
            $_COOKIE['nombreUsuario'] = $usuario;
        }
        if (isset($_COOKIE["nombreUsuario"])) 
            echo "<h1> Ultimo usuario registrado: ".$_COOKIE['nombreUsuario']."</h1>"; 
        ?>
        <form action="" method="post" name="registroUsuario">
            <table>
                <tr>
                    <td>USUARIO:</td>
                    <td><input type="text" name="usuario"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="AGREGAR"></td>
                </tr>
            </table>
        </form>
    </body>
</html>