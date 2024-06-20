<?php
session_start();

$db = mysqli_connect("localhost", "root") or die ("Problemas de conexión a la base de datos");
mysqli_select_db($db, "compras");

$cantManzana = $_POST['manzana'];
$cantBanana = $_POST['banana'];
$cantFrutilla = $_POST['frutilla'];

$sql = "SELECT * FROM catalogo WHERE product=manzana";
$resultado1 = mysqli_query($db, $sql);
$fila1 = mysqli_fetch_array($resultado);

$sql = "SELECT * FROM catalogo WHERE product=banana";
$resultado2 = mysqli_query($db, $sql);
$fila2 = mysqli_fetch_array($resultado);

$sql = "SELECT * FROM catalogo WHERE product=frutilla";
$resultado3 = mysqli_query($db, $sql);
$fila3 = mysqli_fetch_array($resultado);

if (mysqli_num_rows($resultado1) != 0 && mysqli_num_rows($resultado1) != 0 && 
    mysqli_num_rows($resultado1) != 0) {
    $montoManzana = $fila1['precio'] * $cantManzana;
    $montoBanana = $fila2['precio'] * $cantBanana;
    $montoFrutilla = $fila3['precio'] * $cantFrutilla;

    $montoTotal = $montoManzana + $montoBanana + $montoFrutilla;
    echo "Monto total de la compra: ".$montoTotal;
} else {
    echo "Un error ha ocurrido.";
}
?>