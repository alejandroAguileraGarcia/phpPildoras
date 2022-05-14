<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <h1>Registro de Artículos</h1>
  <form action="insertar_registro.php" method="get">
    <label for="seccion">Sección</label>
    <input type="text" name="seccion" id="seccion"></br>
    <label for="n_art">Nombre artículo</label>
    <input type="text" name="n_art" id="n_art"></br>
    <label for="fech">Fecha</label>
    <input type="text" name="fech" id="fech"></br>
    <label for="p_orig">País de origen</label>
    <input type="text" name="p_orig" id="p_orig"></br>
    <label for="precio">Precio</label>
    <input type="text" name="precio" id="precio"></br>
    <button type="submit">Enviar</button>
  </form>
</body>
</html>