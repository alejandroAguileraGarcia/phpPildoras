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

  $busqueda_sec = $_GET["sec"];
  $busqueda_p_orig = $_GET["p_orig"];

  try{

    $base = new PDO ('mysql:host=localhost; dbname=pruebas', 'root', '');
  
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $base->exec("SET CHARACTER SET utf8");

    $sql = "SELECT * FROM artículos WHERE SECCIÓN = :sec AND PAÍSDEORIGEN = :porig";

    $resultado = $base->prepare($sql);

    $resultado->execute(array(":sec"=>$busqueda_sec, ":porig"=>$busqueda_p_orig));

    while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
      echo $fila['SECCIÓN'];
      echo $fila['NOMBREARTÍCULO'];
      echo $fila['FECHA'];
      echo $fila['PAÍSDEORIGEN'];
      echo $fila['PRECIO'];
      echo '<br/>';
    }

    $resultado->closeCursor();

  }catch(Exception $e) {

    die("Error: ". $e->GetMessage());

  }finally{

    $base = null;

  }



  ?>

</body>
</html>