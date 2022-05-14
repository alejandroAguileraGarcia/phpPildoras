<?php

  require "DevuelveProductos.php";

  $país = $_GET["buscar"];

  $productos = new DevuelveProductos();

  $array_prod = $productos->get_productos($país);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php

  echo "<table>";
  
  foreach ($array_prod as $prod) {

    echo "<tr><td>";
    echo $prod['SECCIÓN'] . "</td><td>";
    echo $prod['NOMBREARTÍCULO'] . "</td><td>";
    echo $prod['FECHA'] . "</td><td>";
    echo $prod['PAÍSDEORIGEN'] . "</td><td>";
    echo $prod['SECCIÓN'] . "</td></tr>";

  }

  echo "</table>";

  ?>
  
</body>
</html>