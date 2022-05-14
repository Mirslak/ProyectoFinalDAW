<?php

  $servidor = "192.168.1.64";
  $usuario = "debianDB";
  $password = "debianDB";
  $nombreBaseDeDatos = "test";

  try{
    $conexion = mysqli_connect("192.168.1.64", "debianDB", "debianDB", "test");
  }catch(Exception $e){
    echo "Ocurrió algo con la base de datos: " . $e->getMessage();
  }

  
?>