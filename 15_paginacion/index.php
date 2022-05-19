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

  try{

    $base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');

    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $base->exec("SET CHARACTER SET utf8");
  
    $sql = "SELECT * FROM datos_usuarios LIMIT 0, 10";

    $resultado = $base->prepare($sql);

    $resultado->execute(array());

    while($registro = $resultado->fetch(PDO::FETCH_ASSOC)){

      echo "Nombre: " . $registro['Nombre'] . " Apellidos :" . $registro['Apellido'] . " Dirección: " . $registro['Direccion'] . "</br>";

    }

    $resultado->closeCursor();

  }catch(Exception $e){

    echo $e->getMessage();
  
  }

?>
</body>
</html>