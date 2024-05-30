<html>
    <head>
        <title> CONTACTO </title>
    </head>

    <body>
        <h1> SECCION DE CONSULTAS </h1>
        <?php
        $destinatario = "ownerPagina@xx.com.ar";
        $asunto = "Consulta sobre sitio web";

        if (!isset($_POST['submit'])) { ?>
            <table>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <tr>
                        <td>Direccion de correo:</td>
                        <td><input type="email" name="email" size="40" required="requiered"> <br></td>
                    </tr>
                    <tr>
                        <td align="right" style="vertical-align: top">Consulta:</td>
                        <td><textarea name="consultaSitio" rows="10" cols="40" required="requiered"></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td align="right"><input type="submit" name="submit" value="ENVIAR"></td>
                    </tr>
                </form>
            </table>           
        <?php       
        } else { 
            $texto = $_POST['consultaSitio'];
            $headers = 'From: <'.$_POST['email'].'>';

            if (mail($destinatario, $asunto, $texto, $headers)) {
                echo "Codigo HTML enviado con exito!";
            } else {
                echo "Ha ocurrido un error, intente de nuevo mas tarde.";
            }
        } ?>
    </body>
</html>