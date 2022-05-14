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
  
    $conexion = new mysqli("localhost", "root", "", "pruebas");

    if($conexion->connect_errno){
      echo "Falló la conexión " . $conexion->connect_errno;
    }

    $conexion->set_charset("utf8");

    $sql = "SELECT * FROM artículos";

    $resultados = $conexion->query($sql);

    if($conexion->errno){
      die($conexion->error);
    }

    echo "<table border='1'>";

    while($fila = $resultados->fetch_assoc()){
      echo "<tr><td>";
      echo $fila['SECCIÓN'] . "</td><td>";
      echo $fila['NOMBREARTÍCULO'] . "</td><td>";
      echo $fila['PAÍSDEORIGEN'] . "</td><td>";
      echo $fila['PRECIO'] . "</td><td>";
      echo $fila['FECHA'] . "</td></tr>";
    }
  
    echo "</table>";
  
    $conexion->close();

  ?>

</body>
</html> 