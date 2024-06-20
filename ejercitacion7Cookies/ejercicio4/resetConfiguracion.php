<?php
setcookie("eco", 1, time() + 60, "/");
$_COOKIE['eco'] = 1;

setcookie("dep", 1, time() + 60, "/");
$_COOKIE['dep'] = 1;

setcookie("pol", 1, time() + 60, "/");
$_COOKIE['pol'] = 1;

header("Location: configuracion.php");
exit;
?>