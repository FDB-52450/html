<html>
    <head>
        <title> CODIGO HTML </title>
    </head>

    <body>
        <h1> ENVIAR CODIGO HTML </h1>
        <?php
        $destinatario = "xx@outlook.com.ar";
        $asunto = "Codigo HTML";

        $headers = "Content-type:text/html;charset=UTF-8"."\r\n";
        $headers .= 'From: <paginaWeb@AM.com>';

        if (!isset($_POST['submit'])) { ?>
            <table>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <tr>
                        <td>Direccion de correo:</td>
                        <td><input type="email" name="email" size="40" required="requiered"> <br></td>
                    </tr>
                    <tr>
                        <td align="right" style="vertical-align: top">Codigo HTML:</td>
                        <td><textarea name="codigoHTML" rows="10" cols="40" required="requiered"></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td align="right"><input type="submit" name="submit" value="ENVIAR"></td>
                    </tr>
                </form>
            </table>           
        <?php       
        } else { 
            $texto = $_POST['codigoHTML'];

            if (mail($destinatario, $asunto, $texto, $headers)) {
                echo "Codigo HTML enviado con exito!";
            } else {
                echo "Ha ocurrido un error, intente de nuevo mas tarde.";
            }
        } ?>
    </body>
</html>