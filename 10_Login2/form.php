<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

  <label for="login">Login: </label>
  <input type="text" name="login" id="login">
  <label for="con">Contraseña: </label>
  <input type="text" name="con" id="con">
  <button type="submit" name="enviar">Login</button>

  </form>

</body>
</html>