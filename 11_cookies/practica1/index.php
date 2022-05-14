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
  
  if (isset($_POST["enviar"])){
    
    setcookie ("idioma", $_POST["lang"], time() + 2000000);
    header ("location:index.php");

  }
  
  if (isset($_COOKIE["idioma"])){
    echo "LLEOG";
    
    if ($_COOKIE["idioma"] == "ESP"){

      header ("location:esp.php");

    }else if ($_COOKIE["idioma"] == "ENG"){

      header ("location:eng.php");
    
    }
  }

  ?>

  <h1>Elige tu idioma</h1>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="lang">Lang (ESP o ENG): </label>
    <input type="text" name="lang" id="lang">
    <button type="submit" name="enviar">Enviar</button>
  </form>
  
</body>
</html>