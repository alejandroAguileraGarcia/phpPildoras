<?php

  include("conexion.php");

  $sql = 'INSERT INTO datos_usuarios (Nombre, Apellido, Direccion) VALUES (:nom, :ape, :dir)';

  $registros=$base->prepare($sql);

  $registros->execute([":nom" => $_GET["Nom"], ":ape"=> $_GET["Ape"], ":dir"=>$_GET["Dir"]]);

  Header("Location:index.php");

?>