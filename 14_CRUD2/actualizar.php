<?php

  include("conexion.php");

  $sql = 'UPDATE datos_usuarios SET Nombre=:nom, Apellido=:ape, Direccion=:dir WHERE ID=:id';

  $registros=$base->prepare($sql);

  $registros->execute([":nom" => $_POST["nombre"], ":ape"=> $_POST["apellidos"], ":dir"=>$_POST["direccion"], ":id"=>$_GET["Id"]]);

  Header("Location:index.php")

?>