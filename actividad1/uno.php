<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $p1 = $_POST['nota1'];
      $p2 = $_POST['nota2'];
      $p3 = $_POST['nota3'];
      $p4 = $_POST['notae'];
      $p5 = $_POST['notat'];

      $rel = ($p1 + $p2 + $p3) / 3;

      $parciales = $rel * 0.35;
      $examen = $p4 * 0.35;
      $trabajo = $p5 * 0.30;
      $final = $parciales + $examen + $trabajo;
      echo "Nota final: ". $final ."<br>";

      if($final<3){
        echo "Estas reprobado";
      }else{
        echo "Aprobado";
      }
    ?>

  </body>
</html>
