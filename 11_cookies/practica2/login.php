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

  if(isset($_POST["enviar"])){

    $usu = htmlentities (addslashes($_POST["login"]));
    $cont = htmlentities (addslashes($_POST["con"]));
    
    try{

      $base = new PDO ('mysql:hosy=localhost; dbname=pruebas', 'root', '');

      $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $base->exec("SET CHARACTER SET utf8");

      $sql = "SELECT * FROM usu_cont WHERE USUARIOS = :usu AND PASSWORD = :con";

      $resultado = $base->prepare($sql);

      //$resultado->execute(array(":usu"=>$usu, ":con"=>$cont));
      
      $resultado->bindValue(":usu", $usu);
      $resultado->bindValue(":con", $cont);

      $resultado->execute();

      $numero_registro = $resultado->rowCount();

      if($numero_registro != 0){

        session_start();

        $_SESSION["usuario"] = $usu;

        if (isset($_POST["record"]) && $_POST["record"]) {

          setcookie ("user", $usu, time() + 30000);
          setcookie ("password", $cont, time() + 30000);
          header("Location:login.php");
          
        }

      }else {

        echo "Contraseña incorrecta";

      }

    }catch(Exception $e) {

      die("Error: " . $e->getMessage());

    }
  }
  
  ?>
  <?php
  
    if(!isset($_COOKIE["user"]) && !isset($_SESSION["usuario"])) {
      
      include ("form.php");
      
    }else {

      echo "<a href='cerrar_sesion.php'>Cerrar sesión</a><br/> ";
      echo "<a href='eliminar_cookies.php'>Eliminar cookies</a><br/> ";

    }
  ?>

  <img src="https://picsum.photos/200/300?random=1">
  <img src="https://picsum.photos/200/300?random=2">

</body>
</html>