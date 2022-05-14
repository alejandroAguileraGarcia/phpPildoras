<?php
  
  require "Add_user.php";

  $login = $_POST["login"];
  $contra = password_hash($_POST["con"], PASSWORD_DEFAULT);

  $user = new Add_user();

  $array_prod = $user->insert_user($login, $contra);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <h1>Registro añadido</h1>


</body>
</html>