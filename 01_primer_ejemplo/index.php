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

  include ("conection_data.php");
  
  $conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
  
  if(mysqli_connect_errno()){
    
    echo "Fallo al conectar con la base de datos";

    exit();
    
  }
  
  mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");
  
  mysqli_set_charset($conexion, "utf8");

  $consulta="SELECT * FROM artículos";

  $resultados=mysqli_query($conexion, $consulta);

  echo "<table border='1'>";

  while($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){
    echo "<tr><td>";
    echo $fila['SECCIÓN'] . "</td><td>";
    echo $fila['NOMBREARTÍCULO'] . "</td><td>";
    echo $fila['PAÍS DE ORIGEN'] . "</td><td>";
    echo $fila['PRECIO'] . "</td><td>";
    echo $fila['FECHA'] . "</td></tr>";
    echo "</tr>";
  }

  echo "</table>";

  mysqli_close($conexion);
  
?>
</body>
</html>