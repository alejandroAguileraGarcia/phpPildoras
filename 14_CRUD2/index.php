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

  include ("conexion.php");

  $registros = $base->query("SELECT * FROM datos_usuarios")->fetchAll(PDO::FETCH_OBJ);

  ?>

  <h1>CRUD</h1>

  <table border="1">
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Dirección</th>
    </tr>

  <?php
  
    foreach($registros as $registro){

      echo "
        <tr>
          <td>" . $registro->Id . "</td>
          <td>" . $registro->Nombre . "</td>
          <td>" . $registro->Apellido . "</td>
          <td>" . $registro->Direccion . "</td>
          <td><a href='borrar.php?Id=" . $registro->Id . "' ><button name='up' id='up'>Borrar</button></a></td>
          <td><a href='editar.php?Id=" . $registro->Id . " & Nombre=" . $registro->Nombre . " & Apellido=" . $registro->Apellido . " & Direccion=" . $registro->Direccion . "' ><button name='del' id='del'>Actualizar</button></a></td>
        </tr>

      ";

    }

  ?>

    <form action="insertar.php" method="get">
      <tr>
        <td></td>
        <td><input type='text' name='Nom' size='10' class='centrado'></td>
        <td><input type='text' name='Ape' size='10' class='centrado'></td>
        <td><input type='text' name=' Dir' size='10' class='centrado'></td>
        <td class='bot'><button type='submit' name='cr' id='cr'>Insertar</button></td>
      </tr>
    </form>
      
  </table>

</body>
</html>