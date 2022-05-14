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
  
    include("conexion.php");

    /*
    $conexion=$base->query("SELECT * FROM datos_usuarios");

    $registros=$conexion->fetchAll(PDO::FETCH_OBJ);
    */

    $registros=$base->query("SELECT * FROM datos_usuarios")->fetchAll(PDO::FETCH_OBJ);

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
          <td>" . $registro->id . "</td>
          <td>" . $registro->NomUsu . "</td>
          <td>" . $registro->ApeUsu . "</td>
          <td>" . $registro->DirUsu . "</td>
          <td><a href='borrar.php?Id=" . $registro->id . "' ><button name='up' id='up'>Borrar</button></a></td>
          <td><a href='editar.php?Id=" . $registro->id . " & NomUsu=" . $registro->NomUsu . " & ApeUsu=" . $registro->ApeUsu . " & DirUsu=" . $registro->DirUsu . "' ><button name='del' id='del'>Actualizar</button></a></td>
        </tr>

      ";

    }

    ?>

    <tr>
	    <td></td>
      <td><input type='text' name='Nom' size='10' class='centrado'></td>
      <td><input type='text' name='Ape' size='10' class='centrado'></td>
      <td><input type='text' name=' Dir' size='10' class='centrado'></td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td>
    </tr>

  </table>

</body>
</html>