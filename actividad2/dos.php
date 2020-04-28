<?php
$p1 = $_POST['nombre'];
$p2 = $_POST['cantidad'];
$p3 = $_POST['precio'];

$salario = 450000;
$comision = 50000 * $p2;
$preciototal = $p3 * 0.05;

$total = $salario + $comision + $preciototal;

echo "total a pagar: ". $total;

?>
