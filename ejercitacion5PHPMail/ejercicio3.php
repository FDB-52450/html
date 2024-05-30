<html>
    <head>
        <title> RECOMENDACION </title>
    </head>

    <body>
        <h1> RECOMIENDA ESTA PAGINA A UN AMIGO! </h1>
        <?php
        $linkSitioWeb = "x.com";
        $asunto = "Recomendacion de Sitio Web";
        $texto = "Un amigo te recomendo este sitio web: ".$linkSitioWeb;

        $headers = 'From: <paginaWeb@AM.com>';

        if (!isset($_POST['submit'])) { ?>
            <table>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <tr>
                        <td>Direccion de correo:</td>
                        <td><input type="email" name="email" size="40" required="requiered"> <br></td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top">Mensaje (opcional):</td>
                        <td><textarea name="mensaje" rows="10" cols="40"></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td align="right"><input type="submit" name="submit" value="ENVIAR"></td>
                    </tr>
                </form>
            </table>
        <?php
        } else { 
            $destinatario = $_POST['email'];

            if (!empty($_POST['mensaje'])) {
                $texto = $_POST['mensaje'];
            }

            if (mail($destinatario, $asunto, $texto, $headers)) {
                echo "Email mandado con exito!";
            } else {
                echo "Ha ocurrido un error, intente de nuevo mas tarde.";
            }
        } ?>
    </body>
</html>