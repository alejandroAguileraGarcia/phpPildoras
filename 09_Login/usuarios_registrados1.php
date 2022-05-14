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
  
    session_start();

    if(!isset($_SESSION["usuario"])){

      header ("Location:login.php");

    }

  ?>

  <h1>SOLO USUARIOS</h1>

  <?php
  
    echo "<h3>Hola ". $_SESSION["usuario"] . "</h3>";

  ?>

  <a href="cierre.php">Cerrar sesión</a>

</body>
</html>