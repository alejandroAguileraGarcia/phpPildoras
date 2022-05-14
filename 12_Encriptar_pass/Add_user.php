<?php

  require "Conexion.php";

  class Add_user extends Conexion{

    public function __construct() {

      parent::__construct();

    }

    public function insert_user($logg, $cont) {

      $sql = 'INSERT INTO USU_CONT VALUES (NULL, :logg, :cont)';

      $sentencia=$this->conexion_db->prepare($sql);

      $sentencia->execute([':logg'=>$logg, ':cont'=>$cont]);

      $sentencia->closeCursor();

      $this->conexion_db = null;

    }

  }

?>