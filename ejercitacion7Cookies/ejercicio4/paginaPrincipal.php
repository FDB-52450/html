<html>
    <head>
        <title>PERIODICO</title>
    </head>
    <body>
        <?php
        if (!isset($_COOKIE['eco'])) {
            setcookie("eco", 1, time() + 60, "/");
            $_COOKIE['eco'] = 1;
        }
        if (!isset($_COOKIE['dep'])) {
            setcookie("dep", 1, time() + 60, "/");
            $_COOKIE['dep'] = 1;
        }
        if (!isset($_COOKIE['pol'])) {
            setcookie("pol", 1, time() + 60, "/");
            $_COOKIE['pol'] = 1; 
        }
        ?>

        <?php
        if ($_COOKIE['eco'] == 1) {
            echo "<h1>NOTICIA ECONOMICA</h1>
                <p>
                lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum <br>
                lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum <br>
                lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum <br>
                lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum <br>
                </p>";
        }

        if ($_COOKIE['dep'] == 1) {
            echo "<h1>NOTICIA DEPORTIVA</h1>
                <p>
                lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum <br>
                lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum <br>
                lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum <br>
                lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum <br>
                </p>";
        }

        if ($_COOKIE['pol'] == 1) {
            echo "<h1>NOTICIA POLITICA</h1>
                <p>
                lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum <br>
                lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum <br>
                lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum <br>
                lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum <br>
                </p>";
        }

        ?>
        <a href="configuracion.php">CAMBIAR CONFIGURACION</a>
    </body>
</html>