<?php
$p1 = $_POST['nombre'];
$p2 = $_POST['peso'];
$p3 = $_POST['estatura'];

$IMC= ($p2 / ($p3*$p3))*10000;
echo "Masa corporal <br>".$IMC." <br> ";
if($IMC < 18.5){
  echo "Por debajo del peso";
}
if (($IMC >= 18.5) and ($IMC <= 24.9)){
  echo "Esta es un estado saludable";
}
if (($IMC >= 25.0) and ($IMC <= 29.9)) {
  echo "Te encuentra con sobre peso";
}
if (($IMC >= 30.0) and ($IMC <= 39.9)) {
  echo "Mi loco estas obeso";
}if($IMC > 40){
  echo "Loco estas en obesidad mórbida";
}
?>
