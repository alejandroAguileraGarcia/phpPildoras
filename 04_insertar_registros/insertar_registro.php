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

  require ("conection_data.php");

  $seccion = $_GET["seccion"];
  $n_art = $_GET["n_art"];
  $fech = $_GET["fech"];
  $p_orig = $_GET["p_orig"];
  $precio = $_GET["precio"];

  $conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

  if(mysqli_connect_errno()){
    
    echo "Fallo al conectar con la base de datos";

    exit();
    
  }

  mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");

  mysqli_set_charset($conexion, "utf8");

  $consulta="INSERT INTO ARTÍCULOS VALUES ('$seccion', '$n_art', '$fech', '$p_orig', $precio)";

  $resultados=mysqli_query($conexion, $consulta);

  if ($resultados == false){
    echo "Error en la consulta";
  }else{
    echo "Registro con exito";
  }

  mysqli_close($conexion);

?>
  
</body>
</html>
