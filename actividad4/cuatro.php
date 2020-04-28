<?php
$p1 = $_POST['dinero'];

$s1 = $p1 * 0.40;
$s2 = $p1 * 0.30;

echo "Presupuesto para: $".$p1." <br> ";
echo "Ginecología: $".$s1." <br> ";
echo "Traumatología: $".$s2." <br> ";
echo "Pediatría: $".$s2." <br> ";
?>
