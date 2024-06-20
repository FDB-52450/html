<html>
    <head>
        <title>CONTADOR</title>
    </head>
    <body>
        <?php
        if (!isset($_COOKIE["visitas"])) {
            echo "<h1> Bienvenido al sitio web! </h1>";
            setcookie("visitas", 1, time() + 120);
        } else {
            $cantVisitas = $_COOKIE["visitas"] + 1;
            setcookie("visitas", $cantVisitas, time() + 120, "/");
            echo "<h1> Cantidad que la pagina fue visitada: ".$cantVisitas."</h1>";
        }
        ?>
    </body>
</html>