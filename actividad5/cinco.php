<?php
  $p1 = $_POST['articulo'];
  $p2 = $_POST['clave'];
  $p3 = $_POST['precio'];

  $s1 = $p3 * 0.10;
  $s2 = $p3 * 0.20;
  $d1 = $p3 - $s1;
  $d2 = $p3 - $s2;

  if ($p2 == 1) {
    echo "Precio con descuento: ".$d1;
  }
  if ($p2 == 2) {
    echo "Precio con descuento: ".$d2;
  }else{
    echo "No tienes descuento: ".$p3;
  }

?>
