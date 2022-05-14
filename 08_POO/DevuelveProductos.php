<?php

  require "Conexion.php";

  class DevuelveProductos extends Conexion{

    public function __construct() {

      parent::__construct();

    }

    public function get_productos($dato) {

      $sql = 'SELECT * FROM ARTÍCULOS WHERE PAÍSDEORIGEN = "' . $dato . '"';

      $sentencia=$this->conexion_db->prepare($sql);

      $sentencia->execute(array());
      
      $productos = $sentencia->fetchAll(PDO::FETCH_ASSOC);

      $sentencia->closeCursor();

      $this->conexion_db = null;

      /*
      $resultado = $this->conexion_db->query($sql);

      $productos = $resultado->fetch_all(MYSQLI_ASSOC);*/

      return $productos;
    }

  }

?>