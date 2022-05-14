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
    $Id = $_GET['Id']
  ?>

  <h1>Actualizar</h1>
  <form action="actualizar.php?Id=<?php echo $Id?>" method="post">
    <label for="nombre">Nombre </label>
    <input type="text" name="nombre" id="nombre" value="<?php echo $_GET['NomUsu']?>"></br>
    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos" id="apellidos" value="<?php echo $_GET['ApeUsu']?>"></br>
    <label for="direccion">Direccion</label>
    <input type="text" name="direccion" id="direccion" value="<?php echo $_GET['DirUsu']?>"></br>
    <button type="submit">Enviar</button>
  </form>

  <?php
  


  ?>
</body>
</html>