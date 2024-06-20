<html>
    <head>
        <title>CONFIGURACION</title>
    </head>
    <body>
        <h1>CONFIGURACION</h1>
        <form action="" method="POST">
            <p>Elegir periodicos:</p>
            <input type="checkbox" name="eco" value="eco" 
            <?php if ($_COOKIE['eco'] == 1) echo "checked='checked'"; ?>>
            <label for="eco">Economia</label> <br>
            <input type="checkbox" name="dep" value="dep" 
            <?php if ($_COOKIE['dep'] == 1) echo "checked='checked'"; ?>>
            <label for="dep">Deportes</label> <br>
            <input type="checkbox" name="pol" value="pol" 
            <?php if ($_COOKIE['pol'] == 1) echo "checked='checked'"; ?>>
            <label for="pol">Politica</label> <br> <br>
            <input type="submit" name="submit" value="GUARDAR">
        </form>

        <br>

        <a href="resetConfiguracion.php">RESTABLECER VALORES</a> <br>
        <a href="paginaPrincipal.php">VOLVER A PAGINA PRINCIPAL</a>

        <?php
        if (isset($_POST['submit'])) {           
            $eco = isset($_POST['eco']) ? 1 : 0;
            setcookie("eco", $eco, time() + 60, "/");
            $_COOKIE['eco'] = $eco;
    
            $dep = isset($_POST['dep']) ? 1 : 0;
            setcookie("dep", $dep, time() + 60, "/");
            $_COOKIE['dep'] = $dep;
    
            $pol = isset($_POST['pol']) ? 1 : 0;
            setcookie("pol", $pol, time() + 60, "/");
            $_COOKIE['pol'] = $pol;
        }
        ?>
    </body>
</html>