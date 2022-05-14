<?php

  $pais = $_GET["buscar"];

  require ("conection_data.php");

  $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

  if (mysqli_connect_errno()){
    echo "Fallo al conectar con BBDD";
    exit ();
  }

  mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");

  mysqli_set_charset($conexion, "utf8");

  $sql = "SELECT NOMBREARTÍCULO, PAÍSDEORIGEN, SECCIÓN FROM ARTÍCULOS WHERE PAÍSDEORIGEN=?";

  $resultado = mysqli_prepare($conexion, $sql);

  $ok = mysqli_stmt_bind_param ($resultado, "s", $pais);

  $ok = mysqli_stmt_execute($resultado);

  if ($ok == false){
    echo "ERROR";
  }else{

    $ok = mysqli_stmt_bind_result($resultado, $nombre_art, $p_orig, $seccion);

    echo "Articulos encontrados: <br/>";

    while(mysqli_stmt_fetch($resultado)){

      echo $nombre_art . " " . $p_orig . " " . $seccion . "<br/>";

    }

    mysqli_stmt_close($resultado);

  }

?>